<?php

namespace App\Livewire;

use App\DTO\VerifiedOffer;
use Spatie\LivewireWizard\Components\WizardComponent;

class CheckoutWizardComponent extends WizardComponent
{
    public string $offerId;
    public array $offer;

    public function mount()
    {
        $start = microtime(true);

        $this->offer = $this->getOffer();
        $this->offerId = $this->offer['id'];

        session()->put('offer:'.$this->offerId, VerifiedOffer::from($this->offer));

        ray(['Wizard' => microtime(true) - $start])->blue();
    }

    public function steps(): array
    {
        return [
            FirstStep::class,
            SecondStep::class,
            ThirdStep::class,
        ];
    }

    public function initialState(): ?array
    {
        return [
            'first-step' => [
                'offerId' => $this->offerId,
            ],
            'second-step' => [
                'offerId' => $this->offerId,
            ],
            'third-step' => [
                'offerId' => $this->offerId,
            ],
        ];
    }

    private function getOffer()
    {
        $fileContent = file_get_contents("/Users/cristianiosif/Downloads/oferta.json");

        return json_decode($fileContent, true);
    }
}
