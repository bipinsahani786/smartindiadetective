@extends('frontend.layouts.base')
@push('title')
    <title>Sitemap | Website Map | SMART INDIA DETECTIVE</title>
@endpush
@section('meta_description', 'Complete website sitemap of SMART INDIA DETECTIVE. Find links to all investigation services, blog articles, and important pages.')
@section('meta_keywords', 'sitemap, website map, page directory')

@section('page-content')
 
    <section class="relative h-[30vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1920&auto=format&fit=crop" class="w-full h-full object-cover opacity-30" alt="Network Background">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <h1 class="text-3xl md:text-5xl font-serif font-bold text-white mb-2">Site <span class="text-gold-gradient">Map</span></h1>
            <p class="text-gray-400 text-sm">Overview of all pages on our website.</p>
        </div>
    </section>

    <section class="py-16 bg-dark">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                
                <div data-aos="fade-up">
                    <h3 class="text-gold font-bold text-xl mb-6 border-b border-white/10 pb-2">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Home Page</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">About Us</a></li>
                        <li><a href="{{ route('process') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Our Process</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Contact Us</a></li>
                    </ul>
                </div>

                <div data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-gold font-bold text-xl mb-6 border-b border-white/10 pb-2">Our Services</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">All Services</a></li>
                        <li><a href="{{ route('matrimonial') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Matrimonial Detective</a></li>
                        <li><a href="{{ route('corporate-fraud') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Corporate Fraud</a></li>
                        <li><a href="{{ route('surveillance') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Surveillance</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Cyber Crime</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Missing Person</a></li>
                    </ul>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-gold font-bold text-xl mb-6 border-b border-white/10 pb-2">Resources</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('blog') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Blog / Articles</a></li>
                        <li><a href="{{ route('home') }}#faq" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">FAQ</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Support Center</a></li>
                    </ul>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-gold font-bold text-xl mb-6 border-b border-white/10 pb-2">Legal</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('privacy-policy') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Privacy Policy</a></li>
                        <li><a href="{{ route('terms-and-conditions') }}" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Terms & Conditions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white hover:translate-x-2 transition inline-block">Disclaimer</a></li>
                    </ul>
                </div>

            </div>
            
            <div class="mt-16 text-center border-t border-white/5 pt-8">
                <a href="#" class="text-xs text-gray-500 hover:text-gold transition"><i class="fa-solid fa-rss mr-2"></i> XML Sitemap (For Crawlers)</a>
            </div>
        </div>
    </section>
@endsection