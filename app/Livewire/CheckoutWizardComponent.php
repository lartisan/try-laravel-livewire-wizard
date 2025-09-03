<?php

namespace App\Livewire;

use App\DTO\VerifiedOffer;
use App\Support\Livewire\Immutable;
use Spatie\LivewireWizard\Components\WizardComponent;

class CheckoutWizardComponent extends WizardComponent
{
    #[Immutable]
    public array $offer;
    public string $offerId;

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
        $fileContent = file_get_contents(resource_path('assets/oferta.json'));

        return json_decode($fileContent, true);
    }
}
