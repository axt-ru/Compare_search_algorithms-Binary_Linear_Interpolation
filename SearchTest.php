<?php

include 'randArray.php';
include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

const NUM = 5555;

$arr = getSortRandArray();

//print_r($arr);

echo "Линейный поиск".PHP_EOL;
echo linearSearch($arr, NUM).PHP_EOL;
// Количество шагов: 2738

echo "Бинарный поиск".PHP_EOL;
echo binarySearch($arr, NUM).PHP_EOL;
// Количество шагов: 13. Искомое число 5555. Индекс числа в массиве - 2738

echo "Интерполяционный".PHP_EOL;
echo interpolationSearch($arr, NUM);
// Количество шагов: 3. Искомое число 5555. Индекс числа в массиве - 2738
