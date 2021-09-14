<?php
require_once 'config/connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="config/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="config/script.js"></script>
    <title><?=$title?></title>
</head>
<body>

<header>
    <nav>
        <img src="https://www.demis.ru/local/templates/demis_edges/img/svg/Logo.svg">
        <ul class="menu">
            <li class="menu_li"><a href="index.php">Контакты</a> </li>
            <li class="menu_li"><a href="news.php">Новости</a> </li>
        </ul>
            <i class="fas fa-align-justify"></i>
    </nav>
</header>
<div class="burger">
    <div class="data">
        <ul>
            <li class="menu_li"><a href="index.php">Контакты</a> </li>
            <li class="menu_li"><a href="news.php">Новости</a> </li>
        </ul>
    </div>
</div>

