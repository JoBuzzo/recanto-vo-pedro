<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class LandingPage extends Component
{
    public function render()
    {
        return view('livewire.landing-page');
    }

    public Setting $setting;

    public function mount()
    {
        $this->setting = Setting::first();
    }
}
