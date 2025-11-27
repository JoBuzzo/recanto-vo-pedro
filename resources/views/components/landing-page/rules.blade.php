<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-foreground mb-8">
            Regras de Uso
        </h2>
        <div class="bg-card rounded-2xl border p-8 shadow-sm">
            <div class="prose prose-sm max-w-none text-muted-foreground whitespace-pre-line">
                {{ $setting->rules }}
            </div>
        </div>
    </div>
</section>
