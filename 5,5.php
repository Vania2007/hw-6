<?php
function is_positive_number($var)
{
    return $var > 0;
}

$arr = [
    [1, 5, 7, 0],
    [0, -3, 2, -8],
    [9, 4, 1, 4],
];

$positive_elements = [];

for ($i = 0; $i < count($arr); $i++) {
    $filtered_row = array_filter($arr[$i], "is_positive_number");
    $positive_elements = array_merge($positive_elements, $filtered_row);
}

$sum = array_sum($positive_elements);
echo "Сума позитивних елементів: $sum";
