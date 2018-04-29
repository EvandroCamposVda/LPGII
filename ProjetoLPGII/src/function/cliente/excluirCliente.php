<?php
    require_once '../../entities/cliente.php';
    require_once '../../dao/clienteDAO.php';
    require_once '../../utils/Database.php';

    session_start();

    $Cliente = new Cliente;

    $id = ($_GET['id']);

    $linhasAfetadas = clienteDAO::excluir($id);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Cliente Excluido com Sucesso !');
		    window.location.href='../../paginas/cliente/cliente.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao Excluir Cliente !');
		    window.location.href='cadastroCliente.php';
         </script>";
    }