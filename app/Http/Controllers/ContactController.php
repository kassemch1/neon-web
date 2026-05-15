<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;
class ContactController extends Controller
{
    /**
     * Store a contact message.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function submitForm(Request $request, Turnstile $turnstile)
    {
//        dd($request->all());
        // Create a validator instance with custom rules and messages
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'message' => [
                'required',
                'string',
                'min:1',
                'max:255'
            ],
            'cf-turnstile-response' => ['required', $turnstile], // ✅ Moved here
        ], [
            'message.min' => 'Your message must be at least 1 characters long.',
            'message.max' => 'Your message cannot exceed 255 characters.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'message.required' => 'Message is required.',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            // For Ajax requests, return validation errors
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()->all()
                ], 422);
            }

            // For non-Ajax requests, redirect back with errors
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // If validation passes, create the contact
        try {
            $validated = $validator->validated();
            Contact::create($validated);

            Mail::to('contact@armacadabra-com-515715.hostingersite.com')->send(new ContactMail($validated));
            // Ajax success response
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for contacting us! We will get back to you soon.',
                    'redirect' => route('thank.you') // Add redirect URL
                ]);
            }

// Non-Ajax success redirect
            return redirect()->route('thank.you');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Contact form submission error: ' . $e->getMessage());

            // Ajax error response
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'errors' => ['An unexpected error occurred. Please try again later.']
                ], 500);
            }

            // Non-Ajax error redirect
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }


    public function showContactForm()
    {
        return view('contact');
    }
}
