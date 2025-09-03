<?php

namespace App\DTO;

use App\Enums\AdditionalServicePricingType;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class Pricing extends Data
{
    public function __construct(
        public readonly AdditionalServicePricingType $type,
        #[DataCollectionOf(PricingPerPax::class)]
        public readonly DataCollection $per_pax,
        public readonly ?PerBooking $per_booking = null,
    ) {}
}
