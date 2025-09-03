<?php

namespace App\DTO;

use Carbon\CarbonImmutable;
use Livewire\Wireable;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;

class BusDetails extends Data implements Wireable
{
    use WireableData;

    public function __construct(
        public readonly CarbonImmutable $outbound_arrival_date,
        public readonly CarbonImmutable $inbound_departure_date,
        public readonly string $from,
        public readonly string $label,
        public readonly string $to,
        public readonly string $type,
        public readonly CarbonImmutable $outbound_departure_date,
        public readonly CarbonImmutable $inbound_arrival_date,
    ) {}
}
