<?php

namespace App\Livewire;

use App\DTO\VerifiedOffer;
use App\Support\Livewire\Immutable;
use Spatie\LivewireWizard\Components\StepComponent;

class FirstStep extends StepComponent
{
    #[Immutable]
    public VerifiedOffer $offer;
    public string $offerId;

    public function mount()
    {
        $start = microtime(true);
        $this->offer = session('offer:'.$this->offerId);
        ray(['FirstStep - mount' => microtime(true) - $start])->blue();
    }

    public function render()
    {
        $start = microtime(true);
        $return = view('livewire.first-step');
        ray(['FirstStep - render' => microtime(true) - $start])->blue();
        return $return;
    }
}
