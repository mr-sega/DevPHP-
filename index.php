<?php

//Task 1

function myArrowFunc($i){
    echo str_repeat("<", $i);
    echo str_repeat(">", $i);
}

myArrowFunc(5);

//Task 2

$deliveryMethodsArray = [
    [
        'code' => 'dhl',
        'customer_costs' => [
            22 => '1.000',
            11 => '3.000',
        ]
    ],
    [
        'code' => 'fedex',
        'customer_costs' => [
            22 => '4.000',
            11 => '6.000',
        ]
    ]
];

function sortDeliveryMethods($array)
{
    $sortDeliveries = [];
    foreach ($array as $deliveryArray) {
        foreach ($deliveryArray['customer_costs'] as $key => $value) {
            $sortDeliveries[$key][] = [$deliveryArray['code'] => $value];
        }
    }
    return $sortDeliveries;
}
sortDeliveryMethods($deliveryMethodsArray);

echo '<pre>';
var_dump(sortDeliveryMethods($deliveryMethodsArray));
echo '<pre>';
