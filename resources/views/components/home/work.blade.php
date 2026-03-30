<section id="work" class="relative py-24 px-6 md:px-10">

    <div class="max-w-[1400px] mx-auto px-4 md:px-8">

        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
            <div>
                <span class="text-accent text-[10px] font-bold uppercase tracking-[0.3em] mb-4 block">
                    {{ __('portfolio.work.featured') }}
                </span>
                <h2 class="text-5xl md:text-7xl font-black tracking-tighter uppercase italic leading-[0.85]">
                    {{ __('portfolio.work.title') }}
                    <span class="text-gradient block">{{ __('portfolio.work.subtitle') }}</span>
                </h2>
            </div>

            <p class="text-gray-500 text-xs max-w-[280px] leading-relaxed md:text-right border-l-2 border-accent/20 pl-4 md:border-l-0 md:border-r-2 md:pr-4 md:pl-0">
                {{ __('portfolio.work.desc') }}
            </p>
        </div>

        {{-- Project Grid --}}
        @if($projects->isEmpty())
            <div class="text-center py-28 glass-card rounded-[40px]">
                <p class="text-gray-600 italic text-sm">{{ __('portfolio.work.empty') }}</p>
                <p class="text-gray-700 text-[10px] uppercase tracking-widest mt-2">
                    {{ __('portfolio.work.admin_hint') }} →
                </p>
            </div>
        @else
            <div class="grid grid-cols-12 gap-6 auto-rows-[420px]">

                @foreach($projects as $i => $project)
                    @php
                        $thumb = $project->image ?? "https://s0.wp.com/mshots/v1/" . urlencode($project->link) . "?w=1280&h=800";
                        $colorMap = [
                            'accent'      => ['border' => 'border-accent/40',      'bg' => 'bg-accent/10',      'text' => 'text-accent'],
                            'blue-400'    => ['border' => 'border-blue-400/40',    'bg' => 'bg-blue-400/10',    'text' => 'text-blue-400'],
                            'emerald-400' => ['border' => 'border-emerald-400/40', 'bg' => 'bg-emerald-400/10', 'text' => 'text-emerald-400'],
                            'rose-400'    => ['border' => 'border-rose-400/40',    'bg' => 'bg-rose-400/10',    'text' => 'text-rose-400'],
                            'amber-400'   => ['border' => 'border-amber-400/40',   'bg' => 'bg-amber-400/10',   'text' => 'text-amber-400'],
                        ];
                        $c = $colorMap[$project->color ?? 'accent'] ?? $colorMap['accent'];
                    @endphp

                    <a href="{{ $project->link }}" target="_blank"
                       class="{{ $project->span }} group relative overflow-hidden rounded-[30px] glass-card p-1 block cursor-none">

                        {{-- Image --}}
                        <div class="absolute inset-1 rounded-[26px] overflow-hidden bg-white/[0.02]">
                            <img src="{{ $thumb }}" alt="{{ $project->title }}"
                                 class="w-full h-full object-cover object-top transition-all duration-700 ease-out opacity-50 group-hover:opacity-70 group-hover:scale-105"
                                 loading="lazy">
                        </div>

                        {{-- Overlay --}}
                        <div class="absolute inset-1 rounded-[26px] bg-gradient-to-t from-dark/95 via-dark/50 to-dark/10"></div>

                        {{-- Content --}}
                        <div class="relative z-20 h-full flex flex-col justify-between p-7">

                            <div class="flex justify-between items-start">
                                <span class="text-[10px] font-black text-white/10 tabular-nums">
                                    {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <div class="opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <div class="w-9 h-9 bg-white text-black rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                            <path d="M7 17L17 7M17 7H7M17 7v10"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <span class="px-2.5 py-1 border {{ $c['border'] }} {{ $c['bg'] }} rounded-full text-[8px] font-black {{ $c['text'] }} uppercase mb-3 inline-block tracking-[0.15em]">
                                    {{ $project->category }}
                                </span>

                                <h3 class="text-2xl font-black uppercase italic tracking-tighter mb-3 leading-tight group-hover:text-accent transition-colors duration-300">
                                    {{ $project->title }}
                                </h3>

                                <div class="flex flex-wrap gap-2">
                                    @foreach(explode(',', $project->tags) as $tag)
                                        <span class="text-[7px] font-bold text-gray-500 px-2 py-1 border border-white/8 bg-white/[0.03] rounded-md uppercase tracking-wider">
                                            {{ trim($tag) }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </a>
                @endforeach

            </div>
        @endif

    </div>
</section>