<?php

namespace App\Livewire;

use App\Support\Livewire\Immutable;
use Spatie\LivewireWizard\Components\StepComponent;

class FirstStep extends StepComponent
{
    #[Immutable]
    public array $offer = [];

    public function render()
    {
        $start = microtime(true);
        $return = view('livewire.first-step');
        ray(['FirstStep' => microtime(true) - $start])->blue();

        return $return;
    }
}
