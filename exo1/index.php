<?php

function sumAll($number)
{
    $result = 0;
    for ($i = 0; $i < $number; $i++) {
        $result = $result + $i;
    }
    return $result;
}

echo sumAll(10);
