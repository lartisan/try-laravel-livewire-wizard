<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class OfferRoom extends Data
{
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $code = null,
        public readonly ?int $adults = null,
        public readonly array $children_ages = [],
    ) {}
}
