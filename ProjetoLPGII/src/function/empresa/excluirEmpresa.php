<?php
    require_once '../../entities/empresa.php';
    require_once '../../dao/empresaDAO.php';
    require_once '../../utils/Database.php';

    session_start();

    $Empresa = new Empresa;

    $id = ($_GET['id']);

    $linhasAfetadas = empresaDAO::excluir($id);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Empresa Excluido com Sucesso !');
		    window.location.href='../../paginas/empresa/empresa.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao Excluir Empresa !');
		    window.location.href='cadastroEmpresa.php';
         </script>";
    }