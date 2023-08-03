<?php

function dividir($a, $b): float
{
    return $a / $b;
}

function dividirPor(int $divisor)
{
    return fn (float $numero): float => dividir($numero, $divisor);
    // return function ($numero) use ($divisor): float {
    //     return dividir($numero, $divisor);
    // };
}

$dividirPor2 = dividirPor(2);

echo $dividirPor2(4) . PHP_EOL;
echo $dividirPor2(5) . PHP_EOL;
echo $dividirPor2(6) . PHP_EOL;