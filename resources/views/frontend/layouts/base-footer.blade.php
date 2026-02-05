 <footer class="bg-surface border-t border-white/10 pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <h4 class="text-xl font-serif font-bold text-white mb-4">SMART INDIA <span
                            class="text-gold">DETECTIVE</span></h4>
                    <p class="text-sm text-gray-400 mb-6">India's most trusted new-age investigation agency. Truth,
                        Evidence, and Secrecy guaranteed.</p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-8 h-8 rounded bg-gray-800 flex items-center justify-center text-white hover:bg-gold hover:text-black transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded bg-gray-800 flex items-center justify-center text-white hover:bg-gold hover:text-black transition"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded bg-gray-800 flex items-center justify-center text-white hover:bg-gold hover:text-black transition"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Home</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Our Services</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('matrimonial') }}" class="{{ request()->routeIs('matrimonial') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Matrimonial Check</a></li>
                        <li><a href="{{ route('corporate-fraud') }}" class="{{ request()->routeIs('corporate-fraud') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Corporate Fraud</a></li>
                        <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Cyber Crime</a></li>
                        <li><a href="{{ route('surveillance') }}" class="{{ request()->routeIs('surveillance') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Surveillance</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><i class="fa-solid fa-phone text-gold mr-2"></i> +91 7982697272</li>
                        <li><i class="fa-solid fa-envelope text-gold mr-2"></i> indiasmart89@gmail.com</li>
                        <li><i class="fa-solid fa-location-dot text-gold mr-2"></i>A19S Pandav Nagar Delhi Near
                            Akshardham Mandir Metro Station 110092</li>
                    </ul>
                </div>
            </div>

            <div
                class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
                <p>© 2024 SMART INDIA DETECTIVE Agency. All Rights Reserved.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="{{ route('privacy-policy') }}" class="{{ request()->routeIs('privacy-policy') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Privacy Policy</a>
                    <a href="{{ route('terms-and-conditions') }}" class="{{ request()->routeIs('terms-and-conditions') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Terms & Conditions</a>
                    <a href="{{ route('site-map') }}" class="{{ request()->routeIs('site-map') ? 'text-gold font-semibold' : 'hover:text-gold' }} transition">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="fixed bottom-6 right-4 md:right-6 z-[9999] flex flex-col gap-4">

        <a href="https://wa.me/917982697272" target="_blank" class="flex items-center justify-end group">
            <span
                class="hidden md:block bg-white text-black text-xs font-bold px-3 py-1 rounded mr-3 shadow-lg opacity-0 group-hover:opacity-100 transition duration-300">
                Chat on WhatsApp
            </span>
            <div
                class="w-12 h-12 md:w-14 md:h-14 bg-green-500 rounded-full flex items-center justify-center text-white text-2xl md:text-3xl shadow-2xl hover:bg-green-600 transition hover:scale-110 cursor-pointer">
                <i class="fa-brands fa-whatsapp"></i>
            </div>
        </a>

        <a href="tel:+917982697272" class="flex items-center justify-end group">
            <span
                class="hidden md:block bg-white text-black text-xs font-bold px-3 py-1 rounded mr-3 shadow-lg opacity-0 group-hover:opacity-100 transition duration-300">
                Call Now
            </span>
            <div
                class="w-12 h-12 md:w-14 md:h-14 bg-gold rounded-full flex items-center justify-center text-black text-xl md:text-2xl shadow-2xl hover:bg-white hover:scale-110 transition cursor-pointer animate-bounce">
                <i class="fa-solid fa-phone"></i>
            </div>
        </a>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            duration: 800,
            easing: 'ease-in-out',
            once: true,
        });
    </script>