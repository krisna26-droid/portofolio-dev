@props(['features'])

<section id="about" class="relative py-20 px-6 overflow-hidden">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-start">
        
        <div class="flex flex-col items-start">
            <span class="px-3 py-1 glass-card rounded-full text-[10px] font-bold text-accent uppercase mb-6 tracking-widest">About Me</span>
            <h2 class="text-5xl md:text-6xl font-black tracking-tighter uppercase italic mb-8 leading-[0.9]">
                Crafting <span class="text-gradient">Excellence</span> <br> Through Code
            </h2>
            <div class="space-y-6 text-gray-500 text-sm leading-relaxed max-w-md">
                <p>I'm a <strong class="text-white font-bold italic">Senior Full-Stack Developer</strong> with over 8 years of experience building high-impact digital products.</p>
                <p>My expertise spans the entire development lifecycle—from system architecture to pixel-perfect UI implementation.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach($features as $f)
            <div class="glass-card p-8 rounded-[32px] hover:border-accent/50 transition-colors group">
                <div class="w-10 h-10 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 text-accent group-hover:scale-110 transition-transform">
                    <i data-lucide="{{ $f['icon'] }}" class="w-5 h-5"></i>
                </div>
                <h4 class="text-lg font-bold mb-2 uppercase tracking-tight">{{ $f['title'] }}</h4>
                <p class="text-xs text-gray-500 leading-relaxed">{{ $f['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>