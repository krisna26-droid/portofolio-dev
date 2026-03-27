<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEV | Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,700;0,800;1,800&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="noise-overlay"></div>
    <div id="v-cursor"></div>
    <x-home.loader />

    <main id="main-content" class="opacity-0">
        <x-layout.navbar />
        <x-home.hero />
        <x-home.work :projects="$projects" />
        <x-home.about :features="$features" />
        <x-home.stack :stacks="$stacks" />
        <x-home.contact />
        <x-layout.footer />
        <div class="h-32"></div>
    </main>

    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
            setTimeout(() => lucide.createIcons(), 2500);
        });
    </script>
</body>
</html>