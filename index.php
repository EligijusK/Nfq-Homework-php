<?php

namespace root;

require_once __DIR__.'/vendor/autoload.php';

use Nfq\Akademija\NotTyped as NotTyped;
use Nfq\Akademija\Soft as Soft;

echo "\033[01;31m calculateHomeWorkSum: \033[0m".calculateHomeWorkSum(3, 2.2, '1').PHP_EOL;
echo "\033[01;31m Nfq\Akademija\NotTyped\calculateHomeWorkSum: \033[0m".NotTyped\HomeWorkCalculations::calculateHomeWorkSum(3, 2.2, '1')."\n";
echo "\033[01;31m Nfq\Akademija\Soft\calculateHomeWorkSum: \033[0m".Soft\HomeWorkCalculations::calculateHomeWorkSum(3, 2.2, '1')."\n";

include("strict_type.php");

function calculateHomeWorkSum(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $n)
    {
        $sum = $sum + $n;
    }
    return $sum ;
}


