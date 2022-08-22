<?php

declare(strict_types=1);

namespace App;

class MutationExample
{
    public function isAgeInBoundaries(int $age): bool
    {
        return $age >= 18 && $age <= 99;
    }
}