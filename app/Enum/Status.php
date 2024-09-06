<?php

namespace App\Enum;

enum Status: string
{
    case IN_PROGRESS = "in_progress";
    case COMPLETED = "completed";
    case BLOCKED = "blocked";
    case REJECTED = "rejected";
    case PENDING = "pending";
    case REVIEW = "review";


    public static function enumArray(): array{
        return array_column(Status::cases(), 'value');
    }
}
