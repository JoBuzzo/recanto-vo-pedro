<?php

namespace App\Livewire\Forms;

use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ReservationForm extends Form
{
    #[Validate(['required', 'max:255', 'min:5'], as: 'nome')]
    public string $clientName = '';
    #[Validate(['required', 'max:20'], as: 'whatsapp')]
    public string $clientPhone = '';
    #[Validate(['nullable', 'max:255', 'email'])]
    public string $clientEmail = '';

    public Carbon|null $startDate = null;
    public Carbon|null $endDate = null;
    public int $totalDays = 1;
    public float $totalPrice = 0.0;
    #[Validate(['nullable', 'max:255', 'min:5'], as: 'observações')]
    public string $notes = '';
    public string $createdBy = 'client';

}
