<?php

declare(strict_types=1);

namespace Math\Numbers\Service;

use Math\Numbers\UseCase\EqualFloats;

class FloatsService implements EqualFloats
{
    /**
     * @inheritDoc
     */
    public function equalFloats(float $f1, float $f2, float $maxDifference = 0.000000001): bool
    {
        return !(abs($f1 - $f2) > $maxDifference);
    }
}
