<?php
include('./db/database.php');

$db = new Db();
$conn = $db->conexao();
$login = $_POST['login'];
$senha = $_POST['senha'];

$dados = array();
if(!$conn) {
    $dados['conexao_msg_erro'] = '<small class="form-text text-danger">erro na conexao</small>';
    echo json_encode($dados);
}
else if(empty(trim($login)) || empty(trim($senha))) {
    $dados['login_msg_erro'] = '<small class="form-text text-danger"> Login ou senha invalidos</small>';
    echo json_encode($dados);
}
else {
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE login = :login AND senha = :senha");
    $stmt->execute(array('login' => $login, 'senha' => $senha));
    $result = $stmt->fetchAll(); 
    if($result and $result[0]['is_adm'] == 1) {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $dados['redirect_to'] = 'pages/adm_page_workers.php';
        echo json_encode($dados);   
    }
    else if($result and $result[0]['is_adm'] == 0) {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $dados['redirect_to'] = 'pages/workers_page.php';
        echo json_encode($dados);
    }
    else {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        $dados['usuario_msg_erro'] = '<small class="form-text text-danger">Usuario nao cadastrado</small>';
        $dados['redirect_to'] = 'index.php';
        echo json_encode($dados);
    }
}
