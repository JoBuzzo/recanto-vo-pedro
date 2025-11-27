<?php

namespace App\Livewire;

use App\Livewire\Forms\ReservationForm;
use App\Models\Reservation;
use App\Models\Setting;
use Carbon\Carbon;
use Flux\Flux;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use App\Livewire\Traits\Calendar;

class MakeReservation extends Component
{
    use Calendar;
    public ReservationForm $form;
    public function render()
    {
        return view('livewire.make-reservation');
    }

    public Setting $setting;
    public bool $canIncrement = true;
    public Collection $reservations;
    public function mount(Setting $setting)
    {
        $this->initCalendar();

        $this->setting = $setting;
        $this->setReservations();
    }

    public function create()
    {
        $this->validate();

        $start = $this->form->startDate->copy()->startOfDay();
        $end   = $this->form->endDate->copy()->endOfDay();

        $hasConflict = Reservation::where(function ($q) use ($start, $end) {
            $q->whereDate('start_date', '<=', $end)
                ->whereDate('end_date', '>=', $start);
        })->exists();

        if ($hasConflict) {
            $this->addError('startDate', 'As datas selecionadas já estão reservadas.');
            return;
        }

        $this->form->totalPrice = $this->setting->daily_price * $this->form->totalDays - ($this->form->totalDays > 1 ? $this->setting->multi_day_discount : 0);

        Reservation::create([
            'client_name' => $this->form->clientName,
            'client_phone' => $this->form->clientPhone,
            'client_email' => $this->form->clientEmail,
            'start_date' => $this->form->startDate->format('Y-m-d'),
            'end_date' => $this->form->endDate->format('Y-m-d'),
            'total_days' => $this->form->totalDays,
            'total_price' => $this->form->totalPrice,
            'notes' => $this->form->notes,
            'created_by' => $this->form->createdBy,
        ]);

        $this->setReservations();
        $this->form->reset(['startDate', 'endDate', 'totalDays', 'totalPrice', 'notes', 'startDate', 'endDate']);

        Flux::modal('make-reservation')->close();
    }

    public function updateCanIncrement()
    {
        $nextTotal = $this->form->totalDays + 1;
        $nextEnd = $this->form->startDate->copy()->addDays($nextTotal - 1);

        $this->canIncrement = ! $this->hasConflict($this->form->startDate, $nextEnd);
    }
    public function setDate(string $year, string $month, string $day): void
    {
        $this->form->startDate = Carbon::createFromDate($this->year, $this->month + 1, $day);
        $this->form->endDate = $this->form->startDate->copy();

        $this->updateCanIncrement();
    }

    public function increment()
    {
        $newTotal = $this->form->totalDays + 1;
        $newEndDate = $this->form->startDate->copy()->addDays($newTotal - 1);

        if ($this->hasConflict($this->form->startDate, $newEndDate)) {
            $this->canIncrement = false;
            $this->dispatch('date-blocked', message: 'A próxima data já está reservada.');
            return;
        }

        $this->form->totalDays = $newTotal;
        $this->form->endDate = $newEndDate;

        $this->updateCanIncrement();
    }


    public function decrement()
    {
        if($this->form->totalDays > 1){
            $this->form->totalDays--;

            $this->form->endDate = $this->form->startDate->copy()->addDays($this->form->totalDays - 1);

            $this->updateCanIncrement();
        }
    }
    private function hasConflict(Carbon $start, Carbon $end): bool
    {
        return Reservation::where(function ($q) use ($start, $end) {
            $q->where('start_date', '<=', $end)
                ->where('end_date', '>=', $start);
        })->exists();
    }

    public function dayIsReserved(Carbon $day): bool
    {
        $dayStart = $day->copy()->startOfDay();
        $dayEnd   = $day->copy()->endOfDay();

        foreach ($this->reservations as $res) {
            $start = Carbon::parse($res->start_date)->startOfDay();
            $end   = Carbon::parse($res->end_date)->endOfDay();

            if ($dayStart->between($start, $end) || $dayEnd->between($start, $end)) {
                return true;
            }
        }

        return false;
    }

    public function setReservations(): void
    {
        $this->reservations = Reservation::whereDate('start_date', '>=', now())->get();
    }
}
