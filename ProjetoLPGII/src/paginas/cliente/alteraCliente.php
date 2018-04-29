<?php 
session_start();
require_once "../../utils/FlashMessage.php";

include_once "../../dao/clienteDAO.php";
include_once "../../utils/Database.php";
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
                    <h1>Alterar Cliente</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                                <div class="col-sm-12">

                                <br>
                                    
                                <form action="../../function/cliente/alterarCliente.php" method="POST">

                                    <?php
                                        $id = $_GET['id'];
                                        $dados = clienteDAO::buscaEspecifico($id);
                                        
                                        
                                        foreach($dados as $cliente) {

                                            echo '<label for="id">ID </label>';
                                            echo '<input type="text" class="form-control" id="_id" value="'.$cliente['id'].'" name="id" readonly="readonly" ><br>';
                                           
                                            echo '<label for="Nome">Nome </label>';
                                            echo '<input type="text" class="form-control" id="_nome" value="'.$cliente['nome'].'" name="nome" autofocus><br>';
                                            echo '<label for="cnpj">CNPJ: </label>';
                                            echo '<input type="text" class="form-control" id="_cnpj" value="'.$cliente['cnpj'].'" name="cnpj"><br>';
                                            echo '<label for="endereco">Endereço: </label>';
                                            echo '<input type="text" class="form-control" id="_endereco" value="'.$cliente['endereco'].'" name="endereco"><br>';
                                            echo '<label for="email">E-mail: </label>';
                                            echo '<input type="text" class="form-control" id="_email" value="'.$cliente['email'].'" name="email"><br>';
                                        }
                                    ?>
                    
                                    <button type="submit" class="btn btn-primary alterar" >Alterar</button>

                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>