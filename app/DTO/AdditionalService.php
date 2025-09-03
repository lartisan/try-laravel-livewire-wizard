<?php

namespace App\DTO;

use App\Enums\AdditionalServiceType;
use Livewire\Wireable;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class AdditionalService extends Data implements Wireable
{
    use WireableData;

    public function __construct(
        public readonly int|string $code,
        public readonly string $title,
        public readonly Pricing $pricing,
        public readonly ?string $description,
        #[DataCollectionOf(DetailedDescription::class)]
        public readonly DataCollection $detailedDescriptions,
        public readonly bool $selected,
        public readonly array $pax = [],
        public readonly AdditionalServiceType $type = AdditionalServiceType::MANDATORY,
        public readonly float $total = 0,
        public readonly ?string $category = null,
        public readonly ?string $destination = null,
        public readonly ?string $offerType = null,
        public readonly array $meta = [],
        public readonly array $images = [],
        public readonly mixed $customData = null,
    ) {}
}
