<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class PriceTrace extends Data
{
    public function __construct(
        public readonly ?OurDiscountRule $our_discount_rule = null,
    ) {}
}
