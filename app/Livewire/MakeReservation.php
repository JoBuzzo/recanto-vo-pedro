<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;
use App\Livewire\Traits\Calendar;

class MakeReservation extends Component
{
    use Calendar;
    public function render()
    {
        return view('livewire.make-reservation');
    }

    public Setting $setting;
    public function mount(Setting $setting)
    {
        $this->initCalendar();

        $this->setting = $setting;
    }
}
