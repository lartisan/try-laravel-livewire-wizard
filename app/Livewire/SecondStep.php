<?php

namespace App\Livewire;

use Spatie\LivewireWizard\Components\StepComponent;

class SecondStep extends StepComponent
{
    public array $offer = [];

    public function render()
    {
        return view('livewire.second-step');
    }
}
