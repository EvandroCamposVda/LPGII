<?php 
session_start();
require_once "../../utils/FlashMessage.php";
include_once "../../dao/clienteDAO.php";

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
                    <h1>Cadastro Produto</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                            <form action="../../function/produto/cadastroProduto.php" method="POST">
                                <div class="col-sm-12">
                                    <label for="nome">Nome: </label>
                                    <input type="text" class="form-control" id="_nome" placeholder="Nome Produto" name="nome"><br>
                                    <label for="marca">Marca: </label>
                                    <input type="text" class="form-control" id="_marca" placeholder="Modelo" name="marca"><br>
                                    <label for="valor">Valor: </label>
                                    <input type="text" class="form-control" id="_valor" placeholder="13.90" name="valor"><br>
    
                                    <button type="submit" class="btn btn-primary cadastro" >Cadastrar</button>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>