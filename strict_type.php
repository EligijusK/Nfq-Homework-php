<?php

declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';
use Nfq\Akademija\Strict as strict;

try {
    echo "\033[01;31m Nfq\Akademija\Strict\calculateHomeWorkSum: \033[0m" . strict\HomeWorkCalculations::calculateHomeWorkSum(3, 2.2, '1') . "\n";
} catch (\TypeError $exceptione) {
    echo "\033[01;31m Nfq\Akademija\Strict\calculateHomeWorkSum: Gautas TypeError! \033";
}