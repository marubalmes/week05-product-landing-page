@props(['icon', 'title', 'description'])

<article class="group relative rounded-2xl border border-white/8 bg-zinc-900/60 p-7 transition duration-300 hover:border-yellow-600/30 hover:bg-zinc-900">
    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-yellow-600/5 to-transparent opacity-0 transition duration-300 group-hover:opacity-100"></div>

    <div class="relative flex h-12 w-12 items-center justify-center rounded-xl border border-yellow-600/20 bg-yellow-600/10 text-xl text-yellow-500 transition duration-300 group-hover:border-yellow-500/40 group-hover:bg-yellow-600/15">
        {{ $icon }}
    </div>

    <h3 class="relative mt-6 font-serif text-lg font-bold text-white">{{ $title }}</h3>
    <div class="mt-3 h-px w-8 bg-yellow-600/40 transition duration-300 group-hover:w-12 group-hover:bg-yellow-500/60"></div>
    <p class="relative mt-4 text-sm leading-7 text-zinc-400">{{ $description }}</p>
</article>
