<?php 
session_start();
require_once "../../utils/FlashMessage.php";

include_once "../../dao/produtoDAO.php";
include_once "../../utils/Database.php";
include_once "../../partials/_verify_auth.php";
include_once "../../partials/_head.php" 

?>

    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li><a href="../dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="../empresa/empresa.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Empresa</span></a></li>
                        <li><a href="../cliente/cliente.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cliente</span></a></li>
                        <li class="active"><a href="produto.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Produto</span></a></li>
                        <li><a href="../usuario/usuarios.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuarios</span></a></li>
                        <li><a href="../function/sair.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Sair</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
               <div class="user-dashboard">
                    <h1>Lista de Produtos</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                        <a href="cadastroProduto.php" class="btn btn-primary botao">Cadastrar</a>
                        <br>
                        <br>
                            <table class="table">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nome</th>
                                    <th>Marca</th>
                                    <th>Valor</th>
                                    <th></th>
                                </tr>
                            
                            <?php
                               $dados = produtoDAO::listar();

                                foreach($dados as $produto) {
                                    echo "<tr>";
                                        echo "<td>".$produto['id']."</td>";
                                        echo "<td>".$produto['nome']."</td>";
                                        echo "<td>".$produto['marca']."</td>";
                                        echo "<td>".$produto['valor']."</td>";
                                        echo "<td>".
                                        '<a href="alteraProduto.php?id='.$produto['id'].'"><button type="button" rel="tooltip" class="btn btn-info btn-round"> 
                                            <i class = "material-icons">editar</i></button></a>'.
                                        '<a href="../../function/produto/excluirProduto.php?id='.$produto['id'].'"><button type="button" rel="tooltip" class="btn btn-danger"> 
                                            <i class = "material-icons">excluir</i></button></a>'.
                                        "</td>";
                                        
                                    echo "</tr>";
                                }
                            ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>