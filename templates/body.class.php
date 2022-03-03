<?php

    class Body {

        private $elementos = array();

        public function addElemento($sElement) {
            $this->elementos[] = $sElement;
        }

        public function ReturnBody() {
            $body = "<body> \n";
                foreach ($this->elementos as $itemElemento) {
                    $body .= $itemElemento;
                }
            $body .= "\n </body>";
            return $body;

        }







    }


