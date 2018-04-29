<?php
    require_once '../../entities/cliente.php';
    require_once '../../dao/clienteDAO.php';
    require_once '../../utils/Database.php';

    session_start();

    $Cliente = new Cliente;

    $Cliente ->setId($_GET['id']);

    clienteDAO::buscaEspecifico($Cliente);

    echo "<script>
		    window.location.href='../../paginas/cliente/alteraCliente.php';
         </script>";
    
    