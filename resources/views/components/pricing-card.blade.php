@props([
    'name',
    'price',
    'description' => '',
    'features' => [],
    'featured' => false,
])

<article class="{{ $featured ? 'border-amber-400 ring-2 ring-amber-200' : 'border-zinc-200' }} relative rounded-3xl bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
    @if($featured)
        <span class="absolute right-6 top-6 rounded-full bg-amber-100 px-3 py-1 text-xs font-bold text-amber-800">Popular</span>
    @endif

    <p class="text-sm font-bold uppercase tracking-[0.2em] text-zinc-500">{{ $name }}</p>
    <div class="mt-5 flex items-end gap-2">
        <span class="text-4xl font-black text-zinc-950">{{ $price }}</span>
        <span class="pb-1 text-sm text-zinc-500">/ visit</span>
    </div>
    <p class="mt-2 text-sm text-zinc-500">{{ $description }}</p>

    <ul class="mt-7 space-y-3">
        @foreach($features as $feature)
            <li class="flex gap-3 text-sm text-zinc-700">
                <span class="mt-0.5 text-amber-600">✓</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <div class="mt-8">
        <x-button href="#contact" variant="{{ $featured ? 'primary' : 'secondary' }}" class="w-full">
            Subscribe / Inquire
        </x-button>
    </div>
</article>
