<?php
require_once('classes/Atividade.class.php');
session_start();
//verificar se a pessoa esta ou nao logada:
    if(!isset($_SESSION['usuario'])){
        echo "voce precisa estar logado!";
        die();
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $p = new Atividade();
    $p->titulo = strip_tags($_POST['titulo']);
    $p->descricao = strip_tags($_POST['descricao']);
    $p->data_criacao = strip_tags($_POST['dataini']);
    $p->prazo = strip_tags($_POST['dataterm']);
    $p->tipo = strip_tags($_POST['tipo']);
    $p->id = strip_tags($_POST['id']);
    //verificar se esta chegando uma foto no formulario;
 
        if($p->Editar() == 1){
            header('Location: ../TelaPrincipal/static/exibirtarefas.php?sucesso=modificarok');
        }else{
            header('Location: ../TelaPrincipal/static/exibirtarefas.php?falha=1=modificarfalha');
        }
    }else {
    echo 'Erro. A pagina deve ser carregada por POST!';
}
