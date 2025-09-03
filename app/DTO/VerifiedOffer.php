<?php

namespace App\DTO;

use Carbon\CarbonImmutable;
use Livewire\Wireable;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\Validation\Uuid;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class VerifiedOffer extends Data implements Wireable
{
    use WireableData;

    public function __construct(
        public readonly string $search_id,
        public readonly string $search_currency,
        //
        // departure - will be null for individual packages
        public readonly ?int $departure_id,
        public readonly ?string $departure_name,
        //
        public readonly int $destination_id,
        public readonly string $destination_name,
        //
        #[WithCast(DateTimeInterfaceCast::class, ['Y-m-d', 'Y-m-d\TH:i:sP'])]
        public readonly ?CarbonImmutable $check_in,

        #[WithCast(DateTimeInterfaceCast::class, ['Y-m-d', 'Y-m-d\TH:i:sP'])]
        public readonly ?CarbonImmutable $check_out,

        public readonly int $nights,
        //
        public readonly int $supplier_id,
        // public readonly string $supplier_name,
        //
        public readonly int $hotel_id,
        public readonly string $hotel_name,
        public readonly int $hotel_classification,
        public readonly ?string $hotel_image,
        //
        #[DataCollectionOf(OfferRoom::class)]
        public readonly ?DataCollection $rooms,
        // public readonly string $rooms_hash,
        //
        #[DataCollectionOf(FlightSegments::class)]
        public readonly DataCollection $flights,
        public readonly string $flights_hash,
        //
        #[DataCollectionOf(BusDetails::class)]
        public readonly DataCollection $buses,
        public readonly string $buses_hash,
        //
        // public readonly array $labels,
        public readonly string $transport_type,
        // public readonly array $transfers,
        // public readonly bool $has_transfer,
        //
        public readonly string $occupancy,
        //
        // public readonly array $meta,
        // public readonly string $supplier_departure_code,
        // public readonly string $supplier_departure_name,
        // public readonly string $supplier_destination_code,
        // public readonly string $supplier_destination_name,
        // public readonly string $supplier_hotel_code,
        // public readonly string $supplier_hotel_name,
        // public readonly int $supplier_hotel_classification,
        //
        // public readonly ?bool $is_recommended,
        //
        // public readonly string $supplier_meal_code,
        public readonly string $supplier_meal_name,
        // public readonly bool $is_verified,
        // public readonly array $supplier_payment_terms,
        // public readonly array $supplier_cancellation_terms,
        //
        // public readonly ?string $hotel_offer_id,
        // public readonly ?string $flight_offer_id,
        //
        // public readonly string $timestamp,
        //
        // public readonly ?int $region_id,
        // public readonly ?string $region_name,
        //
        public readonly string $country_code,
        public readonly string $country_name,
        // meal
        // public readonly ?int $meal_type_id,
        // public readonly ?string $meal_type_name,
        // public readonly ?string $meal_type_slug,
        // public readonly ?float $meal_type_order,

        // amenities
        // public readonly array $amenities,

        // tags
        public readonly array $tags,

        // hotel rating
        // public readonly ?int $hotel_rating,
        // public readonly ?int $hotel_rating_count,

        // location [lat: float, lon: float]
        // public readonly ?array $geolocation,

        // packages
        // public readonly ?string $package_id,
        // public readonly ?string $package_name,
        // #[MapInputName('included')]
        // public readonly array $included_services,
        // #[MapInputName('excluded')]
        // public readonly array $excluded_services,
        // public readonly ?string $description,

        // Additional services
        #[DataCollectionOf(AdditionalService::class)]
        public readonly DataCollection $additional_services,

        // flight details
        // public readonly int $flight_stops,
        // public readonly array $flight_airlines,
        public readonly ?int $flight_supplier,

        // functional flags
        /**
         * used for Traffics API
         * Do not remove this field (is_verifiable)
         * We cannot merge with is_verified, will affect room availability for the rest of the suppliers
         */
        public readonly bool $is_verifiable,
        public readonly bool $is_expired,
        public readonly bool $is_dynamic,
        public readonly bool $is_available,

        public readonly bool $has_cancellation,

        // public readonly float $cursor,

        // public readonly ?string $uuid,
        //
        // public readonly ?Price $supplier_price,
        // public readonly ?Price $our_price,
        public readonly ?Price $seller_price,
        //
        // public readonly array $fields,
        // public readonly array $static_fields,
        //
        #[MapInputName('our_payment_terms')]
        public readonly ?GenericOfferTerms $payment_terms,
        #[MapInputName('our_cancellation_terms')]
        public readonly ?GenericOfferTerms $cancellation_terms,
        //
        // public readonly ?string $tour_operator_code,
        // public readonly ?string $tour_operator,
        //
        // public readonly ?int $user_id,
        //
        // public readonly ?string $status,
        // public readonly bool $from_cache,
        public string $id = new Uuid,
        // public readonly string $hash = '',
        // public readonly ?string $aggregation_id = '',

        // Seat Selection
        /*#[DataCollectionOf(SeatMap::class)]
        public readonly DataCollection $seat_maps = new DataCollection(SeatMap::class, []),*/
        public readonly array $seat_maps = [],
    ) {}
}