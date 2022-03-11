<?php
    include("autoload.php");
    include ("./templates/head.class.php");
    include ("./templates/body.class.php");

    $head = new Head();
    echo $head->ReturnFullHead();

    $body = new Body();



    $mainDiv = new Main();
    $body->addElemento($mainDiv->returnMainDiv());

    $menu = new Menu();
    $body->addElemento($menu->returnMenu('menuStyle'));

    $header = new Header();
    $body->addElemento($header->ReturnFullHeader('headerStyle'));











    echo $body->ReturnBody();














