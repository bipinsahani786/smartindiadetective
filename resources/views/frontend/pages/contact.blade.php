@extends('frontend.layouts.base')
@push('title')
    <title>Contact SMART INDIA DETECTIVE | Free Consultation</title>
@endpush
@section('meta_description', 'Contact SMART INDIA DETECTIVE for free confidential consultation. Available 24/7. Call +91 7982697272 or email indiasmart89@gmail.com. Located near Akshardham Mandir, Delhi.')
@section('meta_keywords', 'contact detective agency, inquiry form, consultation, call private investigator')
@section('page-content')
  <section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1920&auto=format&fit=crop" class="w-full h-full object-cover opacity-40" alt="Contact Background">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-white mb-4">Get In <span class="text-gold-gradient">Touch</span></h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">100% Confidential Consultation. We are available 24/7 to listen to your problem.</p>
        </div>
    </section>

    <section class="py-20 bg-dark relative -mt-16 z-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-card p-8 rounded shadow-2xl border border-white/5 text-center group hover:border-gold transition duration-300" data-aos="fade-up">
                    <div class="w-16 h-16 bg-surface rounded-full flex items-center justify-center mx-auto mb-6 text-gold text-2xl group-hover:bg-gold group-hover:text-black transition">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">Call Us Anytime</h3>
                    <p class="text-gray-400 text-sm mb-4">Our lines are open 24/7 for urgent help.</p>
                    <a href="tel:+917982697272" class="text-gold font-bold hover:underline">+91 7982697272</a>
                </div>

                <div class="bg-card p-8 rounded shadow-2xl border border-white/5 text-center group hover:border-gold transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-surface rounded-full flex items-center justify-center mx-auto mb-6 text-gold text-2xl group-hover:bg-gold group-hover:text-black transition">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">Secure Email</h3>
                    <p class="text-gray-400 text-sm mb-4">Send us case details securely.</p>
                    <a href="mailto:indiasmart89@gmail.com" class="text-gold font-bold hover:underline">indiasmart89@gmail.com</a>
                </div>

                <div class="bg-card p-8 rounded shadow-2xl border border-white/5 text-center group hover:border-gold transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-surface rounded-full flex items-center justify-center mx-auto mb-6 text-gold text-2xl group-hover:bg-gold group-hover:text-black transition">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">Visit Office</h3>
                    <p class="text-gray-400 text-sm mb-4">Connaught Place, New Delhi, India</p>
                    <span class="text-gold text-xs font-bold uppercase tracking-widest border border-gold px-2 py-1 rounded">By Appointment Only</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-surface">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <div class="bg-card p-8 rounded-lg border border-white/10 shadow-lg" data-aos="fade-right">
                    <h2 class="text-2xl font-serif font-bold text-white mb-2">Send us a Message</h2>
                    <p class="text-gray-400 text-sm mb-6">Your identity will be kept anonymous. Feel free to use a fake name if you are uncomfortable.</p>
                    
                    <form class="space-y-4" method="POST" action="{{ route('submit.contact-form') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">Name / Alias</label>
                                <input type="text" name="name" required class="w-full bg-dark border border-gray-700 p-3 rounded text-white focus:border-gold outline-none focus:ring-1 focus:ring-gold transition">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">Phone Number</label>
                                <input type="text" name="phone" class="w-full bg-dark border border-gray-700 p-3 rounded text-white focus:border-gold outline-none focus:ring-1 focus:ring-gold transition">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Email Address</label>
                            <input type="email" name="email" required class="w-full bg-dark border border-gray-700 p-3 rounded text-white focus:border-gold outline-none focus:ring-1 focus:ring-gold transition">
                        </div>
                        
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Service Required</label>
                            <select name="service" class="w-full bg-dark border border-gray-700 p-3 rounded text-gray-300 focus:border-gold outline-none focus:ring-1 focus:ring-gold transition">
                                <option value="">Select Service</option>
                                <option value="matrimonial">Matrimonial Investigation</option>
                                <option value="corporate-fraud">Corporate Investigation</option>
                                <option value="surveillance">Surveillance</option>
                                <option value="cyber">Cyber Crime</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Case Details (Brief)</label>
                            <textarea name="message" rows="4" required class="w-full bg-dark border border-gray-700 p-3 rounded text-white focus:border-gold outline-none focus:ring-1 focus:ring-gold transition"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-gold hover:bg-white text-black font-bold py-4 rounded transition shadow-lg hover:shadow-gold/20 flex justify-center items-center gap-2">
                            <span>Submit Request</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                        <p class="text-[10px] text-center text-gray-500 mt-2"><i class="fa-solid fa-lock text-gold mr-1"></i> Data is encrypted and deleted after 48 hours.</p>
                    </form>
                </div>

                <div class="h-full min-h-[400px] flex flex-col" data-aos="fade-left">
                    <h2 class="text-2xl font-serif font-bold text-white mb-6">Locate Us</h2>
                    <div class="map-container flex-grow relative rounded-lg overflow-hidden border border-white/10 shadow-2xl">
                        <div class="absolute top-4 left-4 z-10 bg-black/90 p-4 rounded border border-gold/30 shadow-lg backdrop-blur">
                            <p class="text-white font-bold text-sm"><i class="fa-solid fa-building text-gold mr-2"></i> SMART INDIA DETECTIVE HQ</p>
                            <p class="text-xs text-gray-400 mt-1">Connaught Place, New Delhi</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.0649234861664!2d77.21772151508246!3d28.62779698241977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd37b741d057%3A0xcdee88e47393c3f1!2sConnaught%20Place%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1645524856213!5m2!1sen!2sin" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-dark">
        <div class="container mx-auto px-6 max-w-3xl text-center">
            <h2 class="text-2xl font-serif font-bold text-white mb-8">Before You Call...</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                <div class="bg-card p-4 rounded border border-white/5">
                    <h4 class="text-gold font-bold text-sm mb-2">Is consultation free?</h4>
                    <p class="text-gray-400 text-xs">Yes, the initial discussion to understand your case is completely free.</p>
                </div>
                <div class="bg-card p-4 rounded border border-white/5">
                    <h4 class="text-gold font-bold text-sm mb-2">Do I need to visit the office?</h4>
                    <p class="text-gray-400 text-xs">No, 90% of our cases are handled remotely via phone/email for your convenience.</p>
                </div>
            </div>
        </div>
    </section>
@endsection