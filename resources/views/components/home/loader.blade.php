<div id="loader" class="fixed inset-0 z-[100] bg-dark flex flex-col items-center justify-center">
    <h1 id="loader-logo" class="text-8xl font-black italic tracking-tighter opacity-0 translate-y-4">
        DEV
    </h1>

    <div class="w-48 h-[1px] bg-white/10 mt-8 relative overflow-hidden">
        <div id="loader-bar" class="absolute inset-y-0 left-0 bg-accent w-0"></div>
    </div>

    <div class="mt-4 font-mono text-[10px] uppercase tracking-[0.4em] text-gray-500">
        {{ __('portfolio.loading') }} <span id="loader-perc">0</span>%
    </div>
</div>