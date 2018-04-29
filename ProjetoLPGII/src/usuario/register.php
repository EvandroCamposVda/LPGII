<?php
    require_once '../entities/User.php';
    require_once '../dao/UserDAO.php';
    require_once '../utils/Database.php';
    require_once '../utils/FlashMessage.php';

    session_start();

    $user = new User;
    
    if ($_POST['senha'] == $_POST['senha_confirmada']) {
        $user->setUsername($_POST['usuario']);
        $user->setPassword($_POST['senha']);
        $user->setNomeMae($_POST['nomeMae']);
    } else {
        echo 'Senhas não conferem';        
    }

    $linhasAfetadas = UserDAO::add($user);
    
    if ($linhasAfetadas > 0) {
        FlashMessage::setMessage('Usuário cadastrado com sucesso.', FlashMessage::OK);
        header('Location: /index.php');
    } else {
        FlashMessage::setMessage('Ocorreu um problema ao cadastrar o usuário.', FlashMessage::ERROR);
        header('Location: /src/usuario/sign_up.php');
    }

    