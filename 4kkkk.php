<?php
// Создание массива с целыми числами
$array = array(5, 10, 15, 20, 25);

// Нахождение суммы всех элементов массива
$sum = 0;
foreach ($array as $number) {
    $sum += $number;
}

// Вывод суммы
echo "Сумма всех элементов массива: " . $sum;
?>