<section class="py-16 bg-muted/30">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-card rounded-2xl border p-6 shadow-sm">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-xl bg-primary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="lucide lucide-map-pin h-6 w-6 text-primary">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-foreground mb-1">Localização</h3>
                        <p class="text-sm text-muted-foreground">{{ $setting->address }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-card rounded-2xl border p-6 shadow-sm">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-xl bg-primary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="lucide lucide-clock h-6 w-6 text-primary">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-foreground mb-1">Horários</h3>
                        <p class="text-sm text-muted-foreground">Check-in: {{ $setting->checkin_time }}</p>
                        <p class="text-sm text-muted-foreground">Check-out: {{ $setting->checkout_time }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-card rounded-2xl border p-6 shadow-sm">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-xl bg-primary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="lucide lucide-users h-6 w-6 text-primary">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-foreground mb-1">Capacidade</h3>
                        <p class="text-sm text-muted-foreground">Até {{ $setting->max_capacity }} pessoas</p>
                    </div>
                </div>
            </div>
            <div class="bg-card rounded-2xl border p-6 shadow-sm">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-xl bg-primary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="lucide lucide-phone h-6 w-6 text-primary">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-foreground mb-1">Contato</h3>
                        <p class="text-sm text-muted-foreground">
                            @php
                                $raw = $setting->phone ?? '';
                                $digits = preg_replace('/\D+/', '', $raw);

                                $prefix = '';
                                if (str_starts_with($digits, '55')) {
                                    $prefix = '+55 ';
                                    $digits = substr($digits, 2);
                                }

                                $formatted = $raw;
                                if (strlen($digits) === 11) {
                                    $formatted = $prefix . preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $digits);
                                } elseif (strlen($digits) === 10) {
                                    $formatted = $prefix . preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $digits);
                                } elseif (strlen($digits) > 0) {
                                    $formatted = $prefix . $digits;
                                }
                            @endphp

                            {{ $formatted }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
