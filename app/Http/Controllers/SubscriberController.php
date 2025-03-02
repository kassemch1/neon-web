<?php
namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SubscriberController extends Controller
{
    /**
     * Store a new subscriber.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('subscribers', 'email'),
            ],
        ]);

        Subscriber::create($validated);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for subscribing!'
            ]);
        }

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}
