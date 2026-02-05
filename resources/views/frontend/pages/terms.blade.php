@extends('frontend.layouts.base')
@push('title')
    <title>Terms & Conditions | SMART INDIA DETECTIVE</title>
@endpush
@section('meta_description', 'Terms and conditions for using SMART INDIA DETECTIVE investigation services. Legal guidelines and service agreements.')
@section('meta_keywords', 'terms and conditions, service agreement, legal terms')
@section('robots', 'noindex, follow')

@section('page-content')
     <section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=1920&auto=format&fit=crop" class="w-full h-full object-cover opacity-30" alt="Terms Background">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <h1 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">Terms & <span class="text-gold-gradient">Conditions</span></h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">Please read our service agreement carefully before hiring us.</p>
        </div>
    </section>

    <section class="py-20 bg-dark">
        <div class="container mx-auto px-6 max-w-4xl">
            
            <div class="bg-card p-8 md:p-12 rounded border border-white/5 shadow-xl space-y-10">
                
                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">1. Acceptance of Terms</h2>
                    <p class="text-sm leading-relaxed text-gray-400 text-justify">
                        By engaging the services of <strong>SMART INDIA DETECTIVE Agency</strong>, you agree to comply with the terms and conditions outlined herein. These terms constitute a legally binding agreement between the Client (You) and the Agency (Us). If you do not agree with any part of these terms, you must not proceed with our services.
                    </p>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">2. Nature of Services</h2>
                    <p class="text-sm text-gray-400 mb-3">
                        SMART INDIA DETECTIVE is a private investigation agency providing information gathering, surveillance, and verification services.
                    </p>
                    <div class="bg-surface border-l-4 border-red-500 p-4 rounded">
                        <p class="text-xs text-gray-300">
                            <strong class="text-red-500">IMPORTANT:</strong> We are NOT a law enforcement agency. We do not have police powers (arrest, search warrants). We operate strictly within the legal framework of India. We <strong>do not</strong> engage in illegal wiretapping, hacking, or physical intimidation.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">3. Client Responsibilities</h2>
                    <ul class="list-disc list-inside text-sm text-gray-400 space-y-2 ml-4">
                        <li>You must provide accurate and truthful information about the case.</li>
                        <li>You agree <strong>NOT</strong> to use the information provided by us for any illegal purpose, including blackmail, stalking, harassment, or physical harm.</li>
                        <li>If we find that the client has malicious intent, we reserve the right to terminate the contract immediately without refund.</li>
                    </ul>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">4. Payment & Refund Policy</h2>
                    <p class="text-sm text-gray-400 mb-4">
                        Investigation is a service-based industry where resources (manpower, fuel, time) are utilized regardless of the outcome.
                    </p>
                    <ul class="list-disc list-inside text-sm text-gray-400 space-y-2 ml-4">
                        <li><strong>Advance:</strong> A 50% advance payment is mandatory to start any investigation.</li>
                        <li><strong>Non-Refundable:</strong> Once the investigation has commenced, the advance payment is non-refundable, regardless of the results.</li>
                        <li><strong>Balance:</strong> The remaining balance must be paid before the final report is handed over.</li>
                    </ul>
                </div>

                <div class="bg-surface border border-gold/30 p-6 rounded" data-aos="fade-up">
                    <h2 class="text-xl font-bold text-gold mb-3">5. No Guarantee of Outcome</h2>
                    <p class="text-sm text-gray-300 leading-relaxed">
                        We charge for our time, expertise, and resources, not for a specific result. For example, if you hire us to catch a cheating partner, but the partner is loyal, our report will state "No Evidence Found." This is a valid conclusion. <br><br>
                        <strong>We cannot manufacture evidence. We report only the truth.</strong>
                    </p>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">6. Limitation of Liability</h2>
                    <p class="text-sm text-gray-400 text-justify">
                        SMART INDIA DETECTIVE Agency shall not be liable for any direct, indirect, incidental, or consequential damages resulting from the use of information provided in our reports. The client assumes full responsibility for how they use the gathered evidence in personal or legal matters.
                    </p>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">7. Governing Law</h2>
                    <p class="text-sm text-gray-400">
                        These terms shall be governed by the laws of India. Any disputes arising out of this agreement shall be subject to the exclusive jurisdiction of the courts in <strong>New Delhi</strong>.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection