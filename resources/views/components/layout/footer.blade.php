<footer class="relative w-full bg-dark pt-20 pb-10 border-t border-white/5 overflow-hidden">
    <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-accent/5 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="max-w-[1400px] mx-auto px-6 md:px-10">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-20">
            
            <div class="md:col-span-5 space-y-6">
                <div class="text-3xl font-black italic tracking-tighter uppercase">
                    ParasDigital<span class="text-accent">.</span>
                </div>
                <p class="text-gray-500 text-sm max-w-xs leading-relaxed uppercase tracking-wider font-medium">
                    {{ __('portfolio.footer.description') }}
                </p>
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-green-500/5 border border-green-500/10">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    <span class="text-[9px] font-black uppercase tracking-[0.2em] text-green-500">
                        {{ __('portfolio.footer.status') }}
                    </span>
                </div>
            </div>

            <div class="md:col-span-2 space-y-6">
                <h4 class="text-[10px] font-black uppercase tracking-[0.3em] text-white/20">
                    {{ __('portfolio.footer.nav_title') }}
                </h4>
                <ul class="space-y-4 text-xs font-bold uppercase tracking-widest text-gray-400">
                    <li><a href="#work" class="hover:text-accent transition-colors">{{ __('portfolio.nav.work') }}</a></li>
                    <li><a href="#about" class="hover:text-accent transition-colors">{{ __('portfolio.nav.about') }}</a></li>
                    <li><a href="#stack" class="hover:text-accent transition-colors">{{ __('portfolio.nav.stack') }}</a></li>
                    <li><a href="/admin/login" class="hover:text-accent transition-colors">Console</a></li>
                </ul>
            </div>

            <div class="md:col-span-2 space-y-6">
                <h4 class="text-[10px] font-black uppercase tracking-[0.3em] text-white/20">Socials</h4>
                <ul class="space-y-4 text-xs font-bold uppercase tracking-widest text-gray-400">
                    <li><a href="https://www.instagram.com/krisnaaaaadddd?igsh=MWNwaDQwc21pZmNxdA%3D%3D&utm_source=qr" class="hover:text-white transition-colors">Instagram</a></li>
                    <li><a href="https://www.linkedin.com/in/nyoman-krisna-adi-guna-8aa4a4355/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B5nIyo2NFQhOeIVy1R6omxQ%3D%3D" class="hover:text-white transition-colors">LinkedIn</a></li>
                    <li><a href="https://github.com/krisna26-droid" class="hover:text-white transition-colors">Github</a></li>
                    <li><a href="https://dribbble.com/krisna26-droid" class="hover:text-white transition-colors">Dribbble</a></li>
                </ul>
            </div>

            <div class="md:col-span-3 space-y-6">
                <h4 class="text-[10px] font-black uppercase tracking-[0.3em] text-white/20">
                    {{ __('portfolio.footer.contact_title') }}
                </h4>
                <div class="space-y-2">
                    <a href="mailto:hello@dev.com" class="block text-sm font-black uppercase tracking-tighter hover:text-accent transition-colors">parasteamdev@gmail.com</a>
                    <p class="text-[10px] text-gray-600 font-bold uppercase tracking-widest">
                        {{ __('portfolio.footer.location') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-[8px] font-black uppercase tracking-[0.4em] text-gray-600">
                © 2026 {{ __('portfolio.footer.rights') }} — Designed & Coded by ParasDigital
            </div>
            
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-2">
                    <span class="text-[8px] font-black uppercase tracking-[0.3em] text-gray-700">
                        {{ __('portfolio.footer.local_time') }}
                    </span>
                    <span id="local-time" class="text-[9px] font-mono text-gray-400">00:00:00</span>
                </div>
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="w-10 h-10 rounded-full border border-white/5 flex items-center justify-center group hover:bg-white transition-all">
                    <i data-lucide="arrow-up" class="w-4 h-4 text-gray-500 group-hover:text-black group-hover:-translate-y-1 transition-all"></i>
                </button>
            </div>
        </div>
    </div>
</footer>