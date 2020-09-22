$(document).ready(function() {
    $.ajax({
        url: "../../worker/show_workers.php",
        method: "GET",
        dataType: "json",
    }).done(function(result) {
        result.usuarios.map((worker, index) => {
            $('#lista-usuarios').append(`<tr>
                                            <td>${index}</td>
                                            <td>${worker.login}</td>
                                            <td>${worker.active}</td>
                                            <td>${worker.num_trabalhos}</td>
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
                                        </tr>`)
        })
    })

    $("#form-add-trabalhador").submit(function(event) {
        event.preventDefault()
        var f_login = $('#login').val()
        var f_senha = $('#senha').val()

        $.ajax({
            url:  "../../worker/add_worker.php",
            method: "POST",
            data: {login: f_login, senha: f_senha},
            dataType: "json"
            
        }).done(function(result) {
            $('#login').val('')
            $('#senha').val('')
           
            if(result.conexao_msg_erro) {
                $('#conexao-msg').html(result.conexao_msg_erro)
            }
            else if(result.login_msg_erro) {
                console.log(result.login_msg_erro)
                $('#login-msg').html(result.login_msg_erro)
            }
            else if(result.senha_msg_erro) {
                console.log(result.senha_msg_erro)
                $('#senha-msg').html(result.senha_msg_erro)
            }
            else if(result.usuario_msg_erro) {
                $('#usuario-msg').html(result.usuario_msg_erro)
            }
            else {
                location.reload()  
            }
        })
    })
})



