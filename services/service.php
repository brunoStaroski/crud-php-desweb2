<?php

class Service {

    public function getRegiao() {
        $conn = new PDO('mysql:host=localhost;dbname=avaliacao_web2', 'root', '');
        $stmt = $conn->prepare("SELECT * FROM regiao");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function cadastrarRegiao($regiao) {
        $conn = new PDO('mysql:host=localhost;dbname=avaliacao_web2', 'root', '');
        $stmt = $conn->prepare("INSERT INTO regiao (DescricaoRegiao) VALUES ('".$regiao."')");
        $stmt->execute();
    }

    public function editarRegiao($regiaoOld, $regiaoNew) {
        $conn = new PDO('mysql:host=localhost;dbname=avaliacao_web2', 'root', '');
        $stmt = $conn->prepare("UPDATE regiao SET DescricaoRegiao='".$regiaoNew."' WHERE DescricaoRegiao = '".$regiaoOld."'");
        $stmt->execute();
    }

    public function excluirRegiao($regiao) {
        $conn = new PDO('mysql:host=localhost;dbname=avaliacao_web2', 'root', '');
        $stmt = $conn->prepare("DELETE FROM regiao WHERE regiao.DescricaoRegiao = '".$regiao."'");
        $stmt->execute();
    }

}