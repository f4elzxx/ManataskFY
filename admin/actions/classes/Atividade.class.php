<?php

require_once('Banco.class.php');

class Atividade{
    public $id;
    public $titulo;
    public $descricao;
    public $data_criacao;
    public $prazo;
    public $tipo;


    public function Cadastrar(){
        $sql = "INSERT INTO tarefas (titulo, descricao, data_criacao, prazo, tipo) 
        VALUES (?, ?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->titulo,$this->descricao,$this->data_criacao,$this->prazo, $this->tipo]);
        Banco::desconectar();
        return $comando->rowCount();
       
    }

    public function ListarTudo(){
        $sql = "SELECT * FROM tarefas";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute();
        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }
    public function ListarPorId(){
        $sql = "SELECT * FROM tarefas WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id]);

        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return  $arr_resultado;

    }
    public function Editar(){
        $sql = "UPDATE tarefas SET titulo=?, descricao=?, data_criacao=?, tipo=?, prazo=? WHERE id=?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->titulo, $this->descricao, $this->data_criacao, $this->tipo, $this->prazo, $this->id]);
        Banco::desconectar();
        return $comando->rowCount();

    }
    public function Apagar(){
        $sql = "DELETE FROM tarefas WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id]);
        Banco::desconectar();
        return $comando->rowCount();

    }
}


?>