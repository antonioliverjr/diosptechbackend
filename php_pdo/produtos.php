<?php

declare(strict_types=1);

class Produto{

    /**
     * @var 
     */

    private $conexao;

    public function __construct(){
        try{
            $this->conexao = new PDO('pgsql:host=localhost;dbname=aulapdo','postgres', 'gaproject');
        } catch(Exception $e){
        echo $e->getMessage();
        die();
        }
    }

    public function list():array{
        $sql = 'SELECT * FROM produtos';
        $produtos = [];
        foreach ($this->conexao->query($sql) as $value){
            array_push($produtos, $value);
        }
        return $produtos;
    }

    public function insert(string $descricao, float $valor):int{
        $sql = 'insert into PRODUTOS(descricao, valor) values(?, ?)';
        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $valor);
        $prepare->execute();

        try{
            $prepare->rowCount();
        } catch(Exception $e) {
            echo $e->getMessage();
            die();
        }

        return $prepare->rowCount();
    }

    public function update(int $id, string $descricao, float $valor):int{
        $sql = 'update PRODUTOS set descricao = ?, valor = ? where id = ?';
        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $valor);
        $prepare->bindParam(3, $id);
        $prepare->execute();

        try{
            $prepare->rowCount();
        } catch(Exception $e) {
            echo $e->getMessage();
            die();
        }

        return 'Cadastro atualizado com sucesso!';
    }

    public function delete(int $id):int{
        $sql = 'delete from PRODUTOS where id = ?';
        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $id);
        $prepare->execute();

        try{
            $prepare->rowCount();
        } catch(Exception $e) {
            echo $e->getMessage();
            die();
        }

        return $prepare->rowCount();
    }

}