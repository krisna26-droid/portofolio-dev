@props(['features'])

<section id="about" class="relative py-20 px-6 md:px-10 overflow-hidden">
    <div class="max-w-[1400px] mx-auto px-4 md:px-8 grid md:grid-cols-2 gap-16 items-start">
        
        <div class="flex flex-col items-start">
            <span class="px-3 py-1 glass-card rounded-full text-[10px] font-bold text-accent uppercase mb-6 tracking-widest">
                {{ __('portfolio.about.badge') }}
            </span>
            <h2 class="text-5xl md:text-6xl font-black tracking-tighter uppercase italic mb-8 leading-[0.9]">
                {{ __('portfolio.about.title_1') }} <span class="text-gradient">{{ __('portfolio.about.title_2') }}</span> <br> 
                {{ __('portfolio.about.title_3') }}
            </h2>
            <div class="space-y-6 text-gray-500 text-sm leading-relaxed max-w-md">
                <p>{!! __('portfolio.about.p1') !!}</p>
                <p>{{ __('portfolio.about.p2') }}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach($features as $f)
            <div class="glass-card p-8 rounded-[32px] hover:border-accent/50 transition-all group">
                <div class="w-10 h-10 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 text-accent group-hover:scale-110 transition-transform">
                    {{-- Gunakan Icon dari Array --}}
                    <i data-lucide="{{ $f['icon'] }}" class="w-5 h-5"></i>
                </div>
                {{-- Memanggil Judul & Deskripsi dari file portfolio.php berdasarkan ID --}}
                <h4 class="text-lg font-bold mb-2 uppercase tracking-tight">
                    {{ __('portfolio.about.features.' . $f['id'] . '.title') }}
                </h4>
                <p class="text-xs text-gray-500 leading-relaxed">
                    {{ __('portfolio.about.features.' . $f['id'] . '.desc') }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>