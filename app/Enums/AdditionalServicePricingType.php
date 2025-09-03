<?php

namespace App\Enums;

enum AdditionalServicePricingType: string
{
    case PER_BOOKING = 'per_booking';
    case PER_PAX = 'per_pax';
}
