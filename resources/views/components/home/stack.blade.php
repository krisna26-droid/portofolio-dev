@props(['stacks'])

<section id="stack" class="relative py-24 overflow-hidden border-t border-white/5">

    {{-- Header (aligned with hero & work) --}}
    <div class="max-w-[1400px] mx-auto px-4 md:px-8 mb-16">
        <span class="text-accent text-[10px] font-bold uppercase tracking-[0.3em] mb-4 block">
            {{ __('portfolio.stack.badge') }}
        </span>

        <h2 class="text-5xl md:text-7xl font-black tracking-tighter uppercase italic leading-[0.9]">
            {{ __('portfolio.stack.title') }}
            <span class="text-gradient">{{ __('portfolio.stack.subtitle') }}</span>
        </h2>
    </div>

    {{-- Marquee Wrapper (intentional full width) --}}
    <div class="relative left-1/2 -translate-x-1/2 w-screen flex flex-col gap-6">

        {{-- Row 1 --}}
        <div class="relative flex overflow-hidden py-4 border-y border-white/5 bg-white/[0.02]">
            <div class="animate-marquee-reverse flex whitespace-nowrap gap-4 px-4">
                @foreach(array_merge($stacks, $stacks, $stacks) as $s)
                    <div class="glass-card flex items-center gap-4 px-8 py-4 rounded-2xl group hover:border-accent/50 transition-all flex-shrink-0">
                        <img src="{{ $s['icon'] }}" alt="{{ $s['name'] }}" class="w-6 h-6 grayscale group-hover:grayscale-0 transition-all">
                        <span class="text-sm font-bold uppercase tracking-widest text-gray-500 group-hover:text-white">
                            {{ $s['name'] }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Row 2 --}}
        <div class="relative flex overflow-hidden py-2">
            <div class="animate-marquee flex whitespace-nowrap gap-4 px-4">
                @foreach(array_merge($stacks, $stacks, $stacks) as $s)
                    <div class="glass-card flex items-center gap-3 px-6 py-3 rounded-xl opacity-40 hover:opacity-100 transition-all flex-shrink-0 group">
                        <img src="{{ $s['icon'] }}" alt="{{ $s['name'] }}" class="w-5 h-5 grayscale group-hover:grayscale-0">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-gray-600 group-hover:text-white">
                            {{ $s['name'] }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

</section>