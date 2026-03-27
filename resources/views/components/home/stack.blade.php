@props(['stacks'])

<section id="stack" class="relative py-20 overflow-hidden border-t border-white/5">
    <div class="max-w-6xl mx-auto px-6 mb-12">
        <span class="text-accent text-[10px] font-bold uppercase tracking-[0.3em] mb-4 block">Technology Stack</span>
        <h2 class="text-5xl font-black tracking-tighter uppercase italic">Tech <span class="text-gradient">Arsenal</span></h2>
    </div>

    <div class="flex flex-col gap-6">
        <div class="relative flex overflow-hidden py-4 border-y border-white/5 bg-white/[0.02]">
            <div class="animate-marquee-reverse flex whitespace-nowrap gap-4 px-2">
                {{-- Duplikasi data 3x untuk efek seamless sempurna --}}
                @foreach(array_merge($stacks, $stacks, $stacks) as $s)
                <div class="glass-card flex items-center gap-4 px-8 py-4 rounded-2xl group hover:border-accent/50 transition-all flex-shrink-0">
                    <img src="{{ $s['icon'] }}" alt="{{ $s['name'] }}" class="w-6 h-6 grayscale group-hover:grayscale-0 transition-all">
                    <span class="text-sm font-bold uppercase tracking-widest text-gray-500 group-hover:text-white">{{ $s['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <div class="relative flex overflow-hidden py-2">
            <div class="animate-marquee flex whitespace-nowrap gap-4 px-2">
                @foreach(array_merge($stacks, $stacks, $stacks) as $s)
                <div class="glass-card flex items-center gap-3 px-6 py-3 rounded-xl opacity-40 hover:opacity-100 transition-all flex-shrink-0">
                    <img src="{{ $s['icon'] }}" alt="{{ $s['name'] }}" class="w-5 h-5 grayscale group-hover:grayscale-0">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-gray-600 group-hover:text-white">{{ $s['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>