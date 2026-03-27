<nav class="fixed top-6 left-1/2 -translate-x-1/2 z-50 w-[90%] max-w-4xl px-6 py-4 flex justify-between items-center rounded-2xl border border-white/10 bg-white/5 backdrop-blur-xl transition-all duration-300">
    <div class="text-xl font-black italic tracking-tighter uppercase">.ADD TO DEV</div>

    <div class="hidden md:flex gap-8 text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400">
        <a href="#work" class="hover:text-white transition-colors">Work</a>
        <a href="#about" class="hover:text-white transition-colors">About</a>
        <a href="#stack" class="hover:text-white transition-colors">Stack</a>
    </div>

    <div class="flex items-center gap-4">
        <div class="flex gap-2 text-[10px] font-bold">
            <a href="/en" class="{{ app()->getLocale() == 'en' ? 'text-accent' : 'text-gray-500' }}">EN</a>
            <span class="text-gray-700">|</span>
            <a href="/id" class="{{ app()->getLocale() == 'id' ? 'text-accent' : 'text-gray-500' }}">ID</a>
            <span class="text-gray-700">|</span>
            <a href="/jp" class="{{ app()->getLocale() == 'jp' ? 'text-accent' : 'text-gray-500' }}">JP</a>
        </div>
        <button class="bg-white text-black text-[10px] font-black px-5 py-2 rounded-lg uppercase hover:bg-accent hover:text-white transition-all shadow-lg shadow-white/5">
            Hire Me
        </button>
    </div>
</nav>