<?php
namespace App\Http\Controllers;

use App\Mail\SubscribeMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;

class SubscriberController extends Controller
{
    /**
     * Store a new subscriber.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, Turnstile $turnstile)
    {
        try {
            $validated = $request->validate([
                'email' => ['required', 'email', 'max:255', Rule::unique('subscribers', 'email')],
                'cf-turnstile-response' => ['required', $turnstile],
            ]);

            Subscriber::create(['email' => $validated['email']]); // Save email
            Mail::to('contact@armacadabra.com')->send(new SubscribeMail($validated));
            return response()->json([
                'success' => true,
                'message' => 'Thank you for subscribing!'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed', $e->errors());
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Subscription failed: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Subscription failed: ' . $e->getMessage()
            ], 500);
        }
    }
}
