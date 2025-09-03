<?php

namespace App\DTO;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class FlightSegments extends Data
{
    public function __construct(
        #[DataCollectionOf(FlightSegmentLeg::class)]
        public readonly DataCollection $arrival_legs,

        #[DataCollectionOf(FlightSegmentLeg::class)]
        public readonly DataCollection $departure_legs,
    ) {}
}
