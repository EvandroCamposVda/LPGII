<?php
    require_once '../../entities/produto.php';
    require_once '../../dao/produtoDAO.php';
    require_once '../../utils/Database.php';

    session_start();

    $Produto = new Produto;

    $Produto ->setNome($_POST['nome']);
    $Produto ->setMarca($_POST['marca']);
    $Produto ->setValor($_POST['valor']);

    $linhasAfetadas = ProdutoDAO::add($Produto);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Produto cadastrado com Sucesso !');
		    window.location.href='../../paginas/produto/produto.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao cadastrar Produto !');
		    window.location.href='cadastroProduto.php';
         </script>";
    }
