<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="stylesheet" href="style2.css">
    <link href="bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body ng-controller="mainCtrl">

<header>
    <div id="header_strip">
        <div class="content">
            <div id="logo">
                <img src="">
                Который час
            </div>
            <div id="contacts" class="pull-right">
                <div id="phone">8 800 123 45 67</div>
                <div id="trolley">Ваша корзина</div>
            </div>
        </div>
    </div>
    <div class="content">
        <div id="menu">
            <ul>
                <li class="inlineBlock">
                    <a href="">Главная</a>
                </li>
                <li class="inlineBlock">
                    <a href="">Каталог</a>
                </li>
                <li class="inlineBlock">
                    <a href="">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</header>