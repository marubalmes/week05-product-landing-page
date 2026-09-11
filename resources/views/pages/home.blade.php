<x-app-layout title="Dolfo's Barbershop | Santa Cruz, Laguna">
    <x-hero />

    <section id="features" class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-amber-600">Features</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-zinc-950 sm:text-4xl">
                    A simple, local barbershop experience
                </h2>
                <p class="mt-4 text-base leading-7 text-zinc-600">
                    The landing page highlights the shop, its service experience, team, and ways customers can connect.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <x-feature-card icon="✂" title="Classic Haircuts" description="A clean and straightforward haircut experience for everyday style." />
                <x-feature-card icon="★" title="Skilled Team" description="Meet Mike, Mel, and Unyo, the employees supplied for this project." />
                <x-feature-card icon="📍" title="Local Location" description="Located at A. Regidor Street, Barangay V, Santa Cruz, Laguna." />
                <x-feature-card icon="⚡" title="Convenient Visit" description="A focused landing page makes essential business information easy to find." />
                <x-feature-card icon="🪞" title="Shop Experience" description="Use the visual showcase to introduce customers to the barbershop environment." />
                <x-feature-card icon="☎" title="Easy Contact" description="Clear calls to action help visitors move from browsing to contacting the shop." />
            </div>
        </div>
    </section>

    <x-showcase />

    <section id="pricing" class="bg-stone-100 py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-amber-600">Pricing</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-zinc-950 sm:text-4xl">
                    Sample service packages
                </h2>
                <p class="mt-4 text-sm leading-6 text-zinc-600">
                    Demo pricing is used because the laboratory instructions require pricing cards but no actual Dolfo's price list was provided.
                    Replace these values with verified shop prices before public use.
                </p>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                <x-pricing-card
                    name="Starter"
                    price="₱150"
                    description="Sample/demo price"
                    :features="['Basic haircut', 'Standard service', 'Local shop experience']"
                />
                <x-pricing-card
                    name="Professional"
                    price="₱250"
                    description="Sample/demo price"
                    :features="['Haircut service', 'Style consultation', 'Priority service']"
                    featured
                />
                <x-pricing-card
                    name="Premium"
                    price="₱350"
                    description="Sample/demo price"
                    :features="['Premium haircut', 'Style consultation', 'Complete grooming experience']"
                />
            </div>
        </div>
    </section>

    <section id="testimonials" class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-amber-600">Testimonials</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-zinc-950 sm:text-4xl">
                    Customer feedback
                </h2>
                <p class="mt-4 text-sm leading-6 text-zinc-600">
                    These are sample testimonials for the academic prototype. Replace them with real customer feedback before publication.
                </p>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                <x-testimonial-card name="Sample Customer 01" position="Customer" review="A sample review demonstrating how customer feedback will appear on the landing page." />
                <x-testimonial-card name="Sample Customer 02" position="Customer" review="A sample review demonstrating the testimonial card and responsive layout." />
                <x-testimonial-card name="Sample Customer 03" position="Customer" review="A sample review for the academic prototype. Replace this with verified customer feedback." />
            </div>
        </div>
    </section>

    <section class="bg-zinc-950 py-20 text-white sm:py-24">
        <div class="mx-auto max-w-5xl px-6 text-center lg:px-8">
            <p class="text-sm font-bold uppercase tracking-[0.25em] text-amber-400">Call to Action</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-5xl">
                Ready for a fresh cut?
            </h2>
            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-zinc-300">
                Visit Dolfo's Barbershop in Santa Cruz, Laguna, or contact the shop to ask about current services and prices.
            </p>
            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                <x-button href="#contact" variant="primary">Contact the shop</x-button>
                <x-button href="#pricing" variant="secondary">View packages</x-button>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-amber-50 py-20 sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:px-8">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-amber-700">Contact</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-zinc-950 sm:text-4xl">Find Dolfo's Barbershop</h2>
                <p class="mt-5 leading-7 text-zinc-700">
                    A. Regidor Street, Barangay V, Santa Cruz, Laguna
                </p>
                <p class="mt-4 text-sm leading-6 text-zinc-600">
                    Employees listed for this academic project: Mike, Mel, and Unyo.
                </p>
            </div>

            <div class="rounded-3xl border border-amber-200 bg-white p-7 shadow-sm">
                <h3 class="text-xl font-black text-zinc-950">Business information</h3>
                <dl class="mt-6 space-y-5 text-sm">
                    <div>
                        <dt class="font-bold text-zinc-500">Business</dt>
                        <dd class="mt-1 text-zinc-900">Dolfo's Barbershop</dd>
                    </div>
                    <div>
                        <dt class="font-bold text-zinc-500">Address</dt>
                        <dd class="mt-1 text-zinc-900">A. Regidor Street, Barangay V, Santa Cruz, Laguna</dd>
                    </div>
                    <div>
                        <dt class="font-bold text-zinc-500">Team</dt>
                        <dd class="mt-1 text-zinc-900">Mike · Mel · Unyo</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>
</x-app-layout>
