<footer class="bg-zinc-950 text-zinc-300">
    <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">
        <div class="grid gap-10 md:grid-cols-4">
            <div class="md:col-span-2">
                <div class="flex items-center gap-3">
                    <span class="grid h-10 w-10 place-items-center rounded-2xl bg-amber-500 font-black text-zinc-950">D</span>
                    <span class="text-lg font-black text-white">Dolfo's Barbershop</span>
                </div>
                <p class="mt-5 max-w-md text-sm leading-6 text-zinc-400">
                    A responsive academic landing page created for ITST 302 Week 5 using Laravel, Tailwind CSS, and reusable Blade Components.
                </p>
            </div>

            <div>
                <h3 class="font-bold text-white">Quick Links</h3>
                <ul class="mt-4 space-y-3 text-sm">
                    <li><a href="#home" class="hover:text-amber-400">Home</a></li>
                    <li><a href="#features" class="hover:text-amber-400">Features</a></li>
                    <li><a href="#pricing" class="hover:text-amber-400">Pricing</a></li>
                    <li><a href="#testimonials" class="hover:text-amber-400">Testimonials</a></li>
                    <li><a href="#contact" class="hover:text-amber-400">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-white">Contact</h3>
                <p class="mt-4 text-sm leading-6 text-zinc-400">
                    A. Regidor Street<br>
                    Barangay V<br>
                    Santa Cruz, Laguna
                </p>
                <div class="mt-4 flex gap-4">
                    <a href="#" aria-label="Facebook" class="hover:text-amber-400">Facebook</a>
                    <a href="#" aria-label="Instagram" class="hover:text-amber-400">Instagram</a>
                </div>
            </div>
        </div>

        <div class="mt-12 border-t border-white/10 pt-6 text-xs text-zinc-500">
            © {{ date('Y') }} Dolfo's Barbershop. Academic project for ITST 302.
        </div>
    </div>
</footer>
