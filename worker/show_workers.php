<?php
include('../db/database.php');

$db = new Db();
$conn = $db->conexao();

$lista = $conn->query("SELECT * FROM usuario WHERE is_adm = false");
        $dados['usuarios'] = $lista->fetchAll();
        echo json_encode($dados);