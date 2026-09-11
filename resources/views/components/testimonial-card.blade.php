@props(['name', 'position', 'review'])

<article class="rounded-3xl border border-zinc-200 bg-stone-50 p-7 shadow-sm">
    <div class="flex items-center gap-4">
        <div class="grid h-12 w-12 place-items-center rounded-full bg-zinc-950 font-black text-amber-400">
            {{ strtoupper(substr($name, -1)) }}
        </div>
        <div>
            <p class="font-black text-zinc-950">{{ $name }}</p>
            <p class="text-sm text-zinc-500">{{ $position }}</p>
        </div>
    </div>

    <div class="mt-6 flex gap-1 text-amber-500" aria-label="5 out of 5 stars">
        ★ ★ ★ ★ ★
    </div>

    <blockquote class="mt-4 text-sm leading-7 text-zinc-600">
        “{{ $review }}”
    </blockquote>
</article>
