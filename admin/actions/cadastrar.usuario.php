<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/Usuario.class.php');

    $u = new Usuario();
    $u->nome = $_POST['nome'];
    $u->usuarioo = $_POST['usuarioo'];
    $u->email = $_POST['email'];
    $u->descricao = $_POST['descricao'];
    $u->senha = $_POST['senha']; 
   
    if($u->Cadastrar() == 1){
        // Redirecionar de voltar para login:
        header('Location: ../TelaPrincipal/static/login.php?sucesso=cadastrook');
    }else{
        header('Location: ../TelaPrincipal/static/login.php?falha=cadastrofalha');
    }

}else{
    echo 'Erro. A página deve ser carregada por POST';
}

?>