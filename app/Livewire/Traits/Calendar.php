<?php

declare(strict_types=1);

namespace App\Livewire\Traits;

use Carbon\Carbon;

trait Calendar
{
    public $month;

    public $year;

    public $noOfDays = [];

    public $blankdays = [];

    public $monthNames = [
        'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro',
    ];

    public $dayNames = [
        'Dom',
        'Seg',
        'Ter',
        'Qua',
        'Qui',
        'Sex',
        'Sab',
    ];

    public function initCalendar()
    {
        $this->month = now()->month - 1;
        $this->year = now()->year;
        $this->getNoOfDays();
    }

    public function getNoOfDays()
    {
        $daysInMonth = Carbon::create($this->year, $this->month + 1)->daysInMonth;

        $firstDayOfMonth = Carbon::create($this->year, $this->month + 1, 1)->dayOfWeek;

        $this->blankdays = range(1, $firstDayOfMonth);
        $this->noOfDays = range(1, $daysInMonth);
    }

    public function isToday($day)
    {
        $today = now();

        return $today->day == $day && $today->month == $this->month + 1 && $today->year == $this->year;
    }

    public function navigateToLeft()
    {
        if ($this->month == 0) {
            $this->month = 11;
            $this->year--;
        } else {
            $this->month--;
        }
        $this->getNoOfDays();
    }

    public function navigateToRight()
    {
        if ($this->month == 11) {
            $this->month = 0;
            $this->year++;
        } else {
            $this->month++;
        }
        $this->getNoOfDays();
    }
}
