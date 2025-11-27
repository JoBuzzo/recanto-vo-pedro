@php
    use Carbon\Carbon;

@endphp


<div class="grid grid-cols-7 gap-1">
    {{-- Dias vazios (não pertencem ao mês) --}}
    @foreach ($this->blankdays as $blankday)
        <div class="h-10 md:h-12">

        </div>
    @endforeach

    {{-- Dias do mês --}}
    @foreach ($this->noOfDays as $date)

        @php
            $currentDate = Carbon::createFromDate($this->year, $this->month + 1, $date);
            $isPast = $currentDate->isBefore(Carbon::today());
        @endphp
        <button
            @class([
                "h-10 md:h-12 rounded-lg text-sm font-medium transition-all focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 hover:bg-primary/10 text-foreground" => ! $isPast,
                "h-10 md:h-12 rounded-lg text-sm font-medium transition-all focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 text-muted-foreground/40 cursor-not-allowed" => $isPast,
            ])

            @disabled($isPast)
        >
            {{ $date }}
        </button>
    @endforeach
</div>

<div class="mt-4 flex flex-wrap gap-4 text-xs text-muted-foreground">
    <div class="flex items-center gap-2">
        <div class="w-4 h-4 rounded bg-primary"></div>
        <span>Selecionado</span>
    </div>
    <div class="flex items-center gap-2">
        <div class="w-4 h-4 rounded bg-red-100 border border-red-200"></div>
        <span>Reservado</span>
    </div>
    <div class="flex items-center gap-2">
        <div class="w-4 h-4 rounded bg-muted"></div>
        <span>Disponível</span>
    </div>
</div>

