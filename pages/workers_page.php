<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet" />
</head>
<body>
    <div class="navbar navbar-light">
    <a href="#" class="navbar-brand pt-3">
        <h1 class="display-04">JOB CONTR<i class="fas fa-cog"></i>L</h1>
    </a>
    </div>
    <div class="container d-flex flex-column pt-4">
    <div class="d-flex justify-content-between">
        <div>
        <h4 class="pb-2">
        <?php
        session_start();
        echo $_SESSION['login'];
        ?> 
        </h4> 
        <p class="text-muted">Trabalhos</p>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Trabalho</th>
            <th scope="col">Status</th>
            <th scope="col">Descrição</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Jardim</td>
            <td>active</td>
            <td>Fazer um jardim na obra 02</td>
            <td>
            <a href="#" class="btn btn-success" id="btn-action" data-toggle="tooltip" data-placement="top" title="Marcar como feito">
                <i class="fas fa-check"></i>
            </a>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>