<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
    <input type="number" name="liczba" placeholder="podaj numer zadania">
</form>
<?php
    include 'zad1.php';
    include 'zad2.php';
    $p = $_POST['liczba'];

    switch($p){
        case 1: zad1(); break;
        case 2: zad2(); break;
    }
?>
</body>
</html>

<!-- https://izabelamd.wordpress.com/php/instrukcje-warunkowe/ -->