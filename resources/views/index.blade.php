<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARAS | Digital Solutions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,700;0,800;1,800&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="noise-overlay"></div>
    <div id="v-cursor"></div>
    
    {{-- Loader hanya muncul di landing page utama --}}
    @if(Route::currentRouteName() !== 'projects.all')
        <x-home.loader />
    @endif

    <main id="main-content" class="{{ Route::currentRouteName() === 'projects.all' ? 'opacity-100' : 'opacity-0' }}">
        <x-layout.navbar />

        @if(Route::currentRouteName() === 'projects.all')
            {{-- Tampilkan Halaman All Work --}}
            <x-projects.allwork :projects="$projects" />
        @else
            {{-- Tampilkan Landing Page Utama --}}
            <x-home.hero />
            <x-home.work :projects="$projects" />
            <x-home.about :features="$features" />
            <x-home.stack :stacks="$stacks" />
            <x-home.contact />
        @endif

        <x-layout.footer />
    </main>

    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
            // Inisialisasi ulang icon setelah loader selesai
            setTimeout(() => lucide.createIcons(), 2500);
        });
    </script>
</body>
</html>