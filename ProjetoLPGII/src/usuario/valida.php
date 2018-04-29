<?php
    session_start();
    require_once '../entities/User.php';
    require_once '../dao/UserDAO.php';
    require_once '../utils/Database.php';
    require_once '../utils/FlashMessage.php';
    

    $user = new User;
    
    $nomeMae = UserDAO::nomeMae($_POST['usuario']);

    foreach ($nomeMae as $mae) {
        if ($mae['nomeMae'] == $_POST['resposta']){

            if ($_POST['senha'] == $_POST['senha_confirmada']){
                $user->setPassword($_POST['senha']);
                $user->setUsername($_POST['usuario']);
                $resultado = UserDAO::alterPassword($user);

                if ($resultado > 0){
                   FlashMessage::setMessage('Usuário atualizado com sucesso.', FlashMessage::OK);
                   header('Location: /index.php');
                }else {
                    FlashMessage::setMessage('Não foi possivel atualizar no momento.', FlashMessage::ERROR);
                    header('Location: /index.php');
                }
            }else {
                FlashMessage::setMessage('Senhas não conferem.', FlashMessage::ERROR);
                header('Location: /index.php');
            }
        }else {
            FlashMessage::setMessage('Nome mae incorreto !', FlashMessage::ERROR);
            header('Location: /index.php');
        }
    }