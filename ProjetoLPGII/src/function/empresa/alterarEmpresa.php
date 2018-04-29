<?php
    require_once '../../entities/empresa.php';
    require_once '../../dao/empresaDAO.php';
    require_once '../../utils/Database.php';

    session_start();

    $Empresa = new Empresa;

    $Empresa ->setNome($_POST['nome']);
    $Empresa ->setCnpj($_POST['cnpj']);
    $Empresa ->setEndereco($_POST['endereco']);
    $Empresa ->setEmail($_POST['email']);
    $Empresa ->setId($_POST['id']);

    $linhasAfetadas = empresaDAO::alterar($Empresa);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Empresa alterado com Sucesso !');
		    window.location.href='../../paginas/empresa/empresa.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao alterado Empresa !');
		    window.location.href='../../paginas/empresa/empresa.php';
         </script>";
    }
