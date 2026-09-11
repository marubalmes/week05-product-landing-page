<section id="home" class="overflow-hidden bg-stone-50">
    <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-16 sm:py-20 lg:grid-cols-2 lg:px-8 lg:py-28">
        <div>
            <p class="inline-flex items-center rounded-full border border-amber-200 bg-amber-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-amber-700">
                Santa Cruz, Laguna
            </p>

            <h1 class="mt-6 max-w-3xl text-4xl font-black leading-tight tracking-tight text-zinc-950 sm:text-5xl lg:text-6xl">
                A fresh look starts at <span class="text-amber-600">Dolfo's.</span>
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-zinc-600">
                A modern landing page for Dolfo's Barbershop at A. Regidor Street, Barangay V, Santa Cruz, Laguna.
                Discover the shop, team, service packages, and contact information in one responsive experience.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <x-button href="#pricing" variant="primary">Get Started</x-button>
                <x-button href="#features" variant="secondary">Explore Features</x-button>
            </div>

            <div class="mt-10 grid max-w-lg grid-cols-3 gap-4 border-t border-zinc-200 pt-6">
                <div>
                    <p class="text-2xl font-black text-zinc-950">3</p>
                    <p class="mt-1 text-xs font-semibold text-zinc-500">Team members</p>
                </div>
                <div>
                    <p class="text-2xl font-black text-zinc-950">6+</p>
                    <p class="mt-1 text-xs font-semibold text-zinc-500">Key features</p>
                </div>
                <div>
                    <p class="text-2xl font-black text-zinc-950">4</p>
                    <p class="mt-1 text-xs font-semibold text-zinc-500">Responsive sizes</p>
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="absolute -inset-4 rounded-[2.5rem] bg-amber-200/50 blur-2xl"></div>
            <div class="relative overflow-hidden rounded-[2rem] border border-zinc-200 bg-zinc-950 p-3 shadow-2xl">
                <img
                    src="{{ asset('images/dolfos-barbershop.png') }}"
                    alt="Dolfo's Barbershop"
                    class="h-[420px] w-full rounded-[1.5rem] object-cover sm:h-[520px]"
                >
                <div class="absolute bottom-7 left-7 right-7 rounded-2xl border border-white/20 bg-zinc-950/85 p-5 text-white backdrop-blur">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-amber-400">Dolfo's Barbershop</p>
                    <p class="mt-1 text-sm text-zinc-200">A. Regidor Street · Santa Cruz, Laguna</p>
                </div>
            </div>
        </div>
    </div>
</section>
