<div class="flex items-center justify-between mb-6">
    <button type="button"
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-9"
            wire:click="navigateToLeft()">
        <svg class="inline-flex w-6 h-6 leading-none text-gray-500" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>
    <h3 class="text-lg font-semibold text-foreground">
        {{ $this->monthNames[$this->month] }} {{ $this->year }}
    </h3>
    <button type="button"
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-9"
            wire:click="navigateToRight()">
        <svg class="inline-flex w-6 h-6 leading-none text-gray-500" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>
</div>

<div class="grid grid-cols-7 gap-1 mb-2">
    {{-- Dias da semana --}}
    @foreach ($this->dayNames as $dayname)
        <div class="px-2 py-2">
            <div class="text-sm font-bold tracking-wide text-center text-gray-600">
                {{ $dayname }}
            </div>
        </div>
    @endforeach
</div>
