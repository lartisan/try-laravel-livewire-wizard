<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class DetailedDescription extends Data
{
    public function __construct(
        public readonly ?string $label,
        public readonly ?string $text,
        public readonly int $index,
    ) {}
}