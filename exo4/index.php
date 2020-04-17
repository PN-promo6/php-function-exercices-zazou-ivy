<?php
function sum($arrayOfNumbers)
{
    $sum = 0;
    for ($i = 0; $i < count($arrayOfNumbers); $i++) {
        # code...
        $currentElement = $arrayOfNumbers[$i];

        if (is_array($currentElement)) {
            $sum = $sum + sum($currentElement);
        } else {
            $sum = $sum + $currentElement;
        }
    }
    return $sum;
}

$numbers = array(1, 2, 3, array(1, 2, 3, array(1, 2, 3)));
$result = sum($numbers);
echo $result;
