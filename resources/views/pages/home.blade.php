@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <x-hero />

    {{-- Features Section --}}
    <section id="features" class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-semibold uppercase tracking-widest text-orange-600">
                    Why Choose Dolfo's
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Everything you need for a fresh look
                </h2>

                <p class="mt-4 text-lg leading-8 text-gray-600">
                    Experience quality barbering services from a local team
                    committed to making every visit comfortable and worthwhile.
                </p>
            </div>

            <div class="mx-auto mt-12 grid max-w-7xl grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <x-feature-card
                    icon="✂️"
                    title="Classic Haircuts"
                    description="Get a clean and polished haircut suited to your preferred style."
                />

                <x-feature-card
                    icon="💈"
                    title="Skilled Team"
                    description="Mike, Mel, and Unyo are ready to provide a quality barbering experience."
                />

                <x-feature-card
                    icon="📍"
                    title="Local Location"
                    description="Conveniently located in Santa Cruz, Laguna for the local community."
                />

                <x-feature-card
                    icon="🕐"
                    title="Convenient Visit"
                    description="Enjoy a straightforward barber shop experience without unnecessary complications."
                />

                <x-feature-card
                    icon="⭐"
                    title="Shop Experience"
                    description="A welcoming local barber shop focused on a clean and comfortable experience."
                />

                <x-feature-card
                    icon="📞"
                    title="Easy Contact"
                    description="Get in touch with the shop for questions, services, and other inquiries."
                />

            </div>
        </div>
    </section>


    {{-- Product Showcase Section --}}
    <x-showcase />


    {{-- Pricing Section --}}
    <section id="pricing" class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-semibold uppercase tracking-widest text-orange-600">
                    Sample Packages
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Choose your barbering package
                </h2>

                <p class="mt-4 text-lg text-gray-600">
                    These prices are sample/demo packages for the school project.
                    Please confirm actual prices with Dolfo's Barbershop.
                </p>
            </div>

            <div class="mx-auto mt-12 grid max-w-6xl grid-cols-1 gap-8 md:grid-cols-3">

                <x-pricing-card
                    name="Starter"
                    price="₱150"
                    description="A simple haircut package."
                    :features="[
                        'Basic haircut',
                        'Professional service',
                        'Local barber shop experience'
                    ]"
                />

                <x-pricing-card
                    name="Professional"
                    price="₱250"
                    description="A more complete grooming experience."
                    :features="[
                        'Haircut',
                        'Styling',
                        'Professional barber service',
                        'Comfortable shop experience'
                    ]"
                    featured="true"
                />

                <x-pricing-card
                    name="Premium"
                    price="₱350"
                    description="A complete premium-style package."
                    :features="[
                        'Premium haircut',
                        'Styling',
                        'Grooming service',
                        'Professional barber service'
                    ]"
                />

            </div>
        </div>
    </section>


    {{-- Testimonials Section --}}
    <section id="testimonials" class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-semibold uppercase tracking-widest text-orange-600">
                    Testimonials
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    What customers might say
                </h2>

                <p class="mt-4 text-lg text-gray-600">
                    The following testimonials are sample content created for
                    this academic project.
                </p>
            </div>

            <div class="mx-auto mt-12 grid max-w-6xl grid-cols-1 gap-8 md:grid-cols-3">

                <x-testimonial-card
                    name="Sample Customer 01"
                    position="Customer"
                    review="The service was friendly and the haircut gave me a clean and fresh look."
                />

                <x-testimonial-card
                    name="Sample Customer 02"
                    position="Customer"
                    review="A convenient local barber shop with a welcoming atmosphere."
                />

                <x-testimonial-card
                    name="Sample Customer 03"
                    position="Customer"
                    review="The barbers were professional and made the visit comfortable."
                />

            </div>
        </div>
    </section>


    {{-- Call To Action --}}
    <section id="contact" class="bg-orange-600 py-20">
        <div class="mx-auto max-w-4xl px-6 text-center lg:px-8">

            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Ready for a fresh look?
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-orange-50">
                Visit Dolfo's Barbershop in Santa Cruz, Laguna and experience
                a local barbering service from Mike, Mel, and Unyo.
            </p>

            <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">

                <x-button
                    href="#pricing"
                    variant="secondary"
                >
                    View Packages
                </x-button>

                <x-button
                    href="#contact"
                    variant="outline"
                >
                    Contact Shop
                </x-button>

            </div>
        </div>
    </section>

@endsection