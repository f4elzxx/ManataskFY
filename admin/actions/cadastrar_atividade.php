<?php

// Verificar se a página está sendo carregada por POST:
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once('classes/Atividade.class.php');
        $c = new Atividade();
        $c->titulo = strip_tags($_POST['titulo']);
        $c->descricao = strip_tags($_POST['descricao']);
        $c->data_criacao = date($_POST['dataini']);
        $c->prazo = date($_POST['dataterm']);
        $c->tipo = strip_tags($_POST['tipo']);
        if($c->Cadastrar() == 1){
            header('Location: ../TelaPrincipal/static/addtarefas.php?sucesso=tarefaok');
        }else{
            echo "Falha ao cadastrar categoria.";
        }
    }else{
        echo "Essa página deve ser carregada por POST";
    }



?>