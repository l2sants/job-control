<?php 
include('./partials/header.html');
include('./partials/navbar.html');
?>
    <script src="../assets/js/worker.js"></script>
    <div class="container d-flex flex-column pt-4">
    <div class="d-flex justify-content-between">
        <div>
        <h4 class="pb-2">
            <?php
             session_start();
             echo $_SESSION['login'];
             ?> <span class="badge badge-danger">Adm</span> 
        </h4> 
        <p class="text-muted">Trabalhadores</p>
        </div>
        <div class="pb-4">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar um novo trabalhador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form id="form-add-trabalhador" method="POST">
                        <div class="form-group">
                            <label>Login</label>
                            <input type="text" id="login" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" id="senha" class="form-control">
                            <p id="conexao-msg"></p>
                            <p id="login-msg"></p>
                            <p id="senha-msg"></p>
                            <p id="usuario-msg"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Trabalhador</th>
            <th scope="col">status</th>
            <th scope="col">Trabalhos concluidos</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody id="lista-usuarios">
        <!-- lista os trabalhadores aqui! -->
        </tr>
        
        </tbody>
    </table>
    </div>
<?php include('./partials/footer.html') ?>