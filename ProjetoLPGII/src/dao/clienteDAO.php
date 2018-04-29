<?php

    class clienteDAO {

        public static function add($Cliente){
            $db = Database::getConnection();

            $stmt = $db -> prepare('INSERT INTO cliente (nome, cnpj, endereco, email) VALUES (:nome, :cnpj, :endereco, :email)');
            $stmt -> execute(array(
                ':nome' => $Cliente -> getNome(),
                ':cnpj' => $Cliente -> getCnpj(),
                ':endereco' => $Cliente -> getEndereco(),
                ':email' => $Cliente -> getEmail()
            ));
            return $stmt->rowCount();
        }

        public static function alterar($Cliente){
            $db = Database::getConnection();

            $stmt = $db -> prepare('UPDATE cliente SET nome = :nome, cnpj = :cnpj, endereco = :endereco, email = :email WHERE id = :id;');
            $stmt -> execute(array(
                ':nome' => $Cliente -> getNome(),
                ':cnpj' => $Cliente -> getCnpj(),
                ':endereco' => $Cliente -> getEndereco(),
                ':email' => $Cliente -> getEmail(),
                ':id' => $Cliente -> getId()
            ));
            return $stmt->rowCount();
        }

        public static function buscaEspecifico($id){
            $db = Database::getConnection();

            $stmt = $db->prepare('SELECT * FROM cliente WHERE id = :id');
            $stmt->execute(array(
                   
                ':id' => $id 
            ));

            $rows = $stmt->fetchAll();

            return $rows;
        }

        public static function listar(){
            $db = Database::getConnection();

            $stmt = $db->prepare('SELECT * FROM cliente');
            $stmt->execute();

            $rows = $stmt->fetchAll();

            return $rows;
        }

        public static function excluir($id){
            $db = Database::getConnection();

            $stmt = $db->prepare('DELETE FROM cliente WHERE id = :id');
            $stmt->execute(array(
                   
                ':id' => $id //Corigir depois colocando o que vai receber, esta recebendo valor nulo
            ));

            $rows = $stmt->fetchAll();

            return $rows;
        }
    }