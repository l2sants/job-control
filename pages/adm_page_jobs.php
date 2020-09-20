<?php 
include('./partials/header.html');
include('./partials/navbar.html');
?>
  
    <div class="container d-flex flex-column pt-4">
    <div class="d-flex justify-content-between">
        <div>
        <h4 class="pb-2">
            l2sants <span class="badge badge-danger">Adm</span> 
        </h4> 
        <p class="text-muted">Trabalhos</p>
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
                <h5 class="modal-title" id="exampleModalLabel">Adicionar um novo trabalho</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="">
                    <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Trabalhadores</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>fulano1</option>
                        <option>fulano2</option>
                        <option>fulano3</option>
                        <option>fulano4</option>
                        <option>fulano5</option>
                    </select>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Trabalho</th>
            <th scope="col">status</th>
            <th scope="col">descrição</th>
            <th scope="col">trabalhador</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Manutenção residencia</td>
            <td>active</td>
            <td>
                <p>
                    problemas na parte eletrica
                </p>
            </td>
            <td>
            joao
            </td>
            <td>
            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit worker info">
                <i class="fas fa-pencil-alt"></i>
            </a>
            <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Active worker">
                <i class="fas fa-check"></i>
            </a>
            <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Deactive worker">
                <i class="fas fa-times"></i>
            </a>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
<?php include('./partials/navbar.html') ?>