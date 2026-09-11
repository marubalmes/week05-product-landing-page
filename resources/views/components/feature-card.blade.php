@props(['icon', 'title', 'description'])

<article class="group rounded-3xl border border-zinc-200 bg-stone-50 p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-amber-300 hover:shadow-lg">
    <div class="grid h-12 w-12 place-items-center rounded-2xl bg-zinc-950 text-xl text-amber-400 transition group-hover:scale-105">
        {{ $icon }}
    </div>
    <h3 class="mt-6 text-xl font-black text-zinc-950">{{ $title }}</h3>
    <p class="mt-3 text-sm leading-6 text-zinc-600">{{ $description }}</p>
</article>
