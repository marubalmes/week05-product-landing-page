@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $base = 'inline-flex items-center justify-center rounded-full px-6 py-3 text-xs font-semibold uppercase tracking-[0.12em] transition duration-300 focus:outline-none focus:ring-2 focus:ring-yellow-500/50 focus:ring-offset-2 focus:ring-offset-black';
    $variants = [
        'primary'  => 'bg-yellow-600 text-black hover:bg-yellow-500 shadow-lg shadow-yellow-600/20',
        'outline'  => 'border border-white/20 text-white hover:border-yellow-500/60 hover:text-yellow-400 hover:bg-white/5',
        'ghost'    => 'text-zinc-400 hover:text-white hover:bg-white/5',
        'secondary'=> 'border border-zinc-700 bg-zinc-900 text-zinc-200 hover:border-yellow-600/50 hover:text-yellow-400',
    ];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $base . ' ' . ($variants[$variant] ?? $variants['primary'])]) }}>
    {{ $slot }}
</a>
