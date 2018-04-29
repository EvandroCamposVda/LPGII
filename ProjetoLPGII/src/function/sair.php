<?php
    session_start();
    require_once '../utils/FlashMessage.php';
    
    FlashMessage::setMessage('Usuario saiu com sucesso !', FlashMessage::OK);
    header('Location: /index.php');