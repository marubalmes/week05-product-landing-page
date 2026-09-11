<section id="showcase" class="relative overflow-hidden bg-zinc-950 py-24 sm:py-32">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(180,130,10,0.06)_0%,_transparent_70%)]"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-16 lg:grid-cols-2 lg:items-center">

            {{-- Left: Content --}}
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-yellow-500">The Experience</p>
                <h2 class="mt-4 font-serif text-4xl font-bold leading-tight text-white sm:text-5xl">
                    Craftsmanship in<br>every detail.
                </h2>
                <div class="gold-divider mt-6"></div>
                <p class="mt-6 text-base leading-8 text-zinc-400">
                    At Dolfo's, barbering is more than a service — it's a craft. Our team of skilled barbers brings precision, style, and a welcoming atmosphere to every visit.
                </p>

                <div class="mt-10 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-xl border border-white/8 bg-white/3 p-5 transition hover:border-yellow-600/20">
                        <p class="text-xs font-semibold uppercase tracking-widest text-yellow-500">Precision Cuts</p>
                        <p class="mt-2 text-sm leading-6 text-zinc-400">Every haircut is tailored to your face shape and personal style.</p>
                    </div>
                    <div class="rounded-xl border border-white/8 bg-white/3 p-5 transition hover:border-yellow-600/20">
                        <p class="text-xs font-semibold uppercase tracking-widest text-yellow-500">Expert Team</p>
                        <p class="mt-2 text-sm leading-6 text-zinc-400">Mike, Mel, and Unyo bring years of experience to the chair.</p>
                    </div>
                    <div class="rounded-xl border border-white/8 bg-white/3 p-5 transition hover:border-yellow-600/20">
                        <p class="text-xs font-semibold uppercase tracking-widest text-yellow-500">Clean Space</p>
                        <p class="mt-2 text-sm leading-6 text-zinc-400">A well-maintained, comfortable shop you'll want to return to.</p>
                    </div>
                    <div class="rounded-xl border border-white/8 bg-white/3 p-5 transition hover:border-yellow-600/20">
                        <p class="text-xs font-semibold uppercase tracking-widest text-yellow-500">Local Pride</p>
                        <p class="mt-2 text-sm leading-6 text-zinc-400">Proudly serving the Santa Cruz, Laguna community.</p>
                    </div>
                </div>
            </div>

            {{-- Right: Image --}}
            <div class="relative">
                <div class="absolute -inset-4 rounded-[2.5rem] bg-yellow-600/8 blur-2xl"></div>
                <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-zinc-900 p-2 shadow-2xl">
                    <img
                        src="{{ asset('images/dolfos-barbershop.png') }}"
                        alt="Dolfo's Barbershop"
                        class="h-[420px] w-full rounded-[1.6rem] object-cover"
                    >
                    <div class="grid grid-cols-3 gap-2 p-3">
                        @foreach(['Mike', 'Mel', 'Unyo'] as $barber)
                        <div class="rounded-xl border border-white/8 bg-zinc-800 p-3 text-center">
                            <p class="font-serif text-sm font-bold text-white">{{ $barber }}</p>
                            <p class="mt-0.5 text-xs text-yellow-500/70">Barber</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
