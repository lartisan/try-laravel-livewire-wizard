<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class Price extends Data
{
    public function __construct(
        public readonly float $selling_price,
        public readonly string $currency,
        public readonly float $marketing_price,
        public readonly array $taxes,
        public readonly array $additional_fees,
        public readonly ?float $discount = 0,
        public readonly mixed $commission = null,
        public readonly ?float $supplier_price = null,
        public readonly ?PriceTrace $trace = null,
    ) {}
}
