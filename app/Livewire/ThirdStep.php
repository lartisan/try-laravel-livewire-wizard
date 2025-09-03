<?php

namespace App\Livewire;

use Spatie\LivewireWizard\Components\StepComponent;

class ThirdStep extends StepComponent
{
    public array $offer = [];

    public function render()
    {
        return view('livewire.third-step');
    }
}
