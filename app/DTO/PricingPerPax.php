<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class PricingPerPax extends Data
{
    public function __construct(
        public readonly int $start_age,
        public readonly ?int $end_age,
        public readonly SupplierPrice $supplier_price,
    ) {}
}