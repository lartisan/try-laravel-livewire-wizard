<?php

namespace App\Livewire;

use App\DTO\VerifiedOffer;
use Spatie\LivewireWizard\Components\WizardComponent;

class CheckoutWizardComponent extends WizardComponent
{
    public array $offer;

    public function mount()
    {
        $this->offer = $this->getOffer();
        /*$start = microtime(true);
        $offer = VerifiedOffer::from($this->offer);
        ray(microtime(true) - $start)->blue();*/
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
                'offer' => $this->offer,
            ],
            'second-step' => [
                'offer' => $this->offer,
            ],
            'third-step' => [
                'offer' => $this->offer,
            ],
        ];
    }

    private function getOffer()
    {
        $fileContent = file_get_contents("/Users/cristianiosif/Downloads/oferta.json");

        return json_decode($fileContent, true);
    }
}
