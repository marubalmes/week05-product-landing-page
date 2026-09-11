<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dolfo's Barbershop in Santa Cruz, Laguna. A responsive community-business landing page built with Laravel, Tailwind CSS, and Blade Components.">
    <title>{{ $title ?? "Dolfo's Barbershop" }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50 text-zinc-900 antialiased">
    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</body>
</html>
