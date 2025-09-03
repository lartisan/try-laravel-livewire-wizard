<?php

namespace App\DTO;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GenericOfferTerms extends Data
{
    public function __construct(
        #[DataCollectionOf(GenericOfferTermsItem::class)]
        public ?DataCollection $terms,
        public string $description = '',
    ) {}
}
