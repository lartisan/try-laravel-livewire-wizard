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
        $this->offer = session('offer:'.$this->offerId);
    }

    public function render()
    {
        return view('livewire.first-step');
    }
}
