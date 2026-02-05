@extends('frontend.layouts.base')
@push('title')
    <title>Matrimonial Detective Services | Pre & Post Marriage Investigation</title>
@endpush
@section('meta_description', 'Professional matrimonial investigation services including pre-matrimonial verification and post-matrimonial infidelity checks. Get undeniable evidence with 100% confidentiality.')
@section('meta_keywords', 'matrimonial detective, pre-marriage verification, infidelity investigation, loyalty test, marriage verification')
@section('page-content')
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?q=80&w=1920&auto=format&fit=crop" class="w-full h-full object-cover opacity-30" alt="Matrimonial Detective">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <span class="bg-gold text-black px-4 py-1 rounded text-xs font-bold uppercase tracking-widest mb-4 inline-block shadow-lg">Confidential Service</span>
            <h1 class="text-3xl md:text-6xl font-serif font-bold text-white mb-4">Matrimonial <span class="text-gold-gradient">Investigation</span></h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">Trust is good, but proof is better. We provide discreet background checks and infidelity surveillance.</p>
        </div>
    </section>

    <section class="py-20 bg-dark">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                
                <div class="lg:col-span-2 space-y-12">
                    
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-serif font-bold text-white mb-6">Why Investigate?</h2>
                        <p class="text-gray-400 leading-relaxed mb-4 text-justify">
                            Marriage is a lifelong decision, but in today's world, appearances can be deceptive. Whether you are entering an arranged marriage or suspect your current partner of being unfaithful, doubt can drain your mental peace.
                        </p>
                        <p class="text-gray-400 leading-relaxed text-justify">
                            <strong>SMART INDIA DETECTIVE</strong> helps you uncover the absolute truth. We use advanced surveillance, background checks, and digital forensics to gather evidence that stands up to scrutiny—all while ensuring your partner never finds out.
                        </p>
                    </div>

                    <div class="bg-card border border-white/5 rounded-lg overflow-hidden" data-aos="fade-up">
                        <div class="grid grid-cols-2 border-b border-white/10">
                            <button class="py-4 text-center font-bold text-gold bg-white/5 border-b-2 border-gold">Pre-Matrimonial</button>
                            <button class="py-4 text-center font-bold text-gray-500 hover:text-white">Post-Matrimonial</button>
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-white mb-4">Check Before You Marry</h3>
                            <p class="text-sm text-gray-400 mb-6">Verification of prospective bride/groom details for arranged or love marriages.</p>
                            
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <li class="flex items-start bg-surface p-3 rounded border border-white/5">
                                    <i class="fa-solid fa-check-circle text-gold mt-1 mr-3"></i>
                                    <div>
                                        <strong class="text-white text-sm block">Character Check</strong>
                                        <span class="text-xs text-gray-500">Reputation among neighbors/friends.</span>
                                    </div>
                                </li>
                                <li class="flex items-start bg-surface p-3 rounded border border-white/5">
                                    <i class="fa-solid fa-briefcase text-gold mt-1 mr-3"></i>
                                    <div>
                                        <strong class="text-white text-sm block">Job & Salary</strong>
                                        <span class="text-xs text-gray-500">Actual designation and income proof.</span>
                                    </div>
                                </li>
                                <li class="flex items-start bg-surface p-3 rounded border border-white/5">
                                    <i class="fa-solid fa-wine-bottle text-gold mt-1 mr-3"></i>
                                    <div>
                                        <strong class="text-white text-sm block">Habits</strong>
                                        <span class="text-xs text-gray-500">Alcohol, drug, or gambling addictions.</span>
                                    </div>
                                </li>
                                <li class="flex items-start bg-surface p-3 rounded border border-white/5">
                                    <i class="fa-solid fa-heart-crack text-gold mt-1 mr-3"></i>
                                    <div>
                                        <strong class="text-white text-sm block">Past Affairs</strong>
                                        <span class="text-xs text-gray-500">Previous marriages or relationships.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-surface border-l-4 border-red-500 p-8 rounded shadow-lg" data-aos="fade-up">
                        <h3 class="text-xl font-bold text-white mb-4 flex items-center"><i class="fa-solid fa-user-secret text-red-500 mr-3"></i> Adultery / Infidelity Check</h3>
                        <p class="text-sm text-gray-400 mb-6">
                            If you notice sudden behavioral changes, late nights, or secretive phone use, we can help.
                        </p>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li><i class="fa-solid fa-video text-gold mr-2"></i> <strong>Physical Surveillance:</strong> Tracking movements 24/7.</li>
                            <li><i class="fa-solid fa-camera text-gold mr-2"></i> <strong>Photo/Video Proof:</strong> Clear evidence of secret meetings.</li>
                            <li><i class="fa-solid fa-gavel text-gold mr-2"></i> <strong>Divorce Evidence:</strong> Proof admissible in family court.</li>
                        </ul>
                    </div>

                    <div data-aos="fade-up">
                        <h3 class="text-2xl font-bold text-white mb-8">How We Work</h3>
                        <div class="relative border-l border-gray-700 ml-3 space-y-8">
                            <div class="ml-8 relative">
                                <span class="absolute -left-12 top-0 w-8 h-8 bg-gold rounded-full flex items-center justify-center text-black font-bold">1</span>
                                <h4 class="text-white font-bold text-lg">Consultation</h4>
                                <p class="text-gray-400 text-sm mt-1">Share details (Photo, Vehicle No, Schedule) securely.</p>
                            </div>
                            <div class="ml-8 relative">
                                <span class="absolute -left-12 top-0 w-8 h-8 bg-card border border-gold rounded-full flex items-center justify-center text-gold font-bold">2</span>
                                <h4 class="text-white font-bold text-lg">Surveillance</h4>
                                <p class="text-gray-400 text-sm mt-1">Our field agents shadow the subject discreetly.</p>
                            </div>
                            <div class="ml-8 relative">
                                <span class="absolute -left-12 top-0 w-8 h-8 bg-card border border-gold rounded-full flex items-center justify-center text-gold font-bold">3</span>
                                <h4 class="text-white font-bold text-lg">Report Handover</h4>
                                <p class="text-gray-400 text-sm mt-1">You receive photos, videos, and logs. Data is then deleted.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="lg:col-span-1">
                    <div class="sticky top-24 space-y-8">
                        
                        <div class="bg-surface border border-gold/30 rounded-lg p-6 shadow-2xl relative overflow-hidden" data-aos="fade-left">
                            <div class="absolute top-0 right-0 bg-gold text-black text-[10px] font-bold px-2 py-1">POPULAR</div>
                            <div class="text-center mb-6">
                                <h3 class="text-gray-400 text-xs font-bold uppercase tracking-widest">Starting From</h3>
                                <div class="text-4xl font-serif font-bold text-white mt-2">₹15,000</div>
                                <p class="text-xs text-gray-500 mt-2">*Per Case / 3 Days</p>
                            </div>
                            
                            <a href="tel:+917982697272" class="block w-full bg-gold hover:bg-white text-black text-center font-bold py-3 rounded mb-4 transition shadow-lg">
                                <i class="fa-solid fa-phone mr-2"></i> Get Free Quote
                            </a>
                            <p class="text-[10px] text-center text-gray-500">100% Confidential</p>
                        </div>

                        <div class="bg-card p-6 rounded border border-white/10" data-aos="fade-left" data-aos-delay="100">
                            <h4 class="text-white font-bold mb-4">Quick Inquiry</h4>
                            <form class="space-y-3" method="POST" action="{{ route('submit.contact-form') }}">
                                @csrf
                                <input type="text" name="name" placeholder="Name (or Alias)" required class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="text" name="phone" placeholder="Phone Number" class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="email" name="email" placeholder="Email Address" required class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="hidden" name="service" value="matrimonial">
                                <textarea name="subject" rows="3" placeholder="Pre-Matrimonial / Post-Matrimonial / Divorce Evidence" class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none"></textarea>
                                <input type="hidden" name="message" value="Matrimonial Service Inquiry">
                                <button type="submit" class="w-full bg-white hover:bg-gray-200 text-black font-bold py-3 rounded transition text-sm">Submit</button>
                            </form>
                        </div>

                        <div class="bg-card p-6 rounded border border-white/5">
                            <h4 class="text-gold font-bold text-sm uppercase mb-4 border-b border-white/10 pb-2">Common Questions</h4>
                            <details class="group mb-3 cursor-pointer">
                                <summary class="text-sm text-gray-300 font-bold list-none flex justify-between">Will they know? <span class="text-gold">+</span></summary>
                                <p class="text-xs text-gray-500 mt-2">Never. Our agents maintain safe distance.</p>
                            </details>
                            <details class="group mb-3 cursor-pointer">
                                <summary class="text-sm text-gray-300 font-bold list-none flex justify-between">Is it legal? <span class="text-gold">+</span></summary>
                                <p class="text-xs text-gray-500 mt-2">Yes, hiring a private investigator is legal in India.</p>
                            </details>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection