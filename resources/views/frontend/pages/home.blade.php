@extends('frontend.layouts.base')
@push('title')
    <title>Private Detective & Investigation Agency in Delhi | SMART INDIA DETECTIVE</title>
@endpush
@section('meta_description', 'SMART INDIA DETECTIVE - India\'s leading private investigation agency. Matrimonial, Corporate Fraud, Surveillance & Cyber investigation with 100% confidentiality. 15+ years experience.')
@section('meta_keywords', 'private detective Delhi, investigation agency, matrimonial detective, corporate fraud investigation, surveillance services, cyber crime investigation')
@section('page-content')
    <section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1506459225024-1428097a7e18?q=80&w=1920&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-30" alt="Investigator">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/80 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center mt-10" data-aos="fade-up">
            <div
                class="inline-flex items-center gap-2 px-4 py-1 rounded border border-gold/30 bg-gold/5 text-gold text-xs font-bold tracking-[0.2em] uppercase mb-6">
                <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span> In India & Abroad
            </div>

            <h1 class="text-5xl md:text-7xl font-serif font-bold text-white mb-6 leading-tight drop-shadow-2xl">
                All Types of <br> <span class="text-gold-gradient">Secret Investigation</span>
            </h1>

            <p class="text-lg text-gray-400 mb-10 max-w-3xl mx-auto font-medium leading-relaxed">
                Surveillance, Shadowing, Undercover, Personal Matrimonial (Pre/Post), Business, and Cyber Inquiry
                Investigation. We find the truth you need.
            </p>

            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                <a href="tel:+917982697272"
                    class="px-10 py-4 bg-gold text-black font-bold rounded hover:bg-white transition transform hover:-translate-y-1 shadow-lg shadow-gold/20">
                    <i class="fa-solid fa-phone mr-2"></i> Free Consultation
                </a>
                <a href="#services"
                    class="px-10 py-4 border border-white/20 bg-white/5 backdrop-blur text-white font-bold rounded hover:bg-white/10 transition">
                    Explore Services
                </a>
            </div>
        </div>
    </section>

    <section class="relative z-20 -mt-20 container mx-auto px-6">
        <div
            class="glass rounded-xl p-10 grid grid-cols-2 md:grid-cols-4 gap-8 text-center shadow-2xl border-t border-gold/20">
            <div data-aos="zoom-in" data-aos-delay="0">
                <h3 class="text-4xl font-serif font-bold text-white">15+</h3>
                <p class="text-gold text-xs font-bold uppercase tracking-widest mt-2">Years Experience</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="100">
                <h3 class="text-4xl font-serif font-bold text-white">2,000+</h3>
                <p class="text-gold text-xs font-bold uppercase tracking-widest mt-2">Cases Solved</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="200">
                <h3 class="text-4xl font-serif font-bold text-white">50+</h3>
                <p class="text-gold text-xs font-bold uppercase tracking-widest mt-2">Expert Agents</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="300">
                <h3 class="text-4xl font-serif font-bold text-white">100%</h3>
                <p class="text-gold text-xs font-bold uppercase tracking-widest mt-2">Confidentiality</p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-dark">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 relative" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=800&auto=format&fit=crop"
                    class="rounded shadow-2xl grayscale hover:grayscale-0 transition duration-700" alt="Detective Desk">
                <div class="absolute -bottom-6 -right-6 bg-gold p-6 rounded shadow-xl text-black">
                    <p class="font-serif font-bold text-xl">Trusted Since 2008</p>
                </div>
            </div>
            <div class="md:w-1/2" data-aos="fade-left">
                <h2 class="text-gold font-bold uppercase tracking-widest mb-2 text-sm">Who We Are</h2>
                <h3 class="text-4xl font-serif font-bold text-white mb-6">Complete Detective Services <br>Personal &
                    Business</h3>
                <p class="text-gray-400 leading-relaxed mb-6 text-justify">
                    SMART INDIA DETECTIVE provides all types of secret and private investigations for <strong>personal,
                        matrimonial (pre/post), business, criminal, and cyber inquiries</strong>. Our team handles
                    sensitive cases with absolute discretion including surveillance, shadowing, undercover missions, and
                    sting operations.
                </p>
                <p class="text-gray-400 leading-relaxed mb-8 text-justify">
                    We specialize in gathering <strong>divorce court proof, adultery/extra-marital affairs evidence,
                        loyalty tests</strong>, and clearing doubts about character. We also trace missing persons,
                    investigate fraud, theft, blackmailing, and conduct thorough verification for documents, employment,
                    and property/assets.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-300"><i class="fa-solid fa-check text-gold mr-3"></i>
                        Pan-India & Abroad Operations</li>
                    <li class="flex items-center text-gray-300"><i class="fa-solid fa-check text-gold mr-3"></i>
                        Advanced Spy Gadgets & Tech</li>
                    <li class="flex items-center text-gray-300"><i class="fa-solid fa-check text-gold mr-3"></i> Valid
                        Court Evidence Provided</li>
                </ul>
                <a href="{{ route('about') }}" class="text-gold font-bold border-b border-gold pb-1 hover:text-white transition">Read
                    More About
                    Us</a>
            </div>
        </div>
    </section>

    <section id="services" class="py-24 bg-surface relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">Our <span
                        class="text-gold">Services</span></h2>
                <div class="w-20 h-1 bg-gold mx-auto"></div>
                <p class="text-gray-400 mt-4">We handle all types of secret and private investigations.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-card p-8 rounded border border-white/5 hover:border-gold transition duration-300 group"
                    data-aos="fade-up">
                    <i class="fa-solid fa-rings-wedding text-4xl text-gold mb-6 group-hover:scale-110 transition"></i>
                    <h3 class="text-xl font-bold text-white mb-3">Matrimonial (Pre/Post)</h3>
                    <p class="text-gray-400 text-sm mb-4">Verification for marriage proposals, loyalty tests,
                        extra-marital affairs, adultery proof, and character checks.</p>
                    <a href="{{ route('matrimonial') }}" class="text-gold text-sm font-bold uppercase tracking-wider">Learn More <i
                            class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>

                <div class="bg-card p-8 rounded border border-white/5 hover:border-gold transition duration-300 group"
                    data-aos="fade-up" data-aos-delay="100">
                    <i class="fa-solid fa-binoculars text-4xl text-gold mb-6 group-hover:scale-110 transition"></i>
                    <h3 class="text-xl font-bold text-white mb-3">Surveillance & Shadowing</h3>
                    <p class="text-gray-400 text-sm mb-4">Physical shadowing, undercover operations, and sting
                        operations to gather video/photo evidence.</p>
                    <a href="{{ route('surveillance') }}" class="text-gold text-sm font-bold uppercase tracking-wider">Learn More <i
                            class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>

                <div class="bg-card p-8 rounded border border-white/5 hover:border-gold transition duration-300 group"
                    data-aos="fade-up" data-aos-delay="200">
                    <i class="fa-solid fa-building-user text-4xl text-gold mb-6 group-hover:scale-110 transition"></i>
                    <h3 class="text-xl font-bold text-white mb-3">Business Investigation</h3>
                    <p class="text-gray-400 text-sm mb-4">Fraud, theft, employment verification, asset verification, and
                        internal corporate inquiries.</p>
                    <a href="{{ route('corporate-fraud') }}" class="text-gold text-sm font-bold uppercase tracking-wider">Learn More <i
                            class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>

                <div class="bg-card p-8 rounded border border-white/5 hover:border-gold transition duration-300 group"
                    data-aos="fade-up" data-aos-delay="300">
                    <i class="fa-solid fa-user-slash text-4xl text-gold mb-6 group-hover:scale-110 transition"></i>
                    <h3 class="text-xl font-bold text-white mb-3">Missing Person</h3>
                    <p class="text-gray-400 text-sm mb-4">Finding missing family members, runaway kids, or debtors who
                        have fled across India or abroad.</p>
                    <a href="#" class="text-gold text-sm font-bold uppercase tracking-wider">Learn More <i
                            class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>

                <div class="bg-card p-8 rounded border border-white/5 hover:border-gold transition duration-300 group"
                    data-aos="fade-up" data-aos-delay="400">
                    <i class="fa-solid fa-laptop-code text-4xl text-gold mb-6 group-hover:scale-110 transition"></i>
                    <h3 class="text-xl font-bold text-white mb-3">Cyber Inquiry</h3>
                    <p class="text-gray-400 text-sm mb-4">Social site investigation, blackmailing cases, online fraud,
                        and digital footprint tracking.</p>
                    <a href="#" class="text-gold text-sm font-bold uppercase tracking-wider">Learn More <i
                            class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>

                <div class="bg-card p-8 rounded border border-white/5 hover:border-gold transition duration-300 group"
                    data-aos="fade-up" data-aos-delay="500">
                    <i class="fa-solid fa-file-contract text-4xl text-gold mb-6 group-hover:scale-110 transition"></i>
                    <h3 class="text-xl font-bold text-white mb-3">Verification Services</h3>
                    <p class="text-gray-400 text-sm mb-4">Document verification, property/assets verification, and
                        detailed background checks.</p>
                    <a href="#" class="text-gold text-sm font-bold uppercase tracking-wider">Learn More <i
                            class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-dark border-y border-white/5">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-serif font-bold text-white text-center mb-8">Comprehensive Range of Investigation
            </h2>
            <div class="flex flex-wrap justify-center gap-3">
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Personal
                    Investigation</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Matrimonial
                    (Pre/Post)</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Business
                    Inquiry</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Criminal
                    Investigation</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Cyber
                    Inquiry</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Surveillance</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Shadowing</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Undercover</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Sting
                    Operations</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Divorce
                    Court Proof</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Adultery</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Extra
                    Marital Affairs</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Love
                    Affairs</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Loyalty
                    Test</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Doubt
                    Clearance</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Character
                    Check</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Missing
                    Persons</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Fraud
                    & Theft</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Blackmailing</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Documents
                    Verification</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Employment
                    Verification</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Property/Assets</span>
                <span
                    class="px-4 py-2 rounded-full border border-gold/30 text-gray-300 text-sm hover:bg-gold hover:text-black transition cursor-default">Social
                    Site Investigation</span>
            </div>
        </div>
    </section>

    <section id="process" class="py-24 bg-surface">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-white">Investigation <span
                        class="text-gold">Process</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="relative p-6 border-l-2 border-gold bg-card/50" data-aos="fade-up">
                    <span
                        class="absolute -left-3 top-0 bg-gold text-black font-bold w-6 h-6 rounded-full flex items-center justify-center">1</span>
                    <h4 class="text-white font-bold text-lg mb-2">Consultation</h4>
                    <p class="text-sm text-gray-400">Meet us or call us. We listen to your problem confidentially.</p>
                </div>
                <div class="relative p-6 border-l-2 border-gray-700 bg-card/50" data-aos="fade-up" data-aos-delay="100">
                    <span
                        class="absolute -left-3 top-0 bg-gray-700 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center">2</span>
                    <h4 class="text-white font-bold text-lg mb-2">Plan & Strategy</h4>
                    <p class="text-sm text-gray-400">We design a custom plan and assign the best agents.</p>
                </div>
                <div class="relative p-6 border-l-2 border-gray-700 bg-card/50" data-aos="fade-up" data-aos-delay="200">
                    <span
                        class="absolute -left-3 top-0 bg-gray-700 text-white font-bold w-6 h-6 rounded-full flex items-center justify-center">3</span>
                    <h4 class="text-white font-bold text-lg mb-2">Investigation</h4>
                    <p class="text-sm text-gray-400">Field work begins. We gather photos, videos, and documents.</p>
                </div>
                <div class="relative p-6 border-l-2 border-gold bg-card/50" data-aos="fade-up" data-aos-delay="300">
                    <span
                        class="absolute -left-3 top-0 bg-gold text-black font-bold w-6 h-6 rounded-full flex items-center justify-center">4</span>
                    <h4 class="text-white font-bold text-lg mb-2">Final Report</h4>
                    <p class="text-sm text-gray-400">We hand over the evidence and destroy our copy for privacy.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-dark relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-gold/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-white text-center mb-16">Trusted by <span
                    class="text-gold">Clients</span></h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-card p-8 rounded-lg relative hover:-translate-y-2 transition duration-300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&h=200&auto=format&fit=crop"
                            class="w-14 h-14 rounded-full object-cover border-2 border-gold" alt="Client">
                        <div class="ml-4">
                            <h5 class="text-white font-bold">Rajesh Khanna</h5>
                            <p class="text-xs text-gold">Businessman, South Delhi</p>
                        </div>
                    </div>
                    <p class="text-gray-400 italic text-sm">"Corporate fraud was eating my company alive. SMART INDIA
                        DETECTIVE found the culprit within a week. Very professional team."</p>
                    <div class="text-gold mt-4 text-xs"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </div>

                <div class="bg-card p-8 rounded-lg relative hover:-translate-y-2 transition duration-300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&h=200&auto=format&fit=crop"
                            class="w-14 h-14 rounded-full object-cover border-2 border-gold" alt="Client">
                        <div class="ml-4">
                            <h5 class="text-white font-bold">Priya Sharma</h5>
                            <p class="text-xs text-gold">Software Engineer, Noida</p>
                        </div>
                    </div>
                    <p class="text-gray-400 italic text-sm">"I needed a pre-matrimonial check. They provided detailed
                        info about the family background which saved me from a huge mistake."</p>
                    <div class="text-gold mt-4 text-xs"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </div>

                <div class="bg-card p-8 rounded-lg relative hover:-translate-y-2 transition duration-300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=200&h=200&auto=format&fit=crop"
                            class="w-14 h-14 rounded-full object-cover border-2 border-gold" alt="Client">
                        <div class="ml-4">
                            <h5 class="text-white font-bold">Adv. Amit Verma</h5>
                            <p class="text-xs text-gold">High Court Lawyer</p>
                        </div>
                    </div>
                    <p class="text-gray-400 italic text-sm">"For my legal cases, I only trust SMART INDIA DETECTIVE for
                        evidence gathering. Their reports are legally valid and very detailed."</p>
                    <div class="text-gold mt-4 text-xs"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-surface">
        <div class="container mx-auto px-6 max-w-3xl">
            <h2 class="text-3xl font-serif font-bold text-white text-center mb-10">Frequently Asked <span
                    class="text-gold">Questions</span></h2>

            <div class="space-y-4">
                <details class="group bg-card p-4 rounded cursor-pointer border border-white/5">
                    <summary class="flex justify-between items-center font-bold text-white list-none">
                        Is my identity kept confidential?
                        <span class="transition group-open:rotate-180"><i
                                class="fa-solid fa-chevron-down text-gold"></i></span>
                    </summary>
                    <p class="text-gray-400 text-sm mt-4 leading-relaxed">Yes, 100%. We have a strict non-disclosure
                        policy. Your data is deleted after the case is closed.</p>
                </details>

                <details class="group bg-card p-4 rounded cursor-pointer border border-white/5">
                    <summary class="flex justify-between items-center font-bold text-white list-none">
                        Do you work all over India?
                        <span class="transition group-open:rotate-180"><i
                                class="fa-solid fa-chevron-down text-gold"></i></span>
                    </summary>
                    <p class="text-gray-400 text-sm mt-4 leading-relaxed">Yes, we have a network of agents in every
                        state and major city in India.</p>
                </details>

                <details class="group bg-card p-4 rounded cursor-pointer border border-white/5">
                    <summary class="flex justify-between items-center font-bold text-white list-none">
                        Is private investigation legal?
                        <span class="transition group-open:rotate-180"><i
                                class="fa-solid fa-chevron-down text-gold"></i></span>
                    </summary>
                    <p class="text-gray-400 text-sm mt-4 leading-relaxed">Yes, hiring a private investigator is legal
                        for gathering information. We adhere strictly to Indian laws.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="py-24 bg-dark">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <div class="bg-card p-8 rounded-lg border border-white/10" data-aos="fade-right">
                    <h2 class="text-2xl font-serif font-bold text-white mb-2">Send us a Message</h2>
                    <p class="text-gray-400 text-sm mb-6">Fill this form. We will contact you via a secure line.</p>

                    <form class="space-y-4" method="POST" action="{{ route('submit.contact-form') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" name="name" placeholder="Name" required
                                class="w-full bg-surface border border-gray-700 p-3 rounded text-white focus:border-gold outline-none">
                            <input type="text" name="phone" placeholder="Phone"
                                class="w-full bg-surface border border-gray-700 p-3 rounded text-white focus:border-gold outline-none">
                        </div>
                        <input type="email" name="email" placeholder="Email" required
                            class="w-full bg-surface border border-gray-700 p-3 rounded text-white focus:border-gold outline-none">

                        <select name="service"
                            class="w-full bg-surface border border-gray-700 p-3 rounded text-gray-400 focus:border-gold outline-none">
                            <option value="">Select Service</option>
                            <option value="matrimonial">Matrimonial</option>
                            <option value="corporate-fraud">Corporate</option>
                            <option value="surveillance">Surveillance</option>
                            <option value="cyber">Cyber</option>
                            <option value="other">Other</option>
                        </select>

                        <textarea name="message" rows="4" placeholder="Brief Case Details (Confidential)" required
                            class="w-full bg-surface border border-gray-700 p-3 rounded text-white focus:border-gold outline-none"></textarea>

                        <button type="submit" class="w-full bg-gold hover:bg-white text-black font-bold py-3 rounded transition">Submit
                            Inquiry</button>
                    </form>
                </div>

                <div class="h-full min-h-[400px] map-container relative" data-aos="fade-left">
                    <div class="absolute top-4 left-4 z-10 bg-black/80 p-4 rounded border border-gold/30">
                        <p class="text-white font-bold"><i class="fa-solid fa-location-dot text-gold mr-2"></i> Head
                            Office</p>
                        <p class="text-xs text-gray-400">Akshardham Mandir Metro Station</p>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2959.780813058798!2d77.28152427550017!3d28.615273675674235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDM2JzU1LjAiTiA3N8KwMTcnMDIuOCJF!5e1!3m2!1sen!2sin!4v1769015748536!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
