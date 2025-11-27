<section class="relative h-[90vh] min-h-[600px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <img alt="Recanto do Vô Pedro - Piscina" decoding="async" data-nimg="fill"
             class="object-cover"
             src="{{ Vite::asset('resources/images/piscina.png') }}"
             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">

        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
    </div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <div class="mb-6">
            <img alt="Recanto do Vô Pedro" loading="lazy" width="180" height="180" decoding="async"
                 data-nimg="1" class="rounded-full border-4 border-white/90 shadow-2xl mx-auto"
                 src="{{ Vite::asset('resources/images/logo.png') }}"
                 style="color: transparent;">
        </div>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 text-balance">
            Recanto do Vô Pedro
        </h1>
        <p class="text-xl md:text-2xl text-white/90 mb-8 text-pretty max-w-2xl mx-auto">
            {{ $setting->description }}
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#reservas"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md has-[&gt;svg]:px-4 text-lg px-8 py-6">
                Fazer Reserva
            </a>
            <a href="https://wa.me/{{ $setting->whatsapp }}" target="_blank" rel="noopener noreferrer" data-slot="button"
               class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md has-[&gt;svg]:px-4 text-lg px-8 py-6 bg-white/10 border-white/30 text-white hover:bg-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-message-circle mr-2 h-5 w-5">
                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                </svg>
                WhatsApp
            </a>
        </div>
    </div>
</section>
