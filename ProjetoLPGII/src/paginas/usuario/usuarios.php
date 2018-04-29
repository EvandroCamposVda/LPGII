<?php 
session_start();
require_once "../../utils/FlashMessage.php";

include_once "../../dao/UserDAO.php";
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
                        <li><a href="../cliente/cliente.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cliente</span></a></li>
                        <li><a href="../produto/produto.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Produto</span></a></li>
                        <li class="active"><a href="usuarios.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuarios</span></a></li>
                        <li><a href="../../function/sair.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Sair</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
               <div class="user-dashboard">
                    <h1>Usuarios</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                        
                        <table class="table">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Usuario</th>
                                    <th></th>
                                </tr>
                            
                            <?php
                               $dados = UserDAO::listar();

                                foreach($dados as $usuario) {
                                    echo "<tr>";
                                        echo "<td>".$usuario['id']."</td>";
                                        echo "<td>".$usuario['username']."</td>";
                                        echo "<td></td>";
                                    echo "</tr>";
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>