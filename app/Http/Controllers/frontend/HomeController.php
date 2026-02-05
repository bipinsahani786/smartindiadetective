<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormSubmitted;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function services(){
        return view('frontend.pages.services');
    }

    public function blog(){
        return view('frontend.pages.blog');
    }

    public function corporate_fraud(){
        return view('frontend.pages.corporate-fraud');
    }

    public function privacy_policy(){
        return view('frontend.pages.privacy-policy');
    }

    public function terms_and_conditions(){
        return view('frontend.pages.terms');
    }

    public function process(){
        return view('frontend.pages.process');
    }

    public function matrimonial(){
        return view('frontend.pages.matrimonial');
    }

    public function siteMap(){
        return view('frontend.pages.site-map');
    }

    public function surveillance(){
        return view('frontend.pages.surveillance');
    }

    // Submit Contact Form
    public function submitContactForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'service' => 'nullable|in:matrimonial,corporate-fraud,surveillance,cyber,other',
            'message' => 'required|string|min:10',
        ]);

        // Add IP address
        $validated['ip_address'] = $request->ip();

        // Save to database
        $contactForm = ContactForm::create($validated);

        // Send email to admin
        Mail::to('indiasmart89@gmail.com')->send(new ContactFormSubmitted($contactForm));

        // Send confirmation to user
        Mail::to($contactForm->email)->send(new \App\Mail\ContactFormConfirmation($contactForm));

        return response()->json([
            'success' => true,
            'message' => 'Thank you! We will contact you soon.',
        ]);
    }
}
