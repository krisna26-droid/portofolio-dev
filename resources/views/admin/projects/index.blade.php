<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Manage Projects</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark text-white p-6 md:p-10 font-sans selection:bg-accent">

    <div class="noise-overlay"></div>
    <div id="v-cursor"></div>

    <div class="max-w-5xl mx-auto space-y-12">

        {{-- Header --}}
        <div class="flex justify-between items-center">
            <h1 class="text-4xl font-black uppercase italic tracking-tighter">
                Admin <span class="text-gradient">Panel</span>
            </h1>
            <div class="flex items-center gap-6">
                <a href="/en" class="text-[10px] font-bold uppercase tracking-widest text-gray-500 hover:text-accent transition-colors">
                    ← View Portfolio
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-[10px] font-bold uppercase tracking-widest text-gray-500 hover:text-red-500 transition-colors">
                        Logout →
                    </button>
                </form>
            </div>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="p-4 bg-green-500/10 border border-green-500/20 rounded-2xl text-green-400 text-xs font-bold uppercase tracking-wider text-center">
                ✓ {{ session('success') }}
            </div>
        @endif

        <div class="grid md:grid-cols-5 gap-10 items-start">

            {{-- Form Add Project --}}
            <div class="md:col-span-2 sticky top-10">
                <h2 class="text-sm font-bold uppercase tracking-[0.3em] mb-6 text-accent">Add New Project</h2>
                <form action="{{ route('admin.projects.store') }}" method="POST" class="glass-card p-6 rounded-[32px] space-y-4">
                    @csrf

                    <div class="space-y-1">
                        <label class="text-[9px] font-black uppercase tracking-widest text-gray-500 ml-1">Project Title *</label>
                        <input type="text" name="title" placeholder="e.g. GenRe Denpasar" required
                            value="{{ old('title') }}"
                            class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 text-white outline-none focus:border-accent transition-all text-sm placeholder:text-gray-700">
                    </div>

                    <div class="space-y-1">
                        <label class="text-[9px] font-black uppercase tracking-widest text-gray-500 ml-1">Category *</label>
                        <input type="text" name="category" placeholder="e.g. Web Application" required
                            value="{{ old('category') }}"
                            class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 text-white outline-none focus:border-accent transition-all text-sm placeholder:text-gray-700">
                    </div>

                    <div class="space-y-1">
                        <label class="text-[9px] font-black uppercase tracking-widest text-gray-500 ml-1">Live URL *</label>
                        <input type="url" name="link" placeholder="https://yourproject.com" required
                            value="{{ old('link') }}"
                            class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 text-white outline-none focus:border-accent transition-all text-sm placeholder:text-gray-700">
                    </div>

                    <div class="space-y-1">
                        <label class="text-[9px] font-black uppercase tracking-widest text-gray-500 ml-1">
                            Custom Image URL
                            <span class="text-gray-600 normal-case tracking-normal font-normal">(opsional, kosongkan = auto screenshot)</span>
                        </label>
                        <input type="text" name="image" placeholder="https://i.imgur.com/yourimage.png"
                            value="{{ old('image') }}"
                            class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 text-white outline-none focus:border-accent transition-all text-sm placeholder:text-gray-700">
                    </div>

                    <div class="space-y-1">
                        <label class="text-[9px] font-black uppercase tracking-widest text-gray-500 ml-1">Tags * <span class="text-gray-600 normal-case tracking-normal font-normal">(comma separated)</span></label>
                        <input type="text" name="tags" placeholder="Laravel, React, Tailwind" required
                            value="{{ old('tags') }}"
                            class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 text-white outline-none focus:border-accent transition-all text-sm placeholder:text-gray-700">
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div class="space-y-1">
                            <label class="text-[9px] font-black uppercase tracking-widest text-gray-500 ml-1">Card Size *</label>
                            <select name="span" class="w-full p-4 rounded-2xl bg-[#111] border border-white/10 text-white outline-none focus:border-accent transition-all text-sm">
                                <option value="col-span-12 md:col-span-8" class="bg-[#111]">Large (2/3)</option>
                                <option value="col-span-12 md:col-span-4" class="bg-[#111]" selected>Small (1/3)</option>
                                <option value="col-span-12 md:col-span-6" class="bg-[#111]">Medium (1/2)</option>
                                <option value="col-span-12" class="bg-[#111]">Full Width</option>
                            </select>
                        </div>

                        <div class="space-y-1">
                            <label class="text-[9px] font-black uppercase tracking-widest text-gray-500 ml-1">Accent Color</label>
                            <select name="color" class="w-full p-4 rounded-2xl bg-[#111] border border-white/10 text-white outline-none focus:border-accent transition-all text-sm">
                                <option value="accent" class="bg-[#111]">Purple (default)</option>
                                <option value="blue-400" class="bg-[#111]">Blue</option>
                                <option value="emerald-400" class="bg-[#111]">Green</option>
                                <option value="rose-400" class="bg-[#111]">Red</option>
                                <option value="amber-400" class="bg-[#111]">Yellow</option>
                            </select>
                        </div>
                    </div>

                    @if($errors->any())
                        <div class="p-3 bg-red-500/10 border border-red-500/20 rounded-xl text-red-400 text-[10px] font-bold uppercase tracking-wider">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <button type="submit" class="btn-aggressive w-full py-4 bg-accent text-white font-black rounded-2xl uppercase tracking-widest text-xs shadow-lg shadow-accent/20">
                        + Save Project
                    </button>
                </form>
            </div>

            {{-- Project List --}}
            <div class="md:col-span-3">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-sm font-bold uppercase tracking-[0.3em] text-gray-500">
                        Project List
                    </h2>
                    <span class="text-[10px] font-bold text-gray-600 uppercase tracking-widest glass-card px-3 py-1 rounded-full">
                        {{ $projects->count() }} projects
                    </span>
                </div>

                <div class="space-y-3">
                    @forelse($projects as $project)
                        <div class="glass-card p-5 rounded-3xl flex justify-between items-center group hover:border-white/20 transition-all">
                            <div class="flex items-center gap-4">
                                {{-- Mini Preview --}}
                                @php
                                    $thumb = $project->image 
        ?? "https://s0.wp.com/mshots/v1/" . urlencode($project->link) . "?w=1280&h=800";
                                @endphp
                                <div class="w-12 h-12 rounded-xl overflow-hidden border border-white/10 flex-shrink-0 bg-white/5">
                                    <img src="{{ $thumb }}" alt="{{ $project->title }}"
                                         class="w-full h-full object-cover object-top"
                                         onerror="this.style.display='none'">
                                </div>
                                <div>
                                    <h3 class="font-black uppercase tracking-tight text-sm">{{ $project->title }}</h3>
                                    <p class="text-[9px] text-gray-500 uppercase tracking-widest mt-0.5">
                                        {{ $project->category }}
                                        <span class="text-gray-700 mx-1">·</span>
                                        {{ $project->span === 'col-span-12' ? 'Full' : (str_contains($project->span, '8') ? 'Large' : (str_contains($project->span, '6') ? 'Medium' : 'Small')) }}
                                    </p>
                                    <div class="flex flex-wrap gap-1 mt-1.5">
                                        @foreach(array_slice(explode(',', $project->tags), 0, 3) as $tag)
                                            <span class="text-[7px] font-bold text-gray-600 px-1.5 py-0.5 border border-white/5 rounded uppercase">{{ trim($tag) }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 flex-shrink-0">
                                <a href="{{ $project->link }}" target="_blank"
                                   class="w-8 h-8 glass-card rounded-xl flex items-center justify-center text-gray-500 hover:text-white transition-colors">
                                    <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                      onsubmit="return confirm('Delete \'{{ $project->title }}\'?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="w-8 h-8 glass-card rounded-xl flex items-center justify-center text-gray-500 hover:text-red-500 hover:border-red-500/30 transition-all">
                                        <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-16 glass-card rounded-3xl">
                            <p class="text-gray-600 italic text-sm">No projects yet.</p>
                            <p class="text-gray-700 text-[10px] uppercase tracking-widest mt-2">Add your first project ←</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>
</html>