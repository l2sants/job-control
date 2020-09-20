$(document).ready(function() {   
    $("#form-login").submit(function(event) {
        event.preventDefault()
        var u_login = $('#login').val()
        var u_senha = $('#senha').val()

        $.ajax({
            url:  "../../login.php",
            method: "POST",
            data: {login: u_login, senha: u_senha},
            dataType: "json"
            
        }).done(function(result) {
            $('#login').val('')
            $('#senha').val('')
            if(result.conexao_msg_erro) {
                $('#conexao-msg').html(result.conexao_msg_erro)
            }
            else if(result.login_msg_erro) {
                $('#login-msg').html(result.login_msg_erro)
            }
            else if(result.usuario_msg_erro) {
                $('#usuario-msg').html(result.usuario_msg_erro)
            }
            else {
                location.href = result.redirect_to
            }
        })
   
    })
})