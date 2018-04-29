<?php
    require_once '../entities/User.php';
    require_once '../dao/UserDAO.php';
    require_once '../utils/Database.php';
    require_once '../utils/FlashMessage.php';

    session_start();

    $user = new User;
    
    $user->setUsername($_POST['usuario']);
    $user->setPassword($_POST['senha']);
    
    $status = UserDAO::verify($user);
    
    if ($status) {
        $_SESSION['user'] = serialize($user);
        FlashMessage::setMessage('Usuário logado com sucesso.', FlashMessage::OK);
        header('Location: ../paginas/dashboard.php');
    } else {
        FlashMessage::setMessage('Credenciais incorretas favor tentar novamente.', FlashMessage::ERROR);
        header('Location: ../../../index.php');
    }

    