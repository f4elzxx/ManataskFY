<?php

require_once('Banco.class.php');

class Usuario {
    // Atributos:
    public $id;
    public $nome;
    public $usuarioo;
    public $email;
    public $senha;
    public $descricao;
    public $genero;

    // Métodos:
    public function Cadastrar() {
        $sql = "INSERT INTO usuarios (nome, usuarioo, email, senha, descricao) 
                VALUES (?, ?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);

        $hash = hash("sha256", $this->senha);

        try {
            $comando->execute([$this->nome, $this->usuarioo, $this->email, $hash, $this->descricao]);
            Banco::desconectar();
            return $comando->rowCount(); // Retorna o número de linhas afetadas
        } catch(PDOException $e) {
           Banco::desconectar();
           echo 'Erro ao cadastrar usuário: ' . $e->getMessage();
            return 0; // Retorna 0 para indicar falha
        }
    }

    public function Logar() {
        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $hash = hash('sha256', $this->senha);
        $comando->execute([$this->email, $hash]);

        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();

        return $arr_resultado;
    }

    public function Editar() {
        $sql = "UPDATE usuarios SET nome=?, usuarioo=?, email=?, descricao=?, genero=? WHERE id=?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->nome, $this->usuarioo, $this->email, $this->descricao, $this->genero, $this->id]);
        Banco::desconectar();
        return $comando->rowCount();
    }
    public function ListarTudo(){
        $sql = "SELECT * FROM usuarios";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute();
        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }
    
}

?>
