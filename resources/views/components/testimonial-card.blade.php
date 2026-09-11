@props(['name', 'position', 'review'])

<article class="rounded-2xl border border-white/8 bg-zinc-900 p-7 transition duration-300 hover:border-yellow-600/20">
    <div class="flex gap-0.5 text-yellow-500 text-sm" aria-label="5 out of 5 stars">
        ★ ★ ★ ★ ★
    </div>

    <blockquote class="mt-5 font-serif text-base leading-8 text-zinc-200 italic">
        "{{ $review }}"
    </blockquote>

    <div class="mt-6 flex items-center gap-4 border-t border-white/8 pt-5">
        <div class="flex h-10 w-10 items-center justify-center rounded-full border border-yellow-600/30 bg-yellow-600/10 font-serif font-bold text-yellow-500">
            {{ strtoupper(substr($name, 0, 1)) }}
        </div>
        <div>
            <p class="text-sm font-semibold text-white">{{ $name }}</p>
            <p class="text-xs text-zinc-500">{{ $position }}</p>
        </div>
    </div>
</article>
