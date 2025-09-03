<?php

namespace App\DTO;

use Carbon\CarbonImmutable;
use Spatie\LaravelData\Data;

class GenericOfferTermsItem extends Data
{
    public function __construct(
        public ?CarbonImmutable $datetime,
        public ?float $value,
        public ?string $currency,
    ) {}
}
