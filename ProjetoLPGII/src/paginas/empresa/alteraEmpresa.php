<?php 
session_start();
require_once "../../utils/FlashMessage.php";

include_once "../../dao/empresaDAO.php";
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
                        <li class="active"><a href="empresa.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Empresa</span></a></li>
                        <li><a href="../cliente/cliente.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cliente</span></a></li>
                        <li><a href="../produto/produto.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Produto</span></a></li>
                        <li><a href="../usuario/usuarios.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuarios</span></a></li>
                        <li><a href="../function/sair.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Sair</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
               <div class="user-dashboard">
                    <h1>Altera Empresa</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                            <form action="../../function/empresa/alterarEmpresa.php" method="POST">

                                    <?php
                                        $id = $_GET['id'];
                                        $dados = empresaDAO::buscaEspecifico($id);
                                        
                                        
                                        foreach($dados as $empresa) {

                                            echo '<label for="id">ID </label>';
                                            echo '<input type="text" class="form-control" id="_id" value="'.$empresa['id'].'" name="id" readonly="readonly" ><br>';
                                        
                                            echo '<label for="Nome">Nome </label>';
                                            echo '<input type="text" class="form-control" id="_nome" value="'.$empresa['nome'].'" name="nome" autofocus><br>';
                                            echo '<label for="cnpj">CNPJ: </label>';
                                            echo '<input type="text" class="form-control" id="_cnpj" value="'.$empresa['cnpj'].'" name="cnpj"><br>';
                                            echo '<label for="endereco">Endereço: </label>';
                                            echo '<input type="text" class="form-control" id="_endereco" value="'.$empresa['endereco'].'" name="endereco"><br>';
                                            echo '<label for="email">E-mail: </label>';
                                            echo '<input type="text" class="form-control" id="_email" value="'.$empresa['email'].'" name="email"><br>';
                                        }
                                    ?>
                                    <button type="submit" class="btn btn-primary alterar_Empresa">Alterar</button>
                                </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>