<section class="relative min-h-[90vh] flex flex-col justify-center items-center px-6 md:px-10 overflow-hidden pt-12">

    {{-- Background --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 spotlight w-[700px] h-[700px]"></div>

    {{-- MAIN HERO --}}
    <div class="relative z-10 w-full max-w-[1400px] mx-auto grid md:grid-cols-[1.2fr_0.8fr] items-center gap-x-12 gap-y-12 px-4 md:px-8">

        {{-- LEFT --}}
        <div class="order-2 md:order-1 flex flex-col items-start justify-center">

            <div class="flex items-center gap-3 mb-4">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                </span>
                <span class="text-accent text-[10px] font-bold uppercase tracking-[0.3em]">
                    {{ __('portfolio.hero.badge') }}
                </span>
            </div>

            <h1 class="text-[13vw] md:text-[8vw] lg:text-[6vw] font-black leading-[0.9] tracking-tighter mb-6 uppercase italic">
                <span class="text-gradient block">{{ __('portfolio.hero.title_1') }}</span>
                <span class="text-white block">{{ __('portfolio.hero.title_2') }}</span>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-accent block italic">
                    {{ __('portfolio.hero.title_3') }}
                </span>
            </h1>

            <p class="max-w-md text-gray-500 text-xs md:text-sm leading-relaxed mb-8 border-l-2 border-accent/30 pl-6">
                {{ __('portfolio.hero.subtitle') }}
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="/{{ app()->getLocale() }}/projects" 
                class="btn-aggressive inline-block px-8 py-4 bg-accent text-white text-[10px] font-black rounded-xl uppercase tracking-[0.2em] shadow-lg shadow-accent/20 transition-all hover:scale-105 active:scale-95">
                    {{ __('portfolio.hero.cta_work') }} →
                </a>
                <button class="btn-aggressive px-8 py-4 glass-card text-white text-[10px] font-black rounded-xl uppercase tracking-[0.2em]">
                    {{ __('portfolio.hero.cta_cv') }}
                </button>
            </div>
        </div>

        {{-- RIGHT (BIGGER + CENTERED) --}}
        <div class="relative order-1 md:order-2 flex items-center justify-center h-full">

    <div class="w-[320px] h-[320px] md:w-[420px] md:h-[420px] lg:w-[480px] lg:h-[480px] relative flex items-center justify-center translate-y-4 md:translate-y-6">

        {{-- Rotating Borders --}}
        <div class="absolute inset-0 border-2 border-accent/20 rounded-[50px] rotate-12 animate-[spin_20s_linear_infinite]"></div>
        <div class="absolute inset-0 border-2 border-blue-500/10 rounded-[50px] -rotate-12 animate-[spin_15s_linear_infinite_reverse]"></div>

        {{-- Inner Glass --}}
        <div class="absolute inset-10 md:inset-12 bg-gradient-to-br from-accent/10 to-blue-500/10 backdrop-blur-3xl rounded-[40px] flex flex-col items-center justify-center border border-white/5 transition-transform duration-500 hover:scale-105">

            <span class="text-3xl md:text-4xl font-black italic text-white/20 uppercase leading-none">
                ParasDigital
            </span>

            <span class="text-base md:text-lg font-light text-white/10 tracking-[0.5em] uppercase">
                By Krisna Adi Guna
            </span>

        </div>

    </div>
</div>

    </div>

    {{-- STATS --}}
    <div class="relative z-10 w-full max-w-[1400px] mx-auto mt-16 flex flex-wrap gap-16 justify-center md:justify-start px-4 md:px-8">

        <div class="group">
            <div class="text-3xl font-black group-hover:text-accent transition-colors duration-300">2+</div>
            <div class="text-[8px] uppercase tracking-[0.4em] text-gray-600 mt-1 font-bold">
                {{ __('portfolio.stats.projects') }}
            </div>
        </div>

        <div class="group">
            <div class="text-3xl font-black group-hover:text-accent transition-colors duration-300">1+</div>
            <div class="text-[8px] uppercase tracking-[0.4em] text-gray-600 mt-1 font-bold">
                {{ __('portfolio.stats.exp') }}
            </div>
        </div>

        <div class="group">
            <div class="text-3xl font-black group-hover:text-accent transition-colors duration-300">100%</div>
            <div class="text-[8px] uppercase tracking-[0.4em] text-gray-600 mt-1 font-bold">
                {{ __('portfolio.stats.success') }}
            </div>
        </div>

    </div>

</section>