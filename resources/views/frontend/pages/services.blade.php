@extends('frontend.layouts.base')
@push('title')
    <title>Investigation Services - Matrimonial, Corporate & Surveillance | SMART INDIA DETECTIVE</title>
@endpush
@section('meta_description', 'Professional investigation services including matrimonial detective, corporate fraud investigation, surveillance, cyber crime & missing person investigation. Confidential & legal methods.')
@section('meta_keywords', 'matrimonial detective, corporate fraud investigation, surveillance services, cyber crime investigation, missing person search, detective services')

@section('page-content')
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=1920&auto=format&fit=crop" class="w-full h-full object-cover opacity-30" alt="Matrimonial Investigation">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <span class="bg-gold text-black px-4 py-1 rounded text-xs font-bold uppercase tracking-widest mb-4 inline-block shadow-lg">Personal Investigation</span>
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-white mb-4">Matrimonial <span class="text-gold-gradient">Detective</span></h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">Pre-matrimonial verification and Post-matrimonial infidelity checks. Know the truth before it's too late.</p>
        </div>
    </section>

    <section class="py-20 bg-dark">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                
                <div class="lg:col-span-2">
                    
                    <div class="mb-12" data-aos="fade-up">
                        <h2 class="text-3xl font-serif font-bold text-white mb-6">Service Overview</h2>
                        <p class="text-gray-400 leading-relaxed mb-4 text-justify">
                            Marriage is a life-long commitment, and doubts can destroy mental peace. Whether you are planning an arranged marriage and want to verify the background, or you suspect your current partner of infidelity, <strong>SMART INDIA DETECTIVE</strong> provides 100% confidential investigation services.
                        </p>
                        <p class="text-gray-400 leading-relaxed text-justify">
                            We do not rely on rumors. We rely on evidence. Our team of expert investigators gathers undeniable proof (Photos, Videos, Audio) to help you make the right decision for your future.
                        </p>
                    </div>

                    <div class="mb-12 bg-card p-8 rounded border-l-4 border-gold shadow-lg" data-aos="fade-up">
                        <h3 class="text-xl font-bold text-white mb-6 flex items-center"><i class="fa-solid fa-circle-question text-gold mr-3"></i> When Do You Need This?</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-gold text-sm font-bold uppercase mb-3">Pre-Matrimonial</h4>
                                <ul class="space-y-3 text-sm text-gray-400">
                                    <li class="flex items-start"><i class="fa-solid fa-check text-gold mt-1 mr-3"></i> Suspicious family background.</li>
                                    <li class="flex items-start"><i class="fa-solid fa-check text-gold mt-1 mr-3"></i> Doubts about job/salary claims.</li>
                                    <li class="flex items-start"><i class="fa-solid fa-check text-gold mt-1 mr-3"></i> Past relationships or marriage.</li>
                                    <li class="flex items-start"><i class="fa-solid fa-check text-gold mt-1 mr-3"></i> Drug/Alcohol addiction check.</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-gold text-sm font-bold uppercase mb-3">Post-Matrimonial</h4>
                                <ul class="space-y-3 text-sm text-gray-400">
                                    <li class="flex items-start"><i class="fa-solid fa-check text-gold mt-1 mr-3"></i> Partner coming home late often.</li>
                                    <li class="flex items-start"><i class="fa-solid fa-check text-gold mt-1 mr-3"></i> Secretive phone usage (passwords).</li>
                                    <li class="flex items-start"><i class="fa-solid fa-check text-gold mt-1 mr-3"></i> Sudden unexplained expenses.</li>
                                    <li class="flex items-start"><i class="fa-solid fa-check text-gold mt-1 mr-3"></i> Emotional distance & lying.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12" data-aos="fade-up">
                        <h3 class="text-2xl font-bold text-white mb-8">Our Process</h3>
                        <div class="relative border-l border-gray-700 ml-3 space-y-8">
                            <div class="ml-8 relative">
                                <span class="absolute -left-12 top-0 w-8 h-8 bg-gold rounded-full flex items-center justify-center text-black font-bold">1</span>
                                <h4 class="text-white font-bold text-lg">Consultation & Secrecy</h4>
                                <p class="text-gray-400 text-sm mt-2">We meet securely or talk via encrypted calls. You share details (Photo, Vehicle No, Schedule). We sign a Non-Disclosure Agreement (NDA).</p>
                            </div>
                            <div class="ml-8 relative">
                                <span class="absolute -left-12 top-0 w-8 h-8 bg-card border border-gold rounded-full flex items-center justify-center text-gold font-bold">2</span>
                                <h4 class="text-white font-bold text-lg">Surveillance Strategy</h4>
                                <p class="text-gray-400 text-sm mt-2">Our team shadows the subject physically. We use decoys if necessary to check loyalty.</p>
                            </div>
                            <div class="ml-8 relative">
                                <span class="absolute -left-12 top-0 w-8 h-8 bg-card border border-gold rounded-full flex items-center justify-center text-gold font-bold">3</span>
                                <h4 class="text-white font-bold text-lg">Evidence Collection</h4>
                                <p class="text-gray-400 text-sm mt-2">High-resolution photos, 4K videos, location logs, and interaction details are captured discreetly.</p>
                            </div>
                            <div class="ml-8 relative">
                                <span class="absolute -left-12 top-0 w-8 h-8 bg-card border border-gold rounded-full flex items-center justify-center text-gold font-bold">4</span>
                                <h4 class="text-white font-bold text-lg">Final Report</h4>
                                <p class="text-gray-400 text-sm mt-2">A digital report is sent to you. After your confirmation, all data is permanently deleted from our system.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12" data-aos="fade-up">
                        <h3 class="text-2xl font-bold text-white mb-6">Tools & Technology Used</h3>
                        <p class="text-gray-400 text-sm mb-6">We use only legal methods to ensure evidence is admissible if needed.</p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="bg-surface p-4 rounded text-center border border-white/5 group hover:border-gold transition">
                                <i class="fa-solid fa-camera-retro text-gold text-2xl mb-2 group-hover:scale-110 transition"></i>
                                <p class="text-xs text-gray-300">Long Range Cams</p>
                            </div>
                            <div class="bg-surface p-4 rounded text-center border border-white/5 group hover:border-gold transition">
                                <i class="fa-solid fa-location-arrow text-gold text-2xl mb-2 group-hover:scale-110 transition"></i>
                                <p class="text-xs text-gray-300">GPS Tracking</p>
                            </div>
                            <div class="bg-surface p-4 rounded text-center border border-white/5 group hover:border-gold transition">
                                <i class="fa-solid fa-user-secret text-gold text-2xl mb-2 group-hover:scale-110 transition"></i>
                                <p class="text-xs text-gray-300">Decoy Agents</p>
                            </div>
                            <div class="bg-surface p-4 rounded text-center border border-white/5 group hover:border-gold transition">
                                <i class="fa-solid fa-laptop-file text-gold text-2xl mb-2 group-hover:scale-110 transition"></i>
                                <p class="text-xs text-gray-300">Digital Forensics</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8" data-aos="fade-up">
                        <h3 class="text-2xl font-bold text-white mb-6">Frequently Asked Questions</h3>
                        <div class="space-y-3">
                            <details class="bg-card p-4 rounded border border-white/5 cursor-pointer group">
                                <summary class="font-bold text-white flex justify-between items-center list-none">
                                    Will the subject know they are being watched?
                                    <span class="text-gold transition group-open:rotate-180"><i class="fa-solid fa-chevron-down"></i></span>
                                </summary>
                                <p class="text-sm text-gray-400 mt-3">Never. Our agents are trained to maintain distance. If there is a risk of exposure, we abort the day's operation rather than getting caught.</p>
                            </details>
                            <details class="bg-card p-4 rounded border border-white/5 cursor-pointer group">
                                <summary class="font-bold text-white flex justify-between items-center list-none">
                                    How much time does it take?
                                    <span class="text-gold transition group-open:rotate-180"><i class="fa-solid fa-chevron-down"></i></span>
                                </summary>
                                <p class="text-sm text-gray-400 mt-3">Usually, 3 to 7 days are enough to gather substantial evidence regarding routine and behavior.</p>
                            </details>
                        </div>
                    </div>

                </div>

                <div class="lg:col-span-1">
                    <div class="sticky top-24 space-y-8">
                        
                        <div class="bg-surface border border-gold/30 rounded-lg p-6 shadow-2xl relative overflow-hidden" data-aos="fade-left">
                            <div class="absolute top-0 right-0 bg-gold text-black text-[10px] font-bold px-2 py-1">POPULAR</div>
                            <div class="text-center mb-6">
                                <h3 class="text-gray-400 text-xs font-bold uppercase tracking-widest">Estimated Cost</h3>
                                <div class="text-4xl font-serif font-bold text-white mt-2">₹15k - ₹25k</div>
                                <p class="text-xs text-gray-500 mt-2">*For 3-5 Days Investigation</p>
                            </div>
                            
                            <a href="tel:+917982697272" class="block w-full bg-gold hover:bg-white text-black text-center font-bold py-3 rounded mb-4 transition shadow-lg">
                                <i class="fa-solid fa-phone mr-2"></i> Call for Exact Quote
                            </a>
                            <p class="text-[10px] text-center text-gray-500">100% Confidential Consultation</p>
                        </div>

                        <div class="bg-card p-6 rounded border border-white/10" data-aos="fade-left" data-aos-delay="100">
                            <h4 class="text-white font-bold mb-4">Free Case Analysis</h4>
                            <form class="space-y-3" method="POST" action="{{ route('submit.contact-form') }}">
                                @csrf
                                <input type="text" name="name" placeholder="Your Name (Fake name allowed)" required class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="text" name="phone" placeholder="Phone Number" class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="email" name="email" placeholder="Email Address" required class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="hidden" name="service" value="other">
                                <textarea name="message" rows="3" placeholder="Case Details..." required class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none"></textarea>
                                <button type="submit" class="w-full bg-white hover:bg-gray-200 text-black font-bold py-3 rounded transition text-sm">Submit Securely</button>
                            </form>
                        </div>

                        <div class="bg-card p-6 rounded border border-white/5">
                            <h4 class="text-gold font-bold text-sm uppercase mb-4 border-b border-white/10 pb-2">Other Services</h4>
                            <ul class="space-y-3 text-sm">
                                <li><a href="{{ route('corporate-fraud') }}" class="text-gray-400 hover:text-gold block transition flex items-center"><i class="fa-solid fa-angle-right mr-2 text-xs"></i> Corporate Fraud</a></li>
                                <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-gold block transition flex items-center"><i class="fa-solid fa-angle-right mr-2 text-xs"></i> Employee Verification</a></li>
                                <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-gold block transition flex items-center"><i class="fa-solid fa-angle-right mr-2 text-xs"></i> Cyber Crime</a></li>
                                <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-gold block transition flex items-center"><i class="fa-solid fa-angle-right mr-2 text-xs"></i> Missing Person</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-gradient-gold">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-serif font-bold text-black mb-4">Don't Live in Doubt. Find the Truth.</h2>
            <p class="text-black/80 font-bold mb-8 max-w-2xl mx-auto">We have solved over 2000+ matrimonial cases. Your identity is safe with us.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="tel:+917982697272" class="bg-black text-white px-8 py-3 rounded font-bold hover:bg-gray-800 transition shadow-xl">Call Now</a>
                <a href="https://wa.me/917982697272" class="bg-white text-black px-8 py-3 rounded font-bold hover:bg-gray-100 transition shadow-xl">WhatsApp Chat</a>
            </div>
        </div>
    </section>
@endsection