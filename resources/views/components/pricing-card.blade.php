@props([
    'name',
    'price',
    'description' => '',
    'features' => [],
    'featured' => false,
])

<article class="relative flex flex-col rounded-2xl border p-8 transition duration-300 hover:-translate-y-1
    {{ $featured
        ? 'border-yellow-600/50 bg-gradient-to-b from-yellow-600/10 to-zinc-900 shadow-xl shadow-yellow-600/10'
        : 'border-white/8 bg-zinc-900 hover:border-yellow-600/20' }}">

    @if($featured)
        <div class="absolute -top-3 left-1/2 -translate-x-1/2">
            <span class="rounded-full border border-yellow-600/40 bg-yellow-600 px-4 py-1 text-xs font-bold uppercase tracking-widest text-black">
                Most Popular
            </span>
        </div>
    @endif

    <p class="text-xs font-semibold uppercase tracking-[0.2em] {{ $featured ? 'text-yellow-400' : 'text-zinc-500' }}">{{ $name }}</p>

    <div class="mt-5 flex items-end gap-2">
        <span class="font-serif text-5xl font-bold {{ $featured ? 'text-white' : 'text-zinc-200' }}">{{ $price }}</span>
        <span class="mb-1.5 text-sm text-zinc-500">/ visit</span>
    </div>

    <div class="mt-2 h-px {{ $featured ? 'bg-yellow-600/30' : 'bg-white/8' }}"></div>

    <p class="mt-4 text-sm text-zinc-400">{{ $description }}</p>

    <ul class="mt-7 flex-1 space-y-3">
        @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm text-zinc-300">
                <span class="mt-0.5 text-yellow-500">✦</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <div class="mt-8">
        <x-button href="#contact" variant="{{ $featured ? 'primary' : 'secondary' }}" class="w-full">
            Book This Package
        </x-button>
    </div>
</article>
