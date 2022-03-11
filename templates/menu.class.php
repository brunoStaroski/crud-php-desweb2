<?php

class Menu {

    //<td><a href="exclusao.php">Exclusão</a></td>

    public function returnMenu($class) {
        $service = new Service();
        $listaMenu = $service->getMenu();
        echo '<table class="'.$class.'">';
        foreach ($listaMenu as $menuItem) {
            echo '<tr>';
            echo '<td><a href="'.$menuItem['acao'].'">'.$menuItem['texto'].'</a></td>';
            echo '</tr>';
        }
        echo '</table>';
    }



}