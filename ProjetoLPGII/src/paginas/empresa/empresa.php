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
                        <li><a href="../../function/sair.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Sair</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
               <div class="user-dashboard">

                    <h1>Lista de Empresas</h1>
                    <a href="cadastroEmpresa.php" class="btn btn-primary botao">Cadastrar</a>   
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                        
                            <br>
                            
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF/CNPJ</th>
                                    <th>Endereço</th>
                                    <th>E-mail</th>
                                    <th></th>
                                </tr>
                            
                            <?php
                               $dados = empresaDAO::listar();

                                foreach($dados as $empresa) {
                                    echo "<tr>";
                                        echo "<td>".$empresa['id']."</td>";
                                        echo "<td>".$empresa['nome']."</td>";
                                        echo "<td>".$empresa['cnpj']."</td>";
                                        echo "<td>".$empresa['endereco']."</td>";
                                        echo "<td>".$empresa['email']."</td>";
                                        echo "<td>".
                                        '<a href="alteraEmpresa.php?id='.$empresa['id'].'"><button type="button" rel="tooltip" class="btn btn-info btn-round"> 
                                            <i class = "material-icons">editar</i></button></a>'.
                                        '<a href="../../function/empresa/excluirEmpresa.php?id='.$empresa['id'].'"><button type="button" rel="tooltip" class="btn btn-danger"> 
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