<section id="reservas" class="py-16 bg-muted/30 scroll-mt-20">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-3 gap-8  mx-auto">
            <div class="lg:col-span-2 space-y-6">
                <div>
                    <h2 class="text-3xl font-bold text-foreground mb-2">Faça sua Reserva</h2>
                    <p class="text-muted-foreground">
                        Selecione uma data disponível no calendário. Para reservar mais
                        de um dia, clique na data inicial e depois na data final.
                    </p>
                </div>

                <x-calendar.default/>
            </div>

            <div class="space-y-6">
                <div class="bg-card rounded-2xl border p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-foreground mb-4">
                        Valores
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span
                                class="text-muted-foreground">
                                Diária
                            </span>
                            <span
                                class="text-2xl font-bold text-primary">
                                R$ {{ $setting->daily_price }}
                            </span>
                        </div>
                        <div class="pt-3 border-t">
                            <p class="text-sm text-muted-foreground">
                                Para reservas de 2+ dias, desconto de <span class="font-medium text-primary">R$ {{ $setting->multi_day_discount }}</span> por dia adicional
                            </p>
                        </div>
                        <div class="pt-3 border-t space-y-1 text-sm text-muted-foreground">
                            <p>
                                <span class="font-medium">2 dias:</span> R$ {{ number_format($setting->daily_price * 2 - $setting->multi_day_discount, 2, ',', '.') }}
                            </p>
                            <p>
                                <span class="font-medium">3 dias:</span> R$ {{ number_format($setting->daily_price * 3 - $setting->multi_day_discount, 2, ',', '.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-amber-50 border border-amber-200 rounded-2xl p-5 space-y-4">
                    <div class="flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round"
                             class="lucide lucide-circle-alert h-5 w-5 text-amber-600 flex-shrink-0 mt-0.5">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" x2="12" y1="8" y2="12"></line>
                            <line x1="12" x2="12.01" y1="16" y2="16"></line>
                        </svg>
                        <div class="text-sm text-amber-800">
                            <p class="font-semibold mb-2">
                                Como confirmar sua reserva
                            </p>
                            <p class="mb-3">
                                Para confirmar sua reserva, é necessário pagar <strong>50% do valor</strong> antecipadamente.
                                A reserva <strong>só será considerada garantida</strong> após recebermos esse pagamento.
                            </p>
                            <p class="font-medium text-amber-900">
                                Antes de realizar o pagamento, <strong>entre em contato pelo WhatsApp</strong> para receber as informações de PIX
                                ou combinar a forma de pagamento.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-3 pl-8">
                        <div class="flex items-start gap-3 text-sm text-amber-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-credit-card h-4 w-4 mt-0.5 flex-shrink-0">
                                <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                <line x1="2" x2="22" y1="10" y2="10"></line>
                            </svg>
                            <div>
                                <p class="font-medium">Via PIX</p>
                                <p class="text-amber-700">O pagamento deve ser combinado pelo WhatsApp e o comprovante enviado por lá.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 text-sm text-amber-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-banknote h-4 w-4 mt-0.5 flex-shrink-0">
                                <rect width="20" height="12" x="2" y="6" rx="2"></rect>
                                <circle cx="12" cy="12" r="2"></circle>
                                <path d="M6 12h.01M18 12h.01"></path>
                            </svg>
                            <div>
                                <p class="font-medium">Em dinheiro</p>
                                <p class="text-amber-700">Pagamento presencial — combine o endereço pelo WhatsApp.</p>
                            </div>
                        </div>
                    </div>

                    <p class="text-xs text-amber-600 pl-8">O restante (50%) deve ser pago no check-in.</p>
                </div>


                <a href="https://wa.me/{{ $setting->whatsapp }}" target="_blank" rel="noopener noreferrer"
                   class="flex items-center justify-center gap-2 w-full p-4 bg-green-600 hover:bg-green-700 text-white rounded-2xl font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-message-circle h-5 w-5">
                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                    </svg>
                    Dúvidas? Fale conosco
                </a>
            </div>
        </div>
    </div>
</section>
