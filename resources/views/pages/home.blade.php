@extends('layouts.app')

@section('content')

    {{-- Hero --}}
    <x-hero />


    {{-- Services Section --}}
    <section id="services" class="relative bg-black py-24 sm:py-32">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_rgba(180,130,10,0.05)_0%,_transparent_60%)]"></div>

        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-yellow-500">Our Services</p>
                <h2 class="mt-4 font-serif text-4xl font-bold text-white sm:text-5xl">
                    Crafted for the<br>modern gentleman.
                </h2>
                <div class="gold-divider mx-auto mt-6"></div>
                <p class="mt-6 text-base leading-8 text-zinc-400">
                    Every service at Dolfo's is delivered with precision, care, and a commitment to making you look and feel your best.
                </p>
            </div>

            <div class="mx-auto mt-16 grid max-w-7xl grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                <x-feature-card
                    icon="✂"
                    title="Classic Haircut"
                    description="A clean, precise cut tailored to your style — from fades to classic taper cuts."
                />

                <x-feature-card
                    icon="💈"
                    title="Expert Barbers"
                    description="Mike, Mel, and Unyo bring skill and passion to every chair, every time."
                />

                <x-feature-card
                    icon="📍"
                    title="Prime Location"
                    description="Conveniently located at A. Regidor Street, Barangay V, Santa Cruz, Laguna."
                />

                <x-feature-card
                    icon="🕐"
                    title="Flexible Hours"
                    description="Open Monday through Saturday so you can book a visit that fits your schedule."
                />

                <x-feature-card
                    icon="⭐"
                    title="Premium Experience"
                    description="A clean, welcoming shop atmosphere designed for comfort and quality."
                />

                <x-feature-card
                    icon="📞"
                    title="Easy Booking"
                    description="Reach out to the shop directly for appointments, inquiries, and service details."
                />

            </div>
        </div>
    </section>


    {{-- Showcase --}}
    <x-showcase />


    {{-- Pricing Section --}}
    <section id="pricing" class="relative bg-black py-24 sm:py-32">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom,_rgba(180,130,10,0.05)_0%,_transparent_60%)]"></div>

        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-yellow-500">Pricing</p>
                <h2 class="mt-4 font-serif text-4xl font-bold text-white sm:text-5xl">
                    Choose your package.
                </h2>
                <div class="gold-divider mx-auto mt-6"></div>
                <p class="mt-6 text-sm text-zinc-500">
                    Sample packages for demonstration purposes. Please confirm current pricing directly with Dolfo's Barbershop.
                </p>
            </div>

            <div class="mx-auto mt-16 grid max-w-5xl grid-cols-1 gap-6 md:grid-cols-3">

                <x-pricing-card
                    name="Classic"
                    price="₱150"
                    description="The essentials, done right."
                    :features="[
                        'Classic haircut',
                        'Professional finish',
                        'Welcoming shop experience',
                    ]"
                />

                <x-pricing-card
                    name="Signature"
                    price="₱250"
                    description="Our most popular grooming package."
                    :features="[
                        'Precision haircut',
                        'Style & finish',
                        'Expert barber service',
                        'Comfortable shop experience',
                    ]"
                    featured="true"
                />

                <x-pricing-card
                    name="Premium"
                    price="₱350"
                    description="The full Dolfo's experience."
                    :features="[
                        'Premium haircut',
                        'Styling & grooming',
                        'Hot towel treatment',
                        'Full barber service',
                    ]"
                />

            </div>
        </div>
    </section>


    {{-- Testimonials --}}
    <section id="testimonials" class="relative bg-zinc-950 py-24 sm:py-32">
        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-yellow-500">Client Reviews</p>
                <h2 class="mt-4 font-serif text-4xl font-bold text-white sm:text-5xl">
                    What our clients say.
                </h2>
                <div class="gold-divider mx-auto mt-6"></div>
                <p class="mt-6 text-sm text-zinc-500">
                    Sample testimonials created for this academic project.
                </p>
            </div>

            <div class="mx-auto mt-16 grid max-w-5xl grid-cols-1 gap-6 md:grid-cols-3">

                <x-testimonial-card
                    name="Juan dela Cruz"
                    position="Regular Client"
                    review="Best barbershop in Santa Cruz. The fade is always clean and the atmosphere is top-notch."
                />

                <x-testimonial-card
                    name="Marco Reyes"
                    position="Regular Client"
                    review="Mike always knows exactly what I want. Consistent quality every single visit."
                />

                <x-testimonial-card
                    name="Carlo Santos"
                    position="Regular Client"
                    review="Dolfo's is the only place I trust for a proper cut. Professional, clean, and friendly."
                />

            </div>
        </div>
    </section>


    {{-- CTA Section --}}
    <section id="contact" class="relative overflow-hidden bg-black py-24 sm:py-32">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(180,130,10,0.1)_0%,_transparent_65%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_rgba(180,130,10,0.06)_0%,_transparent_50%)]"></div>

        <div class="relative mx-auto max-w-3xl px-6 text-center lg:px-8">
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-yellow-500">Ready?</p>
            <h2 class="mt-4 font-serif text-4xl font-bold text-white sm:text-5xl lg:text-6xl">
                Your best look<br>starts here.
            </h2>
            <div class="gold-divider mx-auto mt-6"></div>
            <p class="mx-auto mt-6 max-w-xl text-base leading-8 text-zinc-400">
                Visit Dolfo's Barbershop at A. Regidor Street, Santa Cruz, Laguna and let Mike, Mel, or Unyo take care of the rest.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <x-button href="#pricing" variant="primary">View Packages</x-button>
                <x-button href="tel:+63" variant="outline">Call the Shop</x-button>
            </div>

            <p class="mt-8 text-xs text-zinc-600">A. Regidor Street · Barangay V · Santa Cruz, Laguna</p>
        </div>
    </section>

@endsection
