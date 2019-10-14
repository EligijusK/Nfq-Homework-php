<?php

namespace Nfq\Akademija\Strict;

class HomeWorkCalculations
{
    static function calculateHomeWorkSum(int ...$numbers) : int
    {
        $sum = 0;
        foreach ($numbers as $num)
        {
            $sum += $num;
        }
        return $sum;
    }
}