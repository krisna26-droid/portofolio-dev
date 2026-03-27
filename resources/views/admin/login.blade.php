<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEV | Admin Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark text-white min-h-screen flex items-center justify-center p-6 selection:bg-accent selection:text-white">
    
    <div class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 spotlight w-[500px] h-[500px] opacity-20"></div>
    <div class="noise-overlay"></div>

    <div class="relative z-10 w-full max-w-md">
        <div class="text-center mb-10">
            <h1 class="text-5xl font-black italic tracking-tighter uppercase leading-none">
                DEV <span class="text-gradient">ADMIN</span>
            </h1>
            <p class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-500 mt-4">Restricted Access Only</p>
        </div>

        <div class="glass-card p-10 rounded-[40px] border border-white/10 shadow-2xl">
            @if($errors->any())
                <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-2xl text-red-500 text-xs font-bold uppercase tracking-wider text-center">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-2">Email Address</label>
                    <input type="email" name="email" required placeholder="admin@dev.com" 
                        class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 outline-none focus:border-accent transition-all text-sm placeholder:text-gray-700">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-2">Password</label>
                    <input type="password" name="password" required placeholder="••••••••" 
                        class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 outline-none focus:border-accent transition-all text-sm placeholder:text-gray-700">
                </div>

                <button type="submit" class="btn-aggressive w-full py-5 bg-white text-black font-black rounded-2xl uppercase tracking-[0.2em] text-xs hover:bg-accent hover:text-white transition-all shadow-xl shadow-white/5">
                    Authorize Login
                </button>
            </form>
        </div>

        <div class="text-center mt-8">
            <a href="/" class="text-[10px] font-bold uppercase tracking-widest text-gray-600 hover:text-accent transition-colors">
                ← Back to Portfolio
            </a>
        </div>
    </div>

    <div id="v-cursor"></div>
</body>
</html>