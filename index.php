<?php 
include('./pages/partials/header.html');
include('./pages/partials/navbar.html');
?>
    <script src="assets/js/login.js"></script>
    <div class="container d-flex justify-content-center">
        <div>
            <form id="form-login" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" id="login" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="senha">
                <p id="login-msg"></p>
            </div>
            <button type="submit" class="btn btn-primary float-right">Logar</button>
            <p id="conexao-msg"></p>
            <p id="usuario-msg"></p>
            </form>
        </div>
    </div>
    
<?php include('./pages/partials/footer.html')?>
