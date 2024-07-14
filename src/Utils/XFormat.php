<?php

namespace App\Utils;

use DateTimeImmutable;

class XFormat
{
    /**
     * @TODO: Make a translations of return values
     *
     * @param int|null $gender
     *
     * @return string
     */
    public static function genderFullName(?int $gender): string
    {
        return match ($gender) {
            0       => "Female",
            1       => "Male",
            default => "Not specified"
        };
    }

    /**
     * @param DateTimeImmutable|null|string $date
     * @return string
     */
    public static function dateShort(string|DateTimeImmutable|null $date): string
    {
        if (empty($date)) {
            return "";
        }

        return $date->format("Y-m-d");
    }
}
