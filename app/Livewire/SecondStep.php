<?php

namespace App\Livewire;

use Spatie\LivewireWizard\Components\StepComponent;

class SecondStep extends StepComponent
{
    public array $offer = [];

    public function render()
    {
        $start = microtime(true);
        $return = view('livewire.second-step');
        ray(['SecondStep' => microtime(true) - $start])->blue();

        return $return;
    }
}
