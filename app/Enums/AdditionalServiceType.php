<?php

namespace App\Enums;

enum AdditionalServiceType: string
{
    case MANDATORY = 'mandatory';
    case OPTIONAL = 'optional';
}
