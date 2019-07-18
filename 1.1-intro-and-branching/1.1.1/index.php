<?php
$variable = [];

if (is_bool($variable)) {
    echo "bool";
    $description = "Логический тип.
    Переменные логического типа могут принимать два значения: true или
    false";
} elseif (is_float($variable)) {
    echo "float";
    $description = "Число с плавающей точкой.
    Используется для вещественных чисел.";
} elseif (is_int($variable)) {
    echo "int";
    $description = "Целое 32-битное число";
} elseif (is_string($variable)) {
    echo "string";
    $description = "Строка";
} elseif (is_null($variable)) {
    echo "null";
    $description = "NULL указывает, что значение переменной не определено";
} else {
    echo "other";
    $description = "Здесь массив";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$variable?> is <?=$type?></p>
    <p><?=$description?></p>
</body>
</html>
