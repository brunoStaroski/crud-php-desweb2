<?php

    class Head {

        private $cssPath;

        public function addElement($css) {
            $this->cssPath = $css;
        }

        public function ReturnFullHead() {
            return "<!DOCTYPE html>
                    <html lang=\"en\">
                    <head>
                        <meta charset=\"UTF-8\">
                        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                        <link rel='stylesheet' type='text/css' href='../resources/style.css'>
                        <title>Document</title>
                    </head>";
        }


    }






