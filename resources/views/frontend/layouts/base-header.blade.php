  <div class="bg-surface border-b border-white/10 hidden md:block">
        <div
            class="container mx-auto px-6 py-2 flex justify-between items-center text-xs font-semibold tracking-wider text-gray-400">
            <div class="flex gap-6">
                <span><i class="fa-solid fa-location-dot text-gold mr-2"></i>A19S Pandav Nagar Delhi Near Akshardham
                    Mandir Metro Station 110092</span>
                <span><i class="fa-solid fa-envelope text-gold mr-2"></i> indiasmart89@gmail.com</span>
            </div>
            <div class="flex gap-6 items-center">
                <span><i class="fa-solid fa-clock text-gold mr-2"></i> 24/7 Available</span>
                <span class="text-gold"><i class="fa-solid fa-phone mr-2"></i> +91 7982697272</span>
            </div>
        </div>
    </div>

    <header class="sticky top-0 z-50 bg-dark/90 backdrop-blur-lg border-b border-gold/20 shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-3xl font-serif font-bold text-white flex items-center gap-2">
                <i class="fa-solid fa-user-secret text-gold text-4xl"></i>
                <div class="leading-none">
                    SMART INDIA<span class="text-gold"> DETECTIVE</span>
                    <span
                        class="block text-[10px] font-sans text-gray-400 tracking-[0.3em] font-normal uppercase">Investigation
                        Agency</span>
                </div>
            </a>

            <nav class="hidden lg:flex space-x-8 text-sm font-bold uppercase tracking-wide">
                <a href="{{ route('home') }}" 
                    class="{{ request()->routeIs('home') ? 'text-gold' : 'hover:text-gold' }} transition">Home</a>
                <a href="{{ route('about') }}" 
                    class="{{ request()->routeIs('about') ? 'text-gold' : 'hover:text-gold' }} transition">About</a>
                <a href="{{ route('services') }}" 
                    class="{{ request()->routeIs('services') ? 'text-gold' : 'hover:text-gold' }} transition">Services</a>
                <a href="{{ route('process') }}" 
                    class="{{ request()->routeIs('process') ? 'text-gold' : 'hover:text-gold' }} transition">Process</a>
                <a href="{{ route('blog') }}" 
                    class="{{ request()->routeIs('blog') ? 'text-gold' : 'hover:text-gold' }} transition">Blog</a>
                <a href="{{ route('contact') }}"
                    class="px-5 py-2 bg-gold text-black rounded font-extrabold hover:bg-white transition shadow-[0_0_15px_rgba(212,175,55,0.4)]">
                    Contact Us
                </a>
            </nav>

            <button class="lg:hidden text-2xl text-gold"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-card border-t border-white/10">
            <a href="{{ route('home') }}" 
                class="block px-6 py-4 border-b border-white/5 {{ request()->routeIs('home') ? 'text-gold bg-gold/10' : 'text-gray-300' }}">Home</a>
            <a href="{{ route('about') }}" 
                class="block px-6 py-4 border-b border-white/5 {{ request()->routeIs('about') ? 'text-gold bg-gold/10' : 'text-gray-300' }}">About</a>
            <a href="{{ route('services') }}" 
                class="block px-6 py-4 border-b border-white/5 {{ request()->routeIs('services') ? 'text-gold bg-gold/10' : 'text-gray-300' }}">Services</a>
            <a href="{{ route('process') }}" 
                class="block px-6 py-4 border-b border-white/5 {{ request()->routeIs('process') ? 'text-gold bg-gold/10' : 'text-gray-300' }}">Process</a>
            <a href="{{ route('blog') }}" 
                class="block px-6 py-4 border-b border-white/5 {{ request()->routeIs('blog') ? 'text-gold bg-gold/10' : 'text-gray-300' }}">Blog</a>
            <a href="{{ route('contact') }}" 
                class="block px-6 py-4 font-bold {{ request()->routeIs('contact') ? 'text-gold bg-gold/10' : 'text-white bg-gold/5' }} transition">Contact Us</a>
        </div>
    </header>