<section class="py-16 bg-muted/30">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-foreground mb-12">
            O que oferecemos
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            @if(in_array('Piscina', $setting->amenities))
                <div
                    class="flex flex-col items-center p-6 bg-card rounded-2xl border shadow-sm hover:shadow-md transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-waves h-10 w-10 text-primary mb-3">
                        <path
                            d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"></path>
                        <path
                            d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"></path>
                        <path
                            d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"></path>
                    </svg>
                    <span class="text-sm font-medium text-foreground text-center">
                        Piscina
                    </span>
                </div>
            @endif

            @if(in_array('Churrasqueira', $setting->amenities))
                <div
                    class="flex flex-col items-center p-6 bg-card rounded-2xl border shadow-sm hover:shadow-md transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-utensils-crossed h-10 w-10 text-primary mb-3">
                        <path d="m16 2-2.3 2.3a3 3 0 0 0 0 4.2l1.8 1.8a3 3 0 0 0 4.2 0L22 8"></path>
                        <path d="M15 15 3.3 3.3a4.2 4.2 0 0 0 0 6l7.3 7.3c.7.7 2 .7 2.8 0L15 15Zm0 0 7 7"></path>
                        <path d="m2.1 21.8 6.4-6.3"></path>
                        <path d="m19 5-7 7"></path>
                    </svg>
                    <span class="text-sm font-medium text-foreground text-center">
                        Churrasqueira
                    </span>
                </div>
            @endif

            @if(in_array('Área Verde', $setting->amenities))
                <div
                    class="flex flex-col items-center p-6 bg-card rounded-2xl border shadow-sm hover:shadow-md transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-tree-pine h-10 w-10 text-primary mb-3">
                        <path
                            d="m17 14 3 3.3a1 1 0 0 1-.7 1.7H4.7a1 1 0 0 1-.7-1.7L7 14h-.3a1 1 0 0 1-.7-1.7L9 9h-.2A1 1 0 0 1 8 7.3L12 3l4 4.3a1 1 0 0 1-.8 1.7H15l3 3.3a1 1 0 0 1-.7 1.7H17Z"></path>
                        <path d="M12 22v-3"></path>
                    </svg>
                    <span class="text-sm font-medium text-foreground text-center">
                        Área Verde
                    </span>
                </div>
            @endif
            @if(in_array('Quartos', $setting->amenities))
                <div
                    class="flex flex-col items-center p-6 bg-card rounded-2xl border shadow-sm hover:shadow-md transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-bed h-10 w-10 text-primary mb-3">
                        <path d="M2 4v16"></path>
                        <path d="M2 8h18a2 2 0 0 1 2 2v10"></path>
                        <path d="M2 17h20"></path>
                        <path d="M6 8v9"></path>
                    </svg>
                    <span class="text-sm font-medium text-foreground text-center">
                    Quartos
                </span>
                </div>
            @endif
            @if(in_array('Quarto', $setting->amenities))
                <div
                    class="flex flex-col items-center p-6 bg-card rounded-2xl border shadow-sm hover:shadow-md transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-bed h-10 w-10 text-primary mb-3">
                        <path d="M2 4v16"></path>
                        <path d="M2 8h18a2 2 0 0 1 2 2v10"></path>
                        <path d="M2 17h20"></path>
                        <path d="M6 8v9"></path>
                    </svg>
                    <span class="text-sm font-medium text-foreground text-center">
                    Quarto
                </span>
                </div>
            @endif
            @if(in_array('Área coberta', $setting->amenities))
                <div
                    class="flex flex-col items-center p-6 bg-card rounded-2xl border shadow-sm hover:shadow-md transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-house-icon lucide-house h-10 w-10 text-primary mb-3">
                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/>
                        <path
                            d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    </svg>
                    <span class="text-sm font-medium text-foreground text-center">
                    Área coberta
                </span>
                </div>
            @endif
            @if(in_array('Estacionamento', $setting->amenities))
                <div
                    class="flex flex-col items-center p-6 bg-card rounded-2xl border shadow-sm hover:shadow-md transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-car h-10 w-10 text-primary mb-3">
                        <path
                            d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"></path>
                        <circle cx="7" cy="17" r="2"></circle>
                        <path d="M9 17h6"></path>
                        <circle cx="17" cy="17" r="2"></circle>
                    </svg>
                    <span class="text-sm font-medium text-foreground text-center">
                        Estacionamento
                    </span>
                </div>
            @endif
            <div
                class="flex flex-col items-center p-6 bg-card rounded-2xl border shadow-sm hover:shadow-md transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-users h-10 w-10 text-primary mb-3">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span class="text-sm font-medium text-foreground text-center">
                    Até {{ $setting->max_capacity }} pessoas
                </span>
            </div>
        </div>
    </div>
</section>
