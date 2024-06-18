<?php
require_once('classes/Usuario.class.php');
session_start();


if (!isset($_SESSION['usuario'])) {
    echo "Você precisa estar logado!";
    die();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
  
    $usuario = new Usuario();
    $usuario->id = $_SESSION['usuario']['id']; 
    $usuario->nome = strip_tags($_POST['nome']);
    $usuario->email = strip_tags($_POST['email']);
    $usuario->usuarioo = strip_tags($_POST['usuarioo']);
    $usuario->descricao = strip_tags($_POST['descricao']);
    $usuario->genero = strip_tags($_POST['genero']);


    $resultado = $usuario->Editar();

   
    if ($resultado == 1) {
        //atualiza as informações na sessão
        $_SESSION['usuario']['nome'] = $usuario->nome;
        $_SESSION['usuario']['email'] = $usuario->email;
        $_SESSION['usuario']['usuarioo'] = $usuario->usuarioo;
        $_SESSION['usuario']['descricao'] = $usuario->descricao;
        $_SESSION['usuario']['genero'] = $usuario->genero;

        header('Location: ../TelaPrincipal/static/config.php?sucesso=modificausu');
        exit; 
    } else {
        header('Location: ../TelaPrincipal/static/config.php?falha=1=modificausufalha');
        exit;
    }
} else {
    echo 'Erro. A página deve ser carregada por POST!';
}
?>
