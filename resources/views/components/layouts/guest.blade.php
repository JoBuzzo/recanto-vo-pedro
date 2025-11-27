<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body class="antialiased">
<div class="min-h-screen bg-background">
    <header class="bg-card/80 backdrop-blur-md border-b sticky top-0 z-40">
        <div class="container mx-auto px-4 py-3">
            <a href="/" class="flex items-center gap-3">
                <div class="relative w-12 h-12 rounded-full overflow-hidden border-2 border-primary shadow-md">
                    <img
                        alt="Vô Pedro" loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                        src="{{ Vite::asset('resources/images/logo.png') }}"
                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></div>

                <div>
                    <h1 class="text-lg font-bold text-foreground">Recanto do Vô Pedro</h1>
                    <p class="text-xs text-muted-foreground">Espaço de lazer e piscina</p>
                </div>
            </a>
        </div>
    </header>

    {{ $slot }}

</div>
@fluxScripts
</body>
</html>
