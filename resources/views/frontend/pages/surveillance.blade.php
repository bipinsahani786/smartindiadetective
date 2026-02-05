@extends('frontend.layouts.base')
@push('title')
    <title>Surveillance & Shadowing Services | Private Investigation</title>
@endpush
@section('meta_description', 'Professional surveillance and shadowing services using advanced technology. GPS tracking, video evidence, and undercover operations for comprehensive investigation.')
@section('meta_keywords', 'surveillance services, shadowing investigation, GPS tracking, undercover operation, video evidence')
@section('page-content')
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?q=80&w=1920&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-30" alt="Surveillance Camera">
            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/70 to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <span
                class="bg-gold text-black px-4 py-1 rounded text-xs font-bold uppercase tracking-widest mb-4 inline-block shadow-lg">24/7
                Monitoring</span>
            <h1 class="text-3xl md:text-6xl font-serif font-bold text-white mb-4">Covert <span
                    class="text-gold-gradient">Surveillance</span></h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">We see what they hide. Professional shadowing and evidence
                gathering with absolute secrecy.</p>
        </div>
    </section>

    <section class="py-20 bg-dark">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <div class="lg:col-span-2 space-y-12">

                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-serif font-bold text-white mb-6">Eyes on the Target</h2>
                        <p class="text-gray-400 leading-relaxed mb-4 text-justify">
                            Surveillance is the art of watching without being seen. Whether you need to track a cheating
                            spouse, a dishonest employee, or a child who might be in bad company, physical observation is
                            the most effective way to gather undeniable proof.
                        </p>
                        <p class="text-gray-400 leading-relaxed text-justify">
                            At <strong>SMART INDIA DETECTIVE</strong>, we use a combination of experienced field agents (on
                            bikes and cars) and advanced technology to track movements. We provide you with a
                            minute-by-minute log of where the subject went, who they met, and what they did—accompanied by
                            high-definition photos and videos.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up">
                        <div class="bg-card p-6 rounded border border-white/5 hover:border-gold transition group">
                            <i
                                class="fa-solid fa-person-walking text-3xl text-gold mb-4 group-hover:translate-x-2 transition"></i>
                            <h3 class="text-white font-bold text-lg mb-2">Physical Shadowing</h3>
                            <p class="text-sm text-gray-400">Following the subject discreetly on foot or by vehicle to track
                                their daily routine.</p>
                        </div>
                        <div class="bg-card p-6 rounded border border-white/5 hover:border-gold transition group">
                            <i class="fa-solid fa-video text-3xl text-gold mb-4 group-hover:translate-x-2 transition"></i>
                            <h3 class="text-white font-bold text-lg mb-2">Static Surveillance</h3>
                            <p class="text-sm text-gray-400">Watching a specific location (house, office, hotel) from a
                                fixed point to record entry/exit.</p>
                        </div>
                        <div class="bg-card p-6 rounded border border-white/5 hover:border-gold transition group">
                            <i
                                class="fa-solid fa-location-crosshairs text-3xl text-gold mb-4 group-hover:translate-x-2 transition"></i>
                            <h3 class="text-white font-bold text-lg mb-2">GPS Tracking</h3>
                            <p class="text-sm text-gray-400">Using technical aids to monitor vehicle movement history and
                                live location.</p>
                        </div>
                        <div class="bg-card p-6 rounded border border-white/5 hover:border-gold transition group">
                            <i
                                class="fa-solid fa-camera-retro text-3xl text-gold mb-4 group-hover:translate-x-2 transition"></i>
                            <h3 class="text-white font-bold text-lg mb-2">Undercover Ops</h3>
                            <p class="text-sm text-gray-400">Infiltrating a workplace or social circle to gather information
                                from the inside.</p>
                        </div>
                    </div>

                    <div class="bg-surface border-l-4 border-gold p-8 rounded shadow-lg" data-aos="fade-up">
                        <h3 class="text-xl font-bold text-white mb-4 flex items-center"><i
                                class="fa-solid fa-shield-cat text-gold mr-3"></i> The "Don't Get Caught" Protocol</h3>
                        <p class="text-sm text-gray-400 mb-4">
                            Our primary rule is <strong>discretion</strong>. We operate with a strict safety margin:
                        </p>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li><i class="fa-solid fa-check text-gold mr-2"></i> <strong>Distance:</strong> We never get too
                                close to alarm the subject.</li>
                            <li><i class="fa-solid fa-check text-gold mr-2"></i> <strong>Rotation:</strong> Agents are
                                swapped frequently to avoid recognition.</li>
                            <li><i class="fa-solid fa-check text-gold mr-2"></i> <strong>Abort Policy:</strong> If the
                                subject gets suspicious, we abort immediately to protect your anonymity.</li>
                        </ul>
                    </div>

                    <div data-aos="fade-up">
                        <h3 class="text-2xl font-bold text-white mb-6">Common Use Cases</h3>
                        <ul class="list-disc list-inside space-y-3 text-gray-400 text-sm ml-2">
                            <li><strong class="text-white">Matrimonial:</strong> Checking where a spouse goes after work.
                            </li>
                            <li><strong class="text-white">Employee:</strong> Verifying if a field sales agent is actually
                                visiting clients.</li>
                            <li><strong class="text-white">Teenager:</strong> Monitoring children suspected of drug abuse or
                                bad company.</li>
                            <li><strong class="text-white">Legal:</strong> Gathering evidence for court cases (proof of
                                income, asset location).</li>
                        </ul>
                    </div>

                </div>

                <div class="lg:col-span-1">
                    <div class="sticky top-24 space-y-8">

                        <div class="bg-surface border border-gold/30 rounded-lg p-6 shadow-2xl relative overflow-hidden"
                            data-aos="fade-left">
                            <div class="absolute top-0 right-0 bg-gold text-black text-[10px] font-bold px-2 py-1">PREMIUM
                            </div>
                            <div class="text-center mb-6">
                                <h3 class="text-gray-400 text-xs font-bold uppercase tracking-widest">Daily Rate</h3>
                                <div class="text-4xl font-serif font-bold text-white mt-2">₹8,000</div>
                                <p class="text-xs text-gray-500 mt-2">*Includes 2 Agents + Vehicle</p>
                            </div>

                            <a href="tel:+917982697272"
                                class="block w-full bg-gold hover:bg-white text-black text-center font-bold py-3 rounded mb-4 transition shadow-lg">
                                <i class="fa-solid fa-phone mr-2"></i> Book Surveillance
                            </a>
                            <p class="text-[10px] text-center text-gray-500">Min. 3 Days Recommended</p>
                        </div>

                        <div class="bg-card p-6 rounded border border-white/10" data-aos="fade-left" data-aos-delay="100">
                            <h4 class="text-white font-bold mb-4">Start Monitoring</h4>
                            <form class="space-y-3" method="POST" action="{{ route('submit.contact-form') }}">
                                @csrf
                                <input type="text" name="name" placeholder="Name (Confidential)" required
                                    class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="text" name="phone" placeholder="Contact Number"
                                    class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="email" name="email" placeholder="Email Address" required
                                    class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none">
                                <input type="hidden" name="service" value="surveillance">
                                <textarea name="subject" placeholder="Spouse / Partner / Employee / Child / Competitor" rows="2"
                                    class="w-full bg-dark border border-gray-700 p-3 rounded text-white text-sm focus:border-gold outline-none"></textarea>
                                <input type="hidden" name="message" value="Surveillance Service Inquiry">
                                <button type="submit"
                                    class="w-full bg-white hover:bg-gray-200 text-black font-bold py-3 rounded transition text-sm">Submit
                                    Request</button>
                            </form>
                        </div>

                        <div class="bg-card p-6 rounded border border-white/5">
                            <h4 class="text-gold font-bold text-sm uppercase mb-4 border-b border-white/10 pb-2">
                                Surveillance FAQ</h4>
                            <details class="group mb-3 cursor-pointer">
                                <summary class="text-sm text-gray-300 font-bold list-none flex justify-between">Do you
                                    provide photos? <span class="text-gold">+</span></summary>
                                <p class="text-xs text-gray-500 mt-2">Yes, time-stamped photos and videos are part of the
                                    final report.</p>
                            </details>
                            <details class="group mb-3 cursor-pointer">
                                <summary class="text-sm text-gray-300 font-bold list-none flex justify-between">Is it legal?
                                    <span class="text-gold">+</span></summary>
                                <p class="text-xs text-gray-500 mt-2">Yes, monitoring activities in public spaces is legal.
                                    We do not trespass.</p>
                            </details>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-gradient-gold">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-serif font-bold text-black mb-4">Need Concrete Evidence?</h2>
            <p class="text-black/80 font-bold mb-8 max-w-2xl mx-auto">Stop guessing. See the truth with your own eyes
                through our reports.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="tel:+917982697272"
                    class="bg-black text-white px-8 py-3 rounded font-bold hover:bg-gray-800 transition shadow-xl">Call
                    Now</a>
                <a href="mailto:indiasmart89@gmail.com"
                    class="bg-white text-black px-8 py-3 rounded font-bold hover:bg-gray-100 transition shadow-xl">Email
                    Us</a>
            </div>
        </div>
    </section>
@endsection
