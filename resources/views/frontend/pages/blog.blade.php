@extends('frontend.layouts.base')
@push('title')
    <title>Blog & Articles | Investigation Tips | SMART INDIA DETECTIVE</title>
@endpush
@section('meta_description', 'Read our blog on investigation tips, matrimonial checks, corporate fraud detection, and cyber crime prevention. Expert insights from 15+ years of experience.')
@section('meta_keywords', 'investigation blog, detective tips, matrimonial advice, fraud detection, cyber crime prevention')
@section('page-content')
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1920&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-30" alt="Corporate Investigation">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <span
                class="bg-gold text-black px-4 py-1 rounded text-xs font-bold uppercase tracking-widest mb-4 inline-block shadow-lg">Business
                Protection</span>
            <h1 class="text-3xl md:text-6xl font-serif font-bold text-white mb-4">Corporate <span
                    class="text-gold-gradient">Fraud Investigation</span></h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">Protect your assets, data, and reputation. We expose internal
                theft, espionage, and fraud.</p>
        </div>
    </section>

    <section class="py-20 bg-dark">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <div class="lg:col-span-2 space-y-12">

                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-serif font-bold text-white mb-6">Protect Your Business</h2>
                        <p class="text-gray-400 leading-relaxed mb-4 text-justify">
                            Corporate fraud is an invisible enemy that eats into your profits and destroys your market
                            reputation. Whether it is an employee stealing confidential data, a partner embezzling funds, or
                            a competitor planting a spy, the damage can be irreversible.
                        </p>
                        <p class="text-gray-400 leading-relaxed text-justify">
                            <strong>SMART INDIA DETECTIVE</strong> provides comprehensive corporate investigation services.
                            We help businesses identify loopholes, catch culprits, and gather legal evidence for termination
                            or prosecution. Our team includes forensic auditors, cyber experts, and undercover agents.
                        </p>
                    </div>

                    <div class="bg-card border border-white/5 rounded-lg overflow-hidden" data-aos="fade-up">
                        <div class="grid grid-cols-2 border-b border-white/10">
                            <button class="py-4 text-center font-bold text-gold bg-white/5 border-b-2 border-gold">Internal
                                Fraud</button>
                            <button class="py-4 text-center font-bold text-gray-500 hover:text-white">External
                                Threats</button>
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-white mb-4">The Enemy Within</h3>
                            <p class="text-sm text-gray-400 mb-6">Investigating employees, partners, and management for
                                illegal activities.</p>

                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <li class="flex items-start bg-surface p-3 rounded border border-white/5">
                                    <i class="fa-solid fa-user-xmark text-gold mt-1 mr-3"></i>
                                    <div>
                                        <strong class="text-white text-sm block">Employee Theft</strong>
                                        <span class="text-xs text-gray-500">Stealing inventory or cash.</span>
                                    </div>
                                </li>
                                <li class="flex items-start bg-surface p-3 rounded border border-white/5">
                                    <i class="fa-solid fa-database text-gold mt-1 mr-3"></i>
                                    <div>
                                        <strong class="text-white text-sm block">Data Leakage</strong>
                                        <span class="text-xs text-gray-500">Selling client lists to competitors.</span>
                                    </div>
                                </li>
                                <li class="flex items-start bg-surface p-3 rounded border border-white/5">
                                    <i class="fa-solid fa-file-invoice-dollar text-gold mt-1 mr-3"></i>
                                    <div>
                                        <strong class="text-white text-sm block">Financial Fraud</strong>
                                        <span class="text-xs text-gray-500">Embezzlement & fake bills.</span>
                                    </div>
                                </li>
                                <li class="flex items-start bg-surface p-3 rounded border border-white/5">
                                    <i class="fa-solid fa-id-card text-gold mt-1 mr-3"></i>
                                    <div>
                                        <strong class="text-white text-sm block">Fake Degrees</strong>
                                        <span class="text-xs text-gray-500">Resume & background verification.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-surface border-l-4 border-blue-500 p-8 rounded shadow-lg" data-aos="fade-up">
                        <h3 class="text-xl font-bold text-white mb-4 flex items-center"><i
                                class="fa-solid fa-mask text-blue-500 mr-3"></i> Undercover Operations</h3>
                        <p class="text-sm text-gray-400 mb-6">
                            Sometimes, external checks aren't enough. We deploy trained agents as employees (Office Boy, IT
                            Staff, Manager) in your company to watch and report from the inside.
                        </p>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li><i class="fa-solid fa-microphone text-gold mr-2"></i> <strong>Audio Evidence:</strong>
                                Recording incriminating conversations.</li>
                            <li><i class="fa-solid fa-network-wired text-gold mr-2"></i> <strong>Network
                                    Monitoring:</strong> Tracking unauthorized data transfers.</li>
                        </ul>
                    </div>

                    <div data-aos="fade-up">
                        <h3 class="text-2xl font-bold text-white mb-8">Corporate Investigation Process</h3>
                        <div class="relative border-l border-gray-700 ml-3 space-y-8">
                            <div class="ml-8 relative">
                                <span
                                    class="absolute -left-12 top-0 w-8 h-8 bg-gold rounded-full flex items-center justify-center text-black font-bold">1</span>
                                <h4 class="text-white font-bold text-lg">Secrecy Agreement (NDA)</h4>
                                <p class="text-gray-400 text-sm mt-1">We sign a legal NDA before discussing your internal
                                    matters.</p>
                            </div>
                            <div class="ml-8 relative">
                                <span
                                    class="absolute -left-12 top-0 w-8 h-8 bg-card border border-gold rounded-full flex items-center justify-center text-gold font-bold">2</span>
                                <h4 class="text-white font-bold text-lg">Covert Surveillance / Audit</h4>
                                <p class="text-gray-400 text-sm mt-1">Deployment of hidden cameras, software trackers, or
                                    undercover agents.</p>
                            </div>
                            <div class="ml-8 relative">
                                <span
                                    class="absolute -left-12 top-0 w-8 h-8 bg-card border border-gold rounded-full flex items-center justify-center text-gold font-bold">3</span>
                                <h4 class="text-white font-bold text-lg">Legal Report</h4>
                                <p class="text-gray-400 text-sm mt-1">A detailed report with evidence admissible in labor
                                    court or for FIR.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="lg:col-span-1">
                    <div class="sticky top-24 space-y-8">

                        <div class="bg-surface border border-gold/30 rounded-lg p-6 shadow-2xl relative overflow-hidden"
                            data-aos="fade-left">
                            <div class="absolute top-0 right-0 bg-gold text-black text-[10px] font-bold px-2 py-1">CORPORATE
                            </div>
                            <div class="text-center mb-6">
                                <h3 class="text-gray-400 text-xs font-bold uppercase tracking-widest">Starting From</h3>
                                <div class="text-4xl font-serif font-bold text-white mt-2">₹25,000</div>
                                <p class="text-xs text-gray-500 mt-2">*Varies by Company Size</p>
                            </div>

                            <a href="tel:+917982697272"
                                class="block w-full bg-gold hover:bg-white text-black text-center font-bold py-3 rounded mb-4 transition shadow-lg">
                                <i class="fa-solid fa-phone mr-2"></i> Schedule Meeting
                            </a>
                            <p class="text-[10px] text-center text-gray-500">NDA Signed Before Meeting</p>
                        </div>

                        <div class="bg-card p-6 rounded border border-white/10" data-aos="fade-left" data-aos-delay="100">
                            <h4 class="text-white font-bold mb-4">Business Inquiry</h4>
                            <form class="space-y-3" method="POST" action="{{ route('submit.contact-form') }}">
                                @csrf
                                <input type="text" name="name" placeholder="Company Name" required
                                    class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="email" name="email" placeholder="Official Email" required
                                    class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="text" name="phone" placeholder="Official Phone"
                                    class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="hidden" name="service" value="corporate-fraud">
                                <textarea name="subject" placeholder="Employee Verification / Internal Fraud / Competitor Intel / Due Diligence" rows="2"
                                    class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none"></textarea>
                                <input type="hidden" name="message" value="Blog Inquiry">
                                <button type="submit"
                                    class="w-full bg-white hover:bg-gray-200 text-black font-bold py-3 rounded transition text-sm">Request
                                    Callback</button>
                            </form>
                        </div>

                        <div class="bg-card p-6 rounded border border-white/5">
                            <h4 class="text-gold font-bold text-sm uppercase mb-4 border-b border-white/10 pb-2">Business
                                FAQ</h4>
                            <details class="group mb-3 cursor-pointer">
                                <summary class="text-sm text-gray-300 font-bold list-none flex justify-between">Is this
                                    legal? <span class="text-gold">+</span></summary>
                                <p class="text-xs text-gray-500 mt-2">Yes, internal audits and surveillance on company
                                    property are legal.</p>
                            </details>
                            <details class="group mb-3 cursor-pointer">
                                <summary class="text-sm text-gray-300 font-bold list-none flex justify-between">Can we use
                                    evidence in court? <span class="text-gold">+</span></summary>
                                <p class="text-xs text-gray-500 mt-2">Yes, we provide reports compliant with the Indian
                                    Evidence Act.</p>
                            </details>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-gradient-gold">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-serif font-bold text-black mb-4">Clean Up Your Business.</h2>
            <p class="text-black/80 font-bold mb-8 max-w-2xl mx-auto">Don't let fraudsters ruin your hard work. Get
                professional help.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="tel:+917982697272"
                    class="bg-black text-white px-8 py-3 rounded font-bold hover:bg-gray-800 transition shadow-xl">Call
                    Now</a>
                <a href="mailto:corporate@smartindiadetective.com"
                    class="bg-white text-black px-8 py-3 rounded font-bold hover:bg-gray-100 transition shadow-xl">Email
                    Us</a>
            </div>
        </div>
    </section>
@endsection
