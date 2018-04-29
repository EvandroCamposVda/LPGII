<?php

class UserDAO {

    public static function add($user) {
        $db = Database::getConnection();

        $stmt = $db->prepare('INSERT INTO users (username, password, nomeMae) VALUES (:username, :password, :nomeMae)');
        $stmt->execute(array(
          ':username' => $user->getUsername(),
          ':password' => $user->getPassword(),
          ':nomeMae' => $user->getNomeMae()
        ));

        return $stmt->rowCount();
    }

    public static function verify($user) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare('SELECT * FROM users where username = :username');
        $stmt->execute(array(
                ':username' => $user->getUsername()
        ));

        $rows = $stmt->fetchAll();

        $user_db_password = $rows[0]['password'];

        if ($user->getPassword() == $user_db_password) {
            return true;
        } else {
            return false;
        }
    }

    public static function alterPassword($user){
        $db = Database::getConnection();

        $stmt = $db -> prepare ('UPDATE users SET password = :password WHERE users.username = :username');
        $stmt -> execute(array(
            ':password' => $user->getPassword(),
            ':username' => $user->getUsername()
        ));

        return $stmt->rowCount();
    }

    public static function listar(){
        $db = Database::getConnection();

        $stmt = $db->prepare('SELECT id, username FROM users');
        $stmt->execute();

        $rows = $stmt->fetchAll();

        return $rows;
        
    }

    public static function nomeMae($user){
        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT nomeMae FROM users WHERE username = :username');
        $stmt->execute(array(
            ':username' => $user
        ));

        $rows = $stmt->fetchAll();

        return $rows;
    }
}