<?php
    $hello="Привет, ";
    $nickname=" Александр!";
    $hellow="Продолжаем обучение PHP.";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции. Взаимодействие функцией между собой.</title>
    <link rel="stylesheet" type="text/css" href="/normalize.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
    <header class="title">
        <?php
            echo "<h3>".$hello.$nickname."</h3>";
            echo "<h4>".$hellow."</h4>";
        ?>
    </header>
    
</body>
</html>