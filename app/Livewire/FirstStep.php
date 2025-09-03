<?php

namespace App\Livewire;

use App\DTO\VerifiedOffer;
use Spatie\LivewireWizard\Components\StepComponent;

class FirstStep extends StepComponent
{
    public VerifiedOffer $offer;
    public string $offerId;

    public function mount()
    {
        $start = microtime(true);
        $this->offer = session('offer:'.$this->offerId);
        ray(['FirstStep' => microtime(true) - $start])->blue();
    }

    public function render()
    {
        return view('livewire.first-step');
    }
}
