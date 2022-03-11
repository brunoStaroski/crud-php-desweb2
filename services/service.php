<?php

class Service {

    public function getMenu() {
        $conn = new PDO('mysql:host=localhost;dbname=aulawebiii', 'root', 'root');
        $stmt = $conn->prepare("SELECT * FROM menu");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}