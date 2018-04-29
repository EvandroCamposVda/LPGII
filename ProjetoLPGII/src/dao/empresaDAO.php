<?php

    class EmpresaDAO {

        public static function add($empresa){
            $db = Database::getConnection();

            $stmt = $db -> prepare('INSERT INTO empresa (nome, cnpj, endereco, email) VALUES (:nome, :cnpj, :endereco, :email)');
            $stmt -> execute(array(
                ':nome' => $empresa -> getNome(),
                ':cnpj' => $empresa -> getCnpj(),
                ':endereco' => $empresa -> getEndereco(),
                ':email' => $empresa -> getEmail()
            ));
            return $stmt->rowCount();
        }

        public static function listar(){
            $db = Database::getConnection();

            $stmt = $db->prepare('SELECT * FROM empresa');
            $stmt->execute();

            $rows = $stmt->fetchAll();

            return $rows;
        }

        public static function buscaEspecifico($id){
            $db = Database::getConnection();

            $stmt = $db->prepare('SELECT * FROM empresa WHERE id = :id');
            $stmt->execute(array(
                   
                ':id' => $id 
            ));

            $rows = $stmt->fetchAll();

            return $rows;
        }

        public static function alterar($Empresa){
            $db = Database::getConnection();

            $stmt = $db -> prepare('UPDATE empresa SET nome = :nome, cnpj = :cnpj, endereco = :endereco, email = :email WHERE id = :id;');
            $stmt -> execute(array(
                ':nome' => $Empresa -> getNome(),
                ':cnpj' => $Empresa -> getCnpj(),
                ':endereco' => $Empresa -> getEndereco(),
                ':email' => $Empresa -> getEmail(),
                ':id' => $Empresa -> getId()
            ));
            return $stmt->rowCount();
        }

        public static function excluir($id){
            $db = Database::getConnection();

            $stmt = $db->prepare('DELETE FROM empresa WHERE id = :id');
            $stmt->execute(array(
                   
                ':id' => $id
            ));

            $rows = $stmt->fetchAll();

            return $rows;
        }

    }