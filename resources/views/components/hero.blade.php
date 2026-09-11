<section id="home" class="relative min-h-screen overflow-hidden bg-black">

    {{-- Background texture --}}
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_rgba(180,130,10,0.12)_0%,_transparent_60%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(180,130,10,0.07)_0%,_transparent_60%)]"></div>

    {{-- Subtle grid pattern --}}
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.5) 1px, transparent 1px); background-size: 60px 60px;"></div>

    <div class="relative mx-auto grid max-w-7xl items-center gap-16 px-6 py-24 sm:py-28 lg:grid-cols-2 lg:px-8 lg:py-32">

        {{-- Left: Text Content --}}
        <div>
            <div class="inline-flex items-center gap-2 rounded-full border border-yellow-600/30 bg-yellow-600/5 px-4 py-2">
                <span class="h-1.5 w-1.5 rounded-full bg-yellow-500"></span>
                <span class="text-xs font-medium uppercase tracking-[0.2em] text-yellow-500">Santa Cruz, Laguna</span>
            </div>

            <h1 class="mt-8 font-serif text-5xl font-black leading-[1.1] tracking-tight text-white sm:text-6xl lg:text-7xl">
                The Art of<br>
                <span class="gold-shimmer">The Perfect</span><br>
                Cut.
            </h1>

            <div class="gold-divider mt-8"></div>

            <p class="mt-8 max-w-lg text-base leading-8 text-zinc-400">
                Experience precision barbering at Dolfo's — where every cut is crafted with skill, care, and an eye for detail. Located at A. Regidor Street, Santa Cruz, Laguna.
            </p>

            <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                <x-button href="#pricing" variant="primary">Book an Appointment</x-button>
                <x-button href="#services" variant="outline">Our Services</x-button>
            </div>

            <div class="mt-14 grid max-w-sm grid-cols-3 gap-6 border-t border-white/10 pt-8">
                <div>
                    <p class="font-serif text-3xl font-bold text-white">3+</p>
                    <p class="mt-1 text-xs uppercase tracking-widest text-zinc-500">Expert Barbers</p>
                </div>
                <div>
                    <p class="font-serif text-3xl font-bold text-white">500+</p>
                    <p class="mt-1 text-xs uppercase tracking-widest text-zinc-500">Happy Clients</p>
                </div>
                <div>
                    <p class="font-serif text-3xl font-bold text-white">5★</p>
                    <p class="mt-1 text-xs uppercase tracking-widest text-zinc-500">Rated Service</p>
                </div>
            </div>
        </div>

        {{-- Right: Image --}}
        <div class="relative">
            {{-- Glow --}}
            <div class="absolute -inset-6 rounded-[3rem] bg-yellow-600/10 blur-3xl"></div>

            {{-- Frame --}}
            <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-zinc-900 p-2 shadow-2xl shadow-black/60">
                <img
                    src="{{ asset('images/dolfos-barbershop.png') }}"
                    alt="Dolfo's Barbershop"
                    class="h-[480px] w-full rounded-[1.6rem] object-cover sm:h-[560px]"
                >

                {{-- Overlay badge --}}
                <div class="absolute bottom-6 left-6 right-6 rounded-2xl border border-yellow-600/20 bg-black/80 p-5 backdrop-blur-md">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-yellow-500">Now Open</p>
                            <p class="mt-1 font-serif text-base font-bold text-white">Dolfo's Barbershop</p>
                            <p class="mt-0.5 text-xs text-zinc-400">A. Regidor St · Santa Cruz, Laguna</p>
                        </div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-yellow-600/40 bg-yellow-600/10">
                            <span class="text-yellow-500 text-xl">✂</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
