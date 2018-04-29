<?php
    require_once '../../entities/cliente.php';
    require_once '../../dao/clienteDAO.php';
    require_once '../../utils/Database.php';

    session_start();

    $Cliente = new Cliente;

    $Cliente ->setNome($_POST['nome']);
    $Cliente ->setCnpj($_POST['cnpj']);
    $Cliente ->setEndereco($_POST['endereco']);
    $Cliente ->setEmail($_POST['email']);

    $linhasAfetadas = clienteDAO::add($Cliente);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Cliente cadastrado com Sucesso !');
		    window.location.href='../../paginas/cliente/cliente.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao cadastrar Cliente !');
		    window.location.href='cadastroCliente.php';
         </script>";
    }
