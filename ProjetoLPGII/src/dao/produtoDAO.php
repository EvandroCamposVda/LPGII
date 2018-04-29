<?php

    class produtoDAO {

        public static function add($Produto){
            $db = Database::getConnection();

            $stmt = $db -> prepare('INSERT INTO produto (nome, marca, valor) VALUES (:nome, :marca, :valor)');
            $stmt -> execute(array(
                ':nome' => $Produto -> getNome(),
                ':marca' => $Produto -> getMarca(),
                ':valor' => $Produto -> getValor()
            ));
            return $stmt->rowCount();
        }

        public static function listar(){
            $db = Database::getConnection();

            $stmt = $db->prepare('SELECT * FROM produto');
            $stmt->execute();

            $rows = $stmt->fetchAll();

            return $rows;
        }

        public static function buscaEspecifico($id){
            $db = Database::getConnection();

            $stmt = $db->prepare('SELECT * FROM produto WHERE id = :id');
            $stmt->execute(array(
                   
                ':id' => $id 
            ));

            $rows = $stmt->fetchAll();

            return $rows;
        }

        public static function alterar($Produto){
            $db = Database::getConnection();

            $stmt = $db -> prepare('UPDATE produto SET nome = :nome, marca = :marca, valor = :valor WHERE id = :id;');
            $stmt -> execute(array(
                ':nome' => $Produto -> getNome(),
                ':marca' => $Produto -> getMarca(),
                ':valor' => $Produto -> getValor(),
                ':id' => $Produto -> getId()
            ));
            return $stmt->rowCount();
        }

        public static function excluir($id){
            $db = Database::getConnection();

            $stmt = $db->prepare('DELETE FROM produto WHERE id = :id');
            $stmt->execute(array(
                   
                ':id' => $id
            ));

            $rows = $stmt->fetchAll();

            return $rows;
        }
    }