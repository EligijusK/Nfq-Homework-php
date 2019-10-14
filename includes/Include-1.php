<?php

namespace Nfq\Akademija\NotTyped;

class HomeWorkCalculations
{
    static function calculateHomeWorkSum(...$numbers) : int
    {
        $sum = 0;
        foreach ($numbers as $num)
        {
            $sum += $num;
        }
        return $sum;
    }
}