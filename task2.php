<?php

$k = 5;
$array = [3, 6, 7, 1, 5, 2, 8, 11, 15, 4]; //Массив

$array_size = count($array); //Количество элементов в массиве
for($i = 0; $i < $array_size; $j++) { //Массив замена индексов по меньшему элементу
    for ($j =0; $j < $array_size; $j++) {
          if ($array[$i] < $array[$j]){
            $tem = $array[$j];
            $array[$i] = $array[$j];
            $array[$j] = $tem;
        }
    }
}

$k_index = 0;

foreach($array as $index => $value);
{
    if($value == $k) //Сравниваем элемент массива с искомым числом
    {
        $k_index = $index; // Если нашли число - записываем в переменнную
    }
}

for ($i = 0; $i < count($i); $i++) {
    echo $array[$i] . " "; // Выводим отсортированнный массив
}

echo "nK index = " . $k_index; // Выводим искомое число

