<?php

namespace App\Enum;

enum Priority: string
{
    case URGENT = "urgent";
    case MEDIUM = "medium";
    case HIGH = "high";
    case LOW = "low";


    public static function enumValues(): array{
        return array_column(Priority::cases(), 'value');
    }
}
