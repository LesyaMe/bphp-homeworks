<?php
$dayOfWeek = date("N");
$fullHour = date("G");


if ((6 <= $fullHour)&&($fullHour < 11)) {
    $image = "img/morning.jpg";
} elseif ((11 <= $fullHour)&&($fullHour < 18))  {
    $image = "img/day.jpg";
} elseif ((18 <= $fullHour)&&($fullHour < 23))  {
    $image = "img/evening.jpg";
}  elseif ((23 <= $fullHour)&&($fullHour < 0))  {
    $image = "img/night.jpg";
}  elseif ((0 <= $fullHour)&&($fullHour < 6))  {
    $image = "img/night.jpg";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="img" style="background-image: url(<?=$image;?>)">
    <section class="greeting">
        <p>
            <?php 
            if ((6 <= $fullHour)&&($fullHour < 11)) {
                echo "Доброе утро!";
            } elseif ((11 <= $fullHour)&&($fullHour < 18))  {
                echo "Добрый день!";
            } elseif ((18 <= $fullHour)&&($fullHour < 23))  {
                echo "Добрый вечер!";
            }  elseif ((23 <= $fullHour)&&($fullHour < 0))  {
                echo "Доброй ночи!";
            }  elseif ((0 <= $fullHour)&&($fullHour < 6))  {
                echo "Доброй ночи!";
            }?>
        </p>
    
        <p>
            <?php 
                switch ($dayOfWeek):
                    case 1: echo "<p>Сегодня понедельник</p>"; break;
                    case 2: echo "<p>Сегодня вторник</p>"; break;
                    case 3: echo "<p>Сегодня среда</p>"; break;
                    case 4: echo "<p>Сегодня четверг</p>"; break;
                    case 5: echo "<p>Сегодня пятница</p>"; break;
                    case 6: echo "<p>Сегодня суббота</p>"; break;
                    case 7: echo "<p>Сегодня восресенье</p>"; break;
                endswitch;
            ?>
        </p>
    </section>
</div>       
</body>
</html>