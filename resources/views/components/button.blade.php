@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $base = 'inline-flex items-center justify-center rounded-full px-5 py-3 text-sm font-bold transition duration-200 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2';
    $variants = [
        'primary' => 'bg-amber-500 text-zinc-950 hover:bg-amber-400',
        'secondary' => 'border border-zinc-300 bg-white text-zinc-900 hover:border-zinc-950 hover:bg-zinc-50',
        'ghost' => 'text-zinc-700 hover:bg-zinc-100',
    ];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $base . ' ' . ($variants[$variant] ?? $variants['primary'])]) }}>
    {{ $slot }}
</a>
