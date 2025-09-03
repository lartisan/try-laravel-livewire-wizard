<?php

namespace App\Livewire;

use Spatie\LivewireWizard\Components\StepComponent;

class ThirdStep extends StepComponent
{
    public array $offer = [];

    public function render()
    {
        $start = microtime(true);
        $return = view('livewire.third-step');
        ray(['ThirdStep' => microtime(true) - $start])->blue();

        return $return;
    }
}
