@extends('frontend.layouts.base')
@push('title')
    <title>Our Investigation Process | How We Work | SMART INDIA DETECTIVE</title>
@endpush
@section('meta_description', 'Learn about our 4-step investigation process: Consultation, Surveillance Strategy, Evidence Collection & Final Report. 100% confidential and legally sound methods.')
@section('meta_keywords', 'investigation process, how detective agency works, surveillance process, evidence collection method')
@section('page-content')
 <section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=1920&auto=format&fit=crop" class="w-full h-full object-cover opacity-40" alt="Planning Process">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-white mb-4">Our Investigation <span class="text-gold-gradient">Process</span></h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">A systematic, legal, and 100% confidential approach to uncovering the truth.</p>
        </div>
    </section>

    <section class="py-20 bg-dark relative">
        <div class="container mx-auto px-6">
            <div class="relative border-l-2 border-gold/30 ml-6 md:mx-auto md:w-2/3 lg:w-1/2 space-y-16">

                <div class="relative ml-8 md:-ml-12" data-aos="fade-right">
                    <span class="absolute -left-12 md:-left-[58px] top-0 w-10 h-10 bg-gold rounded-full flex items-center justify-center text-black font-bold border-4 border-dark z-10">1</span>
                    <div class="bg-card p-6 rounded border border-white/5 hover:border-gold transition duration-300">
                        <div class="flex items-center gap-4 mb-3">
                            <i class="fa-solid fa-comments text-3xl text-gold"></i>
                            <h3 class="text-xl font-bold text-white">Confidential Consultation</h3>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            We listen to your problem via encrypted call or secure meeting. We assess if the case is legally valid. 
                            <br><span class="text-gold text-xs font-bold mt-2 block">✓ NDA Signed (Non-Disclosure Agreement)</span>
                        </p>
                    </div>
                </div>

                <div class="relative ml-8 md:-ml-12" data-aos="fade-left">
                    <span class="absolute -left-12 md:-left-[58px] top-0 w-10 h-10 bg-card border-2 border-gold rounded-full flex items-center justify-center text-gold font-bold z-10">2</span>
                    <div class="bg-card p-6 rounded border border-white/5 hover:border-gold transition duration-300">
                        <div class="flex items-center gap-4 mb-3">
                            <i class="fa-solid fa-chess-knight text-3xl text-gold"></i>
                            <h3 class="text-xl font-bold text-white">Strategy & Planning</h3>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            We create a custom plan. Which agents to use? What tech (GPS/Cameras)? We also provide an estimated cost and timeline.
                        </p>
                    </div>
                </div>

                <div class="relative ml-8 md:-ml-12" data-aos="fade-right">
                    <span class="absolute -left-12 md:-left-[58px] top-0 w-10 h-10 bg-card border-2 border-gold rounded-full flex items-center justify-center text-gold font-bold z-10">3</span>
                    <div class="bg-card p-6 rounded border border-white/5 hover:border-gold transition duration-300">
                        <div class="flex items-center gap-4 mb-3">
                            <i class="fa-solid fa-user-secret text-3xl text-gold"></i>
                            <h3 class="text-xl font-bold text-white">Live Investigation</h3>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Our field agents start the work. This includes physical surveillance, digital forensics, or undercover operations. You get daily updates.
                        </p>
                    </div>
                </div>

                <div class="relative ml-8 md:-ml-12" data-aos="fade-left">
                    <span class="absolute -left-12 md:-left-[58px] top-0 w-10 h-10 bg-card border-2 border-gold rounded-full flex items-center justify-center text-gold font-bold z-10">4</span>
                    <div class="bg-card p-6 rounded border border-white/5 hover:border-gold transition duration-300">
                        <div class="flex items-center gap-4 mb-3">
                            <i class="fa-solid fa-images text-3xl text-gold"></i>
                            <h3 class="text-xl font-bold text-white">Evidence Collection</h3>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            We gather undeniable proof. High-resolution photos, 4K videos, audio recordings, and official documents.
                        </p>
                    </div>
                </div>

                <div class="relative ml-8 md:-ml-12" data-aos="fade-right">
                    <span class="absolute -left-12 md:-left-[58px] top-0 w-10 h-10 bg-card border-2 border-gold rounded-full flex items-center justify-center text-gold font-bold z-10">5</span>
                    <div class="bg-card p-6 rounded border border-white/5 hover:border-gold transition duration-300">
                        <div class="flex items-center gap-4 mb-3">
                            <i class="fa-solid fa-file-shield text-3xl text-gold"></i>
                            <h3 class="text-xl font-bold text-white">Report & Data Deletion</h3>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            We handover the final report to you securely. After 48 hours of your confirmation, we permanently delete all data from our servers.
                            <br><span class="text-red-500 text-xs font-bold mt-2 block">⚠ No traces left behind.</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-surface">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-serif font-bold text-white mb-12">Why We Stick to Protocol?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 border border-white/5 rounded hover:bg-card transition" data-aos="zoom-in">
                    <i class="fa-solid fa-scale-balanced text-4xl text-gold mb-4"></i>
                    <h4 class="text-white font-bold mb-2">Legal Safety</h4>
                    <p class="text-gray-400 text-sm">Evidence gathered illegally (e.g., hacking) is useless in court. We ensure admissibility.</p>
                </div>
                <div class="p-6 border border-white/5 rounded hover:bg-card transition" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fa-solid fa-shield-cat text-4xl text-gold mb-4"></i>
                    <h4 class="text-white font-bold mb-2">Client Safety</h4>
                    <p class="text-gray-400 text-sm">A strict process ensures your identity is never compromised to the subject.</p>
                </div>
                <div class="p-6 border border-white/5 rounded hover:bg-card transition" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fa-solid fa-bullseye text-4xl text-gold mb-4"></i>
                    <h4 class="text-white font-bold mb-2">Accuracy</h4>
                    <p class="text-gray-400 text-sm">Structured investigation prevents errors and missing details.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 relative bg-fixed bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1494376877685-d3d98c226685?q=80&w=1920&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-dark/90"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-6">Ready to Start Step 1?</h2>
            <p class="text-slate-300 mb-8 text-lg max-w-2xl mx-auto">Contact us now for a free and confidential consultation.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-gold hover:bg-white text-black font-bold py-4 px-10 rounded shadow-xl hover:shadow-[0_0_20px_rgba(212,175,55,0.6)] transition duration-300 text-lg">
                Begin Consultation
            </a>
        </div>
    </section>

@endsection