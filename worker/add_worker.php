<?php
include('../db/database.php');

$db = new Db();
$conn = $db->conexao();

$login = $_POST['login'];
$senha = $_POST['senha'];
$dados = array();


if(!$conn) {
    $dados['conexao_msg_erro'] = '<small class="form-text text-danger">erro na conexao</small>';
    echo json_encode($dados);
}
else if(empty(trim($login))) {
    $dados['ok'] = $_POST;
    $dados['login_msg_erro'] = '<small class="form-text text-danger">login vazio</small>';
    echo json_encode($dados);
}
else if(empty(trim($senha))) {
    $dados['senha_msg_erro'] = '<small class="form-text text-danger">senha vazia</small>';
    echo json_encode($dados);
}
else {
    $verifica = $conn->prepare("SELECT * FROM usuario WHERE login = :login AND senha = :senha");
    $verifica->execute(array('login' => $login, 'senha' => $senha));
    $resultado = $verifica->fetchAll();
    
    if($resultado) {
        $dados['usuario_msg_erro'] = '<small class="form-text text-danger">usuario ja existe</small>';
        echo json_encode($dados);
    }
    else {
        $adicionar = $conn->prepare("INSERT INTO usuario(login, senha)VALUES(:login, :senha)");
        $adicionar->execute(array('login' => $login, 'senha' => $senha));
        $dados['save'] = 'salvo';
        echo json_encode($dados);
    }
}
