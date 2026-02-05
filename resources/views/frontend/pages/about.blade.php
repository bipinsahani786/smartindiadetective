@extends('frontend.layouts.base')
@push('title')
    <title>About SMART INDIA DETECTIVE | Investigation Agency India</title>
@endpush
@section('meta_description', 'Learn about SMART INDIA DETECTIVE - India\'s trusted investigation agency with 15+ years of experience, 2000+ cases solved, and 100% confidentiality guaranteed.')
@section('meta_keywords', 'about detective agency, investigation company Delhi, private investigator, licensed detective agency India')
@section('page-content')
    <section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1455587734955-081b22074882?q=80&w=1920&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-40" alt="About Us Background">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-white mb-4">About <span class="text-gold-gradient">SMART
                    INDIA DETECTIVE</span></h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">The new standard in private investigation. Modern technology,
                absolute discretion, and relentless pursuit of the truth.</p>
        </div>
    </section>

    <section class="py-24 bg-dark">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2" data-aos="fade-right">
                <h4 class="text-gold font-bold uppercase tracking-widest text-sm mb-2">Who We Are</h4>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-6">A New Era of Private Investigation
                </h2>
                <p class="text-gray-400 leading-relaxed mb-6 text-justify">
                    In a world that is constantly changing, old methods of investigation are no longer enough.
                    <strong>DetectiveX</strong> was founded with a vision to modernize the private investigation industry in
                    India.
                </p>
                <p class="text-gray-400 leading-relaxed mb-8 text-justify">
                    We are a team of dynamic, professional, and tech-savvy investigators who understand the complexities of
                    modern relationships and corporate environments. We don't just rely on hearsay; we rely on
                    <strong>digital forensics, advanced surveillance gadgets, and legal frameworks</strong> to bring you
                    undeniable evidence. Whether you are an individual seeking peace of mind or a corporation protecting its
                    assets, we work with 100% dedication.
                </p>

                <div class="flex gap-8 border-t border-white/10 pt-6">
                    <div>
                        <span class="text-xl font-bold text-white"><i class="fa-solid fa-check text-gold mr-2"></i> 100%
                            Confidential</span>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-white"><i class="fa-solid fa-check text-gold mr-2"></i> Legal
                            Methods</span>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 relative" data-aos="fade-left">
                <div class="border-2 border-gold/30 p-2 rounded-lg">
                    <img src="https://images.unsplash.com/photo-1455587734955-081b22074882?q=80&w=1920&auto=format&fit=crop"
                        alt="Modern Team Handshake"
                        class="rounded shadow-2xl grayscale hover:grayscale-0 transition duration-700 w-full">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-surface">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-card p-8 rounded border-t-4 border-gold shadow-lg hover:-translate-y-2 transition duration-300"
                    data-aos="fade-up">
                    <div
                        class="w-14 h-14 bg-dark rounded-full flex items-center justify-center mb-6 text-gold text-2xl border border-white/10">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Our Mission</h3>
                    <p class="text-gray-400 text-sm">To provide common people with access to professional, high-quality
                        investigation services that were once limited to big corporations.</p>
                </div>

                <div class="bg-card p-8 rounded border-t-4 border-gold shadow-lg hover:-translate-y-2 transition duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-dark rounded-full flex items-center justify-center mb-6 text-gold text-2xl border border-white/10">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Our Vision</h3>
                    <p class="text-gray-400 text-sm">To become India's most trusted agency by prioritizing client privacy,
                        speed of delivery, and the accuracy of evidence.</p>
                </div>

                <div class="bg-card p-8 rounded border-t-4 border-gold shadow-lg hover:-translate-y-2 transition duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-dark rounded-full flex items-center justify-center mb-6 text-gold text-2xl border border-white/10">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Our Commitment</h3>
                    <p class="text-gray-400 text-sm">We treat every case as if it were our own. We guarantee complete
                        secrecy—your data is never shared with anyone.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-dark">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-white">Why <span class="text-gold">Trust
                        Us?</span></h2>
                <div class="w-20 h-1 bg-gold mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group" data-aos="fade-up">
                    <div
                        class="w-20 h-20 mx-auto bg-surface rounded-full flex items-center justify-center text-3xl text-gold mb-6 group-hover:bg-gold group-hover:text-black transition duration-300 border border-white/10">
                        <i class="fa-solid fa-user-lock"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-2">Total Anonymity</h4>
                    <p class="text-gray-500 text-sm">We use encrypted communication. Your identity remains a secret forever.
                    </p>
                </div>

                <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-20 h-20 mx-auto bg-surface rounded-full flex items-center justify-center text-3xl text-gold mb-6 group-hover:bg-gold group-hover:text-black transition duration-300 border border-white/10">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-2">Advanced Tech</h4>
                    <p class="text-gray-500 text-sm">We use the latest high-resolution cameras and GPS trackers for precise
                        results.</p>
                </div>

                <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-20 h-20 mx-auto bg-surface rounded-full flex items-center justify-center text-3xl text-gold mb-6 group-hover:bg-gold group-hover:text-black transition duration-300 border border-white/10">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-2">Wide Network</h4>
                    <p class="text-gray-500 text-sm">Our network of field agents allows us to operate in any city across the
                        country.</p>
                </div>

                <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-20 h-20 mx-auto bg-surface rounded-full flex items-center justify-center text-3xl text-gold mb-6 group-hover:bg-gold group-hover:text-black transition duration-300 border border-white/10">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-2">Ethical Practice</h4>
                    <p class="text-gray-500 text-sm">We operate within the law to ensure the evidence we gather is useful to
                        you.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 relative bg-fixed bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1494376877685-d3d98c226685?q=80&w=1920&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-dark/90"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-6">Have Doubts? Get Answers.</h2>
            <p class="text-slate-300 mb-8 text-lg max-w-2xl mx-auto">Don't live in uncertainty. Our team is ready to help
                you find the truth today.</p>
            <a href="{{ route('contact') }}"
                class="inline-block bg-gold hover:bg-white text-black font-bold py-4 px-10 rounded shadow-xl hover:shadow-[0_0_20px_rgba(212,175,55,0.6)] transition duration-300 text-lg">
                Start Consultation
            </a>
        </div>
    </section>
@endsection
