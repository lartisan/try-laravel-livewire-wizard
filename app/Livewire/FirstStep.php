<?php

namespace App\Livewire;

use Spatie\LivewireWizard\Components\StepComponent;

class FirstStep extends StepComponent
{
    public array $offer = [];

    public function render()
    {
        return view('livewire.first-step');
    }
}
