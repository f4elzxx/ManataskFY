<?php
 
if(isset($_GET['id'])){
    // Apagar:
    require_once('classes/Atividade.class.php');
    $p = new Atividade();
    // Obtendo o id da URL:
    $p->id = $_GET['id'];
    if($p->Apagar() == 1){
        // Redirecionar de volta ao index.php:
        header('Location: ../TelaPrincipal/static/exibirtarefas.php?sucesso=exlcuirok');
    }else{
        header('Location: ../exibirtarefas.php?falha=1');
    }
}else{
    echo "Erro! Informe a tarefa a ser apagado!";
}
 
 
?>