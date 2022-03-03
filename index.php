<?php
    include("autoload.php");
    include ("./templates/head.class.php");
    include ("./templates/body.class.php");


    $head = new Head();
    echo $head->ReturnFullHead();

    $body = new Body();

    $header = new Header();
    $body->addElemento($header->ReturnFullHeader('headerStyle'));






    echo $head->ReturnFullHead().$body->ReturnBody();














