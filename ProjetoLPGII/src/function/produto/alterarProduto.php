<?php
    require_once '../entities/produto.php';
    require_once '../dao/produtoDAO.php';
    require_once '../utils/Database.php';

    session_start();

    $Produto = new Produto;

    $Produto ->setNome($_POST['nome']);
    $Produto ->setMarca($_POST['marca']);
    $Produto ->setValor($_POST['valor']);
    $Produto ->setId($_POST['id']);

    $linhasAfetadas = produtoDAO::alterar($Produto);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Produto alterado com Sucesso !');
		    window.location.href='../paginas/produto.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao alterado Produto !');
		    window.location.href='../paginas/cadastroProduto.php';
         </script>";
    }
