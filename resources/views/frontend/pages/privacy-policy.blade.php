@extends('frontend.layouts.base')
@push('title')
    <title>Privacy Policy | SMART INDIA DETECTIVE</title>
@endpush
@section('meta_description', 'Our privacy policy details how SMART INDIA DETECTIVE protects your personal information and ensures 100% confidentiality in all investigations.')
@section('meta_keywords', 'privacy policy, data protection, confidentiality, information security')
@section('robots', 'noindex, follow')
@section('page-content')
    <section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?q=80&w=1920&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-30" alt="Privacy Background">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <h1 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">Privacy <span
                    class="text-gold-gradient">Policy</span></h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">Transparency, Anonymity, and Absolute Confidentiality.</p>
            <p class="text-xs text-gray-500 mt-4">Last Updated: October 2024</p>
        </div>
    </section>

    <section class="py-20 bg-dark">
        <div class="container mx-auto px-6 max-w-4xl">

            <div class="bg-card p-8 md:p-12 rounded border border-white/5 shadow-xl space-y-10">

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">1. Introduction</h2>
                    <p class="text-sm leading-relaxed text-gray-400 text-justify">
                        At <strong>SMART INDIA DETECTIVE Agency</strong> ("we," "us," or "our"), we recognize that privacy
                        is not just a policy; it is the foundation of our profession. We are committed to protecting the
                        personal information of our clients, subjects of investigation, and website visitors. This Privacy
                        Policy outlines how we collect, use, and safeguard your data in compliance with the Information
                        Technology Act, 2000 (India) and global best practices.
                    </p>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">2. Information We Collect</h2>
                    <p class="text-sm text-gray-400 mb-3">To conduct investigations effectively, we may collect the
                        following types of information:</p>
                    <ul class="list-disc list-inside text-sm text-gray-400 space-y-2 ml-4">
                        <li><strong class="text-white">Client Identity:</strong> Name, Phone Number, Email Address (for
                            communication only).</li>
                        <li><strong class="text-white">Case Details:</strong> Information provided by you regarding the
                            subject (Photos, Vehicle Numbers, Addresses).</li>
                        <li><strong class="text-white">Payment Data:</strong> Transaction details (Processed via secure
                            third-party gateways).</li>
                    </ul>
                </div>

                <div class="bg-surface border-l-4 border-gold p-6 rounded" data-aos="fade-up">
                    <h2 class="text-xl font-bold text-white mb-3">3. Strict Confidentiality (NDA)</h2>
                    <p class="text-sm text-gray-300 leading-relaxed">
                        We operate under a strict <strong>Non-Disclosure Agreement (NDA)</strong>. The identity of our
                        clients is never revealed to any third party, not even to our field agents unless absolutely
                        necessary. We use code names for clients in our internal database to ensure anonymity.
                    </p>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">4. Evidence Handling & Retention</h2>
                    <p class="text-sm text-gray-400 mb-4">This is our "Zero Trace" policy regarding evidence (Photos,
                        Videos, Reports):</p>
                    <ul class="list-disc list-inside text-sm text-gray-400 space-y-2 ml-4">
                        <li>Evidence is stored in <strong>encrypted offline servers</strong> during the investigation.</li>
                        <li>Once the final report is delivered to the client and confirmed, all raw data is <strong
                                class="text-red-500">permanently deleted</strong> within 48 hours.</li>
                        <li>We do not keep backups of sensitive case files after case closure.</li>
                    </ul>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">5. Third-Party Sharing</h2>
                    <p class="text-sm text-gray-400 leading-relaxed text-justify">
                        We <strong>do not sell, trade, or rent</strong> your personal identification information to others.
                        We may share generic aggregated demographic information not linked to any personal identification
                        regarding visitors and users with our business partners and trusted affiliates for the purposes
                        outlined above.
                        <br><br>
                        <em>Exception:</em> We will only disclose information if required by law (Court Order) or to protect
                        the safety of our agents.
                    </p>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">6. Security Measures</h2>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        We adopt appropriate data collection, storage, and processing practices and security measures to
                        protect against unauthorized access, alteration, disclosure, or destruction of your personal
                        information. Our website is protected by SSL (Secure Socket Layer) encryption.
                    </p>
                </div>

                <div data-aos="fade-up">
                    <h2 class="text-2xl font-serif font-bold text-white mb-4">7. Contact Us</h2>
                    <p class="text-sm text-gray-400 mb-4">If you have any questions about this Privacy Policy, please
                        contact our Legal Team:</p>
                    <p class="text-gold font-bold">Email: indiasmart89@gmail.com</p>
                    <p class="text-gray-400 text-sm mt-1">Address:A19S Pandav Nagar Delhi Near Akshardham Mandir Metro
                        Station 110092, India</p>
                </div>

            </div>
        </div>
    </section>
@endsection
