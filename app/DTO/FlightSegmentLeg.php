<?php

namespace App\DTO;

use Carbon\CarbonImmutable;
use Livewire\Wireable;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;

class FlightSegmentLeg extends Data implements Wireable
{
    use WireableData;

    public function __construct(
        public readonly string $departure_code,
        public readonly ?string $departure_name,

        #[WithCast(DateTimeInterfaceCast::class, 'Y-m-d\TH:i:sP')]
        public readonly CarbonImmutable $departure_date_time,

        public readonly string $arrival_code,
        public readonly ?string $arrival_name,

        #[WithCast(DateTimeInterfaceCast::class, 'Y-m-d\TH:i:sP')]
        public readonly CarbonImmutable $arrival_date_time,

        public readonly string $airline_code,
        public readonly ?string $airline_name,
        public readonly ?string $flight_number,
        public readonly int $flight_duration,
        public readonly array $service_summary,
    ) {}
}
