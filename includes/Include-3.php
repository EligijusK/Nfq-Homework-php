<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict;

class HomeWorkCalculations
{
    static function calculateHomeWorkSum(int ...$numbers) : int
    {
        $sum = 0;
        foreach ($numbers as $num)
        {
            $sum =+ $num;
        }
        return $sum;
    }
}