<?php
    require_once '../../entities/empresa.php';
    require_once '../../dao/empresaDAO.php';
    require_once '../../utils/Database.php';

    session_start();

    $Empresa1 = new empresa;

    $Empresa1 ->setNome($_POST['nome']);
    $Empresa1 ->setCnpj($_POST['cnpj']);
    $Empresa1 ->setEndereco($_POST['endereco']);
    $Empresa1 ->setEmail($_POST['email']);

    $linhasAfetadas = EmpresaDAO::add($Empresa1);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Empresa cadastrado com Sucesso !');
		    window.location.href='../../paginas/empresa/empresa.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao cadastrar Empresa !');
		    window.location.href='../../paginas/empresa/empresa.php';
         </script>";
    }
