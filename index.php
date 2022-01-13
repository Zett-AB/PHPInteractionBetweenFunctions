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
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Montserrat:wght@100&family=Philosopher&display=swap" rel="stylesheet">
</head>
<body>
    <header class="title">
        <?php
            echo "<h3>".$hello.$nickname."</h3>";
            echo "<h4>".$hellow."</h4>";
        ?>
        <h1>Функции. Взаимодействие функцией между собой.</h1>
    </header>
    <div class="descr">
        <p>
            Функции допускается определять в любом месте программы/кода, это значит, что они не обязательно должны быть определены до их использования, исключая тот случай, когда функции определяются условно, т.е. пока функция еще не определена/создана, поскольку программа не достигла её выполнения.<br>
            Краткий пример:
            <ul>
                <li>?php</li>
                <li>$makefunc = true;</li>
                <li>/* Здесь нельзя вызвать функцию foo(), так как
                    она еще не определена (оператор if еще не сработал). 
                    Но мы можем вызвать здесь функцию bar(), 
                    так как она уже определена внизу */
                </li>
                <li>if ($makefunc) {</li>
                <li>// функция foo определяется только сейчас</li>
                <li>function foo() {</li>
                <li>
                    echo "Я не существую до тех пор, пока выполнение программы меня не достигнет.\n";
                </li>
                <li>}</li>
                <li>}</li>
                <li>/* Теперь мы можем вызывать функцию foo(),
                    поскольку $makefoo была интерпретирована как true */
                </li>
                <li>foo();</li>
                <li>?></li>
            </ul>
            <i>Это небольшое отступление.</i>
        </p>
        <p>
            Все функции в PHP имеют глобальную область видимости, т.е. они могут быть вызваны вне функции, даже если были определены внутри и наоборот.
        </p>
        <p>
            Чаще всего функции работают с какими-либо переданными ей значениями. Для того, чтобы функции можно было передать некоторые значения, в ней должны быть указаны параметры. Эти параметры по сути являются обычными переменными, которые инициализируются переданными значениями при вызове функции.
        </p>
        <p>
            Функции также можно "накладывать" друг на друга, т.е. при выполнении одной фукнции включать в неё также выполнение другой функции.
        </p>
        <p>
            Пример "накладывания" функций:
            <ul>
                <li>Создаем простую функцию <b>sum</b>:</li>
                <li>function sum($a, $b){</li>                
                <li>$result=false;</li>                
                <li>if(!is_numeric($a)){</li>                
                <li>$result="Ошибка значения переменной 'a' не является числом!";</li>                
                <li>}else if(!is_numeric($b)){</li>                
                <li>$result="Ошибка значения переменной 'b' не является числом!";</li>                
                <li>} else{</li>                
                <li>$result=$a+$b;</li>                
                <li>}</li>                
                <li>return $result;</li>                
                <li>}</li>                
                <li>echo sum(10, 15);</li>                
                <li>Теперь создаим еще одну новую функцию $maxSum:</li>                
                <li>function maxSum($sum){</li>                
                <li>$result=false;</li>                
                <li>if($sum > 30){</li>                
                <li>$result="Сумма больше 30";</li>                
                <li>} else {</li>                
                <li>$result="Сумма меньше 30";</li>                
                <li>}</li>                
                <li>return $result;</li>                
                <li>}</li>                
                <li>?></li>                
            </ul>
        </p>
        <p>
            Тут мы видим, что в функция <b>sum</b> возвращает нам сумму значений переменных <b>$a</b> и <b>$b</b>. В то время как в функции <b>maxSum</b> происходит проверка суммы - больше она 30 или меньше.
        </p>
        <p>
            Теперь мы совершим "наложение" одной функции на другую, т.е. одну функцию включим в другую и таким образом, при выполнении функции <b>maxSum</b>  будет проверяться результат функции <b>sum</b>.
        </p>
        <p>
            И так сам код:
            <ul>
                <li>?php </li>
                <li>echo maxSum(sum(10, 25));</li>
                <li>?></li>
            </ul>
        </p>
    </div>
    <div class="descr">
        <p>
            Теперь проверим в действии наш код. Смотрим с начала как работают по отдельности наши функции, а потом их совместное взаимодействие<div class=""></div> 
        </p>
        <div class="code__php">
            <?php
                echo "<b>"."Эта функция с переменной makefunc"."</b>";
                    $makefunc = true;
                 echo "<p>"."Здесь нельзя вызвать функцию foo(), так как
                    она еще не определена (оператор if еще не сработал). 
                    Но мы можем вызвать здесь функцию bar(), 
                    так как она уже определена внизу"."</p>"; 
                    if ($makefunc) {
                // функция foo определяется только сейчас
                    function foo() {
                        echo "<p>"."Я не существую до тех пор, пока выполнение программы меня не достигнет.\n"."</p>";
                        }
                    }
                 echo "<br>"."Теперь мы можем вызывать функцию foo(),
                    поскольку переменная makefunk была интерпретирована как true";
                    foo();
            ?>
        </div>
        <p>
            Обратим внимание на то, что "Я не существую до тех пор, пока выполнение программы меня не достигнет.", в нашем случаи стоит последней, т.е. функция уже сработала ;).
        </p>
        <p>
            <h4 class="title">Переходим к функции <b>sum</b></h4>
        </p>
        <div class="code__php">
            <?php
                function sum($a, $b){                
                    $result=false;                
                        if(!is_numeric($a)){                
                            $result="Ошибка значения переменной 'a' не является числом!";                
                            }else if(!is_numeric($b)){                
                                        $result="Ошибка значения переменной 'b' не является числом!";                
                                    } else {                
                                            $result=$a+$b;                
                                            }                
                            return $result;                
                        }                
                    echo  "Результат нашей функции - ".sum( 10, 15);                
            ?>        
        </div>
        <p>
            <h4 class="title">Переходим к функции <b>maxSum</b></h4>
        </p>
        <p>
            Однако код для нашей функции maxSum напишем сразу с проверкой нашей функции и если, что то будет не так, то получим соответсвующее уведомление.
        </p>
        <p>
            Для начала напише код проверки функции maxSum на предмет является ли значение числом.
            <ul>
                <li>?php</li>
                <li>function maxSum($sum){</li>                
                <li>$result=false;</li>
                <li>if(!is_numeric($sum)){</li>                
                <li>$result = "Ошибка значения переменной sum, оно не является числом!";</li>                
                <li>} else </li>
                <li> if($sum > 30){</li>                
                <li>$result="Сумма больше 30";</li>                
                <li>} else {</li>                
                <li>$result="Сумма меньше 30";</li>                
                <li>}</li>                
                <li>return $result;</li>                
                <li>}</li>                
                <li>echo maxSum(sum(10 18));</li>                
                <li>?></li> 
            </ul>
        </p>
        <p>
            Теперь пишем наш код и проверяем его работоспосбность.<br>
            Писать заново функцию sum не надо, так ак мы уже её объявили ранее, в противном случаи код выдаст ошибку, так как функция уже была объявлена.
        </p>
        <div class="code__php">
            <?php
                echo "<b>"."Пишем нашу функцию maxSum и проверку к ней."."</b>";
                function maxSum($sum){                
                    $result=false;
                        if(!is_numeric($sum)){                
                            $result = "Ошибка значения переменной sum, оно не является числом!";               
                            } else 
                                if($sum > 30){                
                                    $result="Сумма больше 30";                
                                    } else {                
                                        $result="Сумма меньше 30";                
                                    }                
                        return $result;                
                        }                
                        echo "<br>"."Значение - ".maxSum(sum(5, 30 ));    
            ?>        
        </div>
    </div>
    
</body>
</html>