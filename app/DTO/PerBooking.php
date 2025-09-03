<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class PerBooking extends Data
{
    public function __construct(
        public readonly SupplierPrice $supplier_price
    ) {}
}