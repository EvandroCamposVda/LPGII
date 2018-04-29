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
                    <li ><a href="../dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="../empresa/empresa.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Empresa</span></a></li>
                        <li class="active"><a href="cliente.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cliente</span></a></li>
                        <li><a href="../produto/produto.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Produto</span></a></li>
                        <li><a href="../usuario/usuarios.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuarios</span></a></li>
                        <li><a href="../../function/sair.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Sair</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
               <div class="user-dashboard">
                    <h1>Cadastro Cliente</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                            <form action="../../function/cliente/cadastroCliente.php" method="POST">
                                <div class="col-sm-12">
                                    <label for="nome">Nome: </label>
                                    <input type="text" class="form-control" id="_nome" placeholder="Nome Cliente" name="nome"><br>
                                    <label for="cnpj">CPF/CNPJ: </label>
                                    <input type="text" class="form-control" id="_cnpj" placeholder="123.456.789/0123-45" name="cnpj"><br>
                                    <label for="endereco">Endereço: </label>
                                    <input type="text" class="form-control" id="_endereco" placeholder="Endereço" name="endereco"><br>
                                    <label for="email">E-mail: </label>
                                    <input type="text" class="form-control" id="_email" placeholder="exemplo@exemplo.com" name="email"><br>
                

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