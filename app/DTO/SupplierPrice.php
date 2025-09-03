<?php

namespace App\DTO;

use App\Enums\Currency;
use Spatie\LaravelData\Data;

class SupplierPrice extends Data
{
    public function __construct(
        public readonly float $selling_price,
        public readonly Currency $currency,
        public readonly float $marketing_price,
        public readonly ?float $supplier_price = null,
        public readonly array $taxes = [],
        public readonly array $additional_fees = [],
        public readonly array $trace = [],
        public readonly ?float $discount = 0,
        public readonly ?float $commission = 0,
    ) {}
}
