<?php
    require_once '../../entities/produto.php';
    require_once '../../dao/produtoDAO.php';
    require_once '../../utils/Database.php';

    session_start();

    $Produto = new Produto;

    $id = ($_GET['id']);

    $linhasAfetadas = produtoDAO::excluir($id);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Produto Excluido com Sucesso !');
		    window.location.href='../../paginas/produto/produto.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao Excluir Produto !');
		    window.location.href='../../produto/cadastroProduto.php';
         </script>";
    }