<?php

// Классы и интерфейсы в отдельных файлах
require_once 'classes.php';
require_once 'interfaces.php';

// машины -------------------------------------------
$carAudi = new Car('Audi R8', 1000);
$carBMV = new Car('BMV X5', 2000);

$carAudi->setMark();
$carAudi->setCarPower(2000);
// $carAudi->getPrint();

// TV -----------------------------------------------
$tvLG = new TV('LG 4K', 27000);
$tvSony = new TV('Sony FULL HD', 17000);

$tvLG->setMark();
$tvLG->setTVResolution('20*20');
// $tvLG->getPrint();

// Ручки --------------------------------------------
$penParker = new BallpointPen('Parker Jotter', 2500);
$penPero = new BallpointPen('Pero Caran', 1500);

$penParker->setMark();
$penParker->setPenColor('green');
// $penParker->getPrint();

// Утки ---------------------------------------------
$duckPekin = new Duck ('Пекинская утка', 'Китай');
$duckRussia = new Duck ('Русская утка', 'Россия');

// $duckPekin->makeSound();
// $duckPekin->getPrint();

// Коровы -------------------------------------------
$milkCow = new Cow ('Молочная корова', 'Сарай');
$meatCow = new Cow ('Мясная корова', 'Британия');

// $meatCow->makeSound();
// $meatCow->getPrint();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Определения</title>
    <style>
        /* знаю что стили задал не красиво - просто сжал - так как не в данном задании не важно */
        * {font-family: sans-serif;}
        span {font-weight: bold;}
        body {max-width: 1420px; margin: auto;}
    </style>
</head>
<body>
<h2>Ответ на вопросы своими словами:</h2>
<p><span>Наследование</span> - передача свойств и методов дочерними классами от классов родителей</p>
<p><span>Полиморфизм</span> - возможность эти свойства и методы переопределить в классах наследниках по разному.</p>

<h4>Различия интерфейсов и абстрактных классов</h4>
<p>Интерфейс - не наследуемая заготовка (прописаны только методы - не свойства).</p>
<p>Абстрактный класс наследуется и описывает методы которые обязательно необходимо прописать в дочерних классах.</p>
<p>Оба подхода нужны при разработке.</p>
<p>Интерфейс нужен для стандартизации. Содержит описание методов (без их реализации) на которых базируются другие классы.</p>
<p>Абстрактный класс - для подстраховки от ошибок при разработке больших систем наследования.</p>

<h2>Пример вывода:</h2>
<?php $duckPekin->makeSound(); ?>
<p>Вывод масива можно сделать красивее - но времени совсем нет - суть задания выполнил.</p>
<?php $meatCow->getPrint(); ?>
</body>
</html>