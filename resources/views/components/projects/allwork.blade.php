{{-- resources/views/components/projects/allwork.blade.php --}}
@props(['projects'])

<section class="relative pt-32 pb-20 px-6 md:px-10 min-h-screen bg-dark overflow-hidden">
    {{-- Decorative Background --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[600px] bg-gradient-to-b from-accent/10 to-transparent pointer-events-none text-white"></div>
    <div class="absolute inset-0 opacity-[0.02] pointer-events-none" 
         style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 40px 40px;">
    </div>

    {{-- Container Utama disesuaikan dengan Hero (max-w-[1400px]) --}}
    <div class="relative z-10 w-full max-w-[1400px] mx-auto px-4 md:px-8">
        
        {{-- Header Section --}}
        <div class="mb-20">
            <a href="/{{ app()->getLocale() }}" class="inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-[0.3em] text-gray-500 hover:text-accent transition-all group mb-10">
                <div class="w-8 h-8 rounded-full border border-white/10 flex items-center justify-center group-hover:border-accent/50">
                    <i data-lucide="arrow-left" class="w-3 h-3"></i>
                </div>
                {{ __('portfolio.nav.back_to_home') }}
            </a>
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
                <div>
                    <span class="text-accent text-[10px] font-black uppercase tracking-[0.4em] mb-4 block">Archive</span>
                    <h1 class="text-6xl md:text-[7vw] font-black tracking-tighter uppercase italic leading-[0.85] mb-0">
                        {{ __('portfolio.work.title') }}<br>
                        <span class="text-gradient">{{ __('portfolio.work.all_subtitle') }}</span>
                    </h1>
                </div>
                <p class="text-gray-500 text-xs md:text-sm max-w-sm leading-relaxed uppercase tracking-wider font-medium border-l-2 border-accent/20 pl-6">
                    {{ __('portfolio.work.desc') }}
                </p>
            </div>
        </div>

        {{-- Projects Grid --}}
        @if($projects->isEmpty())
            <div class="text-center py-40 glass-card rounded-[40px] border border-white/5">
                <p class="text-gray-600 italic text-sm">{{ __('portfolio.work.empty') }}</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                @foreach($projects as $i => $project)
                    @php
                        $thumb = $project->image ?? "https://s0.wp.com/mshots/v1/" . urlencode($project->link) . "?w=1280&h=800";
                    @endphp
                    
                    <div class="group relative flex flex-col">
                        {{-- Image Container --}}
                        <div class="relative aspect-[4/5] overflow-hidden rounded-[40px] glass-card p-1 border border-white/5 mb-6 transition-transform duration-500 group-hover:-translate-y-2">
                            <div class="relative w-full h-full overflow-hidden rounded-[36px] bg-white/[0.02]">
                                <img src="{{ $thumb }}" alt="{{ $project->title }}" 
                                     class="w-full h-full object-cover object-top opacity-40 group-hover:opacity-70 group-hover:scale-105 transition-all duration-700 ease-out"
                                     loading="lazy">
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-transparent to-transparent opacity-60 group-hover:opacity-100 transition-all duration-500"></div>
                                
                                <a href="{{ $project->link }}" target="_blank" 
                                   class="absolute top-6 right-6 w-12 h-12 bg-white text-black rounded-full flex items-center justify-center opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 shadow-2xl">
                                    <i data-lucide="external-link" class="w-5 h-5"></i>
                                </a>
                            </div>
                        </div>

                        {{-- Info --}}
                        <div class="px-2">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="text-[9px] font-black text-accent uppercase tracking-widest">{{ $project->category }}</span>
                                <span class="w-1 h-1 rounded-full bg-white/10"></span>
                                <span class="text-[9px] font-mono text-gray-600 uppercase">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            <h3 class="text-2xl font-black uppercase italic tracking-tighter text-white group-hover:text-accent transition-colors mb-4 leading-none">
                                {{ $project->title }}
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach(explode(',', $project->tags) as $tag)
                                    <span class="text-[7px] font-bold text-gray-500 px-2 py-1 border border-white/5 bg-white/[0.02] rounded-md uppercase tracking-widest">
                                        {{ trim($tag) }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Footer CTA --}}
        <div class="mt-32 pt-20 border-t border-white/5 text-center md:text-left">
            <h4 class="text-gray-500 text-[10px] font-bold uppercase tracking-[0.5em] mb-8">
                {{ __('portfolio.contact.title_1') }}
            </h4>
            <a href="mailto:hello@paras.dev" class="text-3xl md:text-6xl font-black uppercase italic tracking-tighter hover:text-accent transition-all leading-none inline-block">
                {{ __('portfolio.work.cta_together_1') }} <span class="text-gradient italic">{{ __('portfolio.work.cta_together_2') }}</span>
            </a>
        </div>
    </div>
</section>

<script>
    lucide.createIcons();
</script>