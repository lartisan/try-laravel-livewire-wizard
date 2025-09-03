<?php

namespace App\Livewire;

use App\Support\Livewire\Immutable;
use Spatie\LivewireWizard\Components\StepComponent;

class ThirdStep extends StepComponent
{
    #[Immutable]
    public array $offer = [];

    public function render()
    {
        $start = microtime(true);
        $return = view('livewire.third-step');
        ray(['ThirdStep' => microtime(true) - $start])->blue();

        return $return;
    }
}
