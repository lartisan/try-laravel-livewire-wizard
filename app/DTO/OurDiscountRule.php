<?php

namespace App\DTO;

use App\Services\Sphinx\Responses\Price;
use Spatie\LaravelData\Data;

class OurDiscountRule extends Data
{
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?int $rule = null,
        public readonly ?Price $price_before = null,
    ) {}
}
