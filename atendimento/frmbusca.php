<?php
  include('testasessao.php');
?>
<!doctype html>
<html lang="pt-br">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">    <title>Agenda Pública</title>
    <!-- FIM Bootstrap CSS -->
    <link rel="stylesheet" href="../cpa.css">
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a id="logos"class="navbar-brand" href="../principal.php">Agendamento</a>  
            </nav>
        </div>

        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
     
        <div class="nav-left-sidebar sidebar-dark">
                    <div class="menu-list">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="d-xl-none d-lg-none" href="../principal.php">Dashboard</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav flex-column">
                                    <li class="nav-divider">
                                        Menu
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="../usuario/frmbusca.php"><i class="fa fa-fw fa-users"></i>Usuario</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="../paciente/frmbusca.php"><i class="fa fa-male"></i>Paciente</a>
                                        </li>
										
										 <li class="nav-item">
                                            <a class="nav-link" href="../profissional/frmbusca.php"><i class="fas fa-user-md"></i>Profissional</a>
                                        </li>
										
										 <li class="nav-item">
                                            <a class="nav-link" href="../procedimento/frmbusca.php"><i class="fa fa-plus-circle"></i>Procedimento</a>
                                        </li>
										
										 <li class="nav-item">
                                            <a class="nav-link" href="../atendimento/frmbusca.php"><i class="fas fa-id-card"></i>Atendimento</a>
                                        </li>      
                                        <li class="nav-item">
                                        <a class="nav-link" onclick="sair()" data-toggle="modal" data-target="#sairmodal">
                                            <i class="fas fa-fw fa-times"></i>
                                            <span>Sair</span></a>
                                        </li>                                                                          

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
            <?php
                    if(isset($_GET['mess'])=='ok'){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Cadastrado com sucesso!!</strong> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>';
                    
                            }
                            if(isset($_GET['update'])=='ok'){
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Alterado com sucesso!!</strong> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>';
                            } 
                            if(isset($_GET['del'])=='podepá'){

                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Apagado com sucesso!!</strong> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>';
                            } 

                ?>	                               
           
            <div class="card-body">   
                <a style="float:left;" href="../principal.php" class="btn btn-info"><i class="fa fa-angle-left"> </i>Volta</a>
                <a style="float:right;" href="frmcad.php" class="btn btn-success"><i class="fa fa-plus"></i>Novo</a>    
            </div><br>

            <div class="page-header" id="topfrm">                
                  <h1 class="pageheader-title">Busca de atendimento</h1>
            </div>
 

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">

                                <form name="form1"method="POST" action="frmbusca.php">
                                
                                <div class="input-group mb-3">
                                            <input name="texto" type="search" class="form-control"placeholder="Pesquisa" aria-label="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                
                                </form>

                        </div>
                    </div>
                </div>

       </div>



            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
													<th>Codigo</th>
													<th>Paciente</th>
													<th>Profissional</th>
													<th>Procedimento</th>
													<th>Data</th>
													<th>Hora</th>
													<th>Local</th>
													<th>Opções</th>
                                            </tr>
                                        </thead>
                                            <tbody>

                                                                    
                                                <?php
                                                if(isset($_POST['texto'])) {
                                                    //Sai para pegar o Banco
                                                    include('../banco.php');
                                                    $texto = $_POST['texto'];
																		
												$sql = "select tbatendimento.cod_atendimento, tbcliente.nome as paciente,
                                                tbprofissional.nome as profissional, tbprocedimento.nome as procedimento,
                                                tbatendimento.data, tbatendimento.hora, tbatendimento.local
                                                from tbatendimento
                                                inner join 	tbcliente on(tbatendimento.cod_pac = tbcliente.cod_pac)
                                                inner join tbprofissional on(tbatendimento.cod_prof = tbprofissional.cod_prof)
                                                inner join tbprocedimento on(tbatendimento.cod_proced = tbprocedimento.cod_proced)
													where tbcliente.nome like '%$texto%'";

                                                    $consulta = $conexao->query($sql);

                                                    if($consulta == true){
                                                        if($consulta -> num_rows > 0){
                                                        
                                                        
                                                        while($linha = $consulta->fetch_array(MYSQLI_ASSOC)){
                                                            echo '<tr>
                                                                    <td>'.$linha['cod_atendimento'].'</td>
                                                                    <td>'.$linha['paciente'].'</td>
                                                                    <td>'.$linha['profissional'].'</td>
                                                                    <td>'.$linha['procedimento'].'</td>                                  
                                                                    <td>'.$linha['data'].'</td>
                                                                    <td>'.$linha['hora'].'</td> 
                                                                    <td>'.$linha['local'].'</td>
                                                                    <td>
                                                                        <a title="alterar"onclick="validaralter('.$linha['cod_atendimento'].')" class="btn btn-info"><i class="fa fa-edit"></i>
                                                                        <a title="delete" onclick="validardelete('.$linha['cod_atendimento'].')" class="btn btn-danger"><i class="fa fa-trash"></i>
                                                                    </td>
                                                                    </tr>';
                                                            } 
                                                        }

                                                    }
                                                }else{
                                                    include('../banco.php');
                                                   
                                                    
                                                    $sql = "select tbatendimento.cod_atendimento, tbcliente.nome as paciente,
                                                    tbprofissional.nome as profissional, tbprocedimento.nome as procedimento,
                                                    tbatendimento.data, tbatendimento.hora, tbatendimento.local
                                                    from tbatendimento
                                                    inner join 	tbcliente on(tbatendimento.cod_pac = tbcliente.cod_pac)
                                                    inner join tbprofissional on(tbatendimento.cod_prof = tbprofissional.cod_prof)
                                                    inner join tbprocedimento on(tbatendimento.cod_proced = tbprocedimento.cod_proced)
                                                    ";

                                                    $consulta = $conexao->query($sql);

                                                    if($consulta == true){
                                                    if($consulta -> num_rows > 0){
                                                        
                                                        
                                                        while($linha = $consulta->fetch_array(MYSQLI_ASSOC)){
                                                            echo '<tr>
                                                                    <td>'.$linha['cod_atendimento'].'</td>
                                                                    <td>'.$linha['paciente'].'</td>
                                                                    <td>'.$linha['profissional'].'</td>
                                                                    <td>'.$linha['procedimento'].'</td>                                 
                                                                    <td>'.$linha['data'].'</td>
                                                                    <td>'.$linha['hora'].'</td> 
                                                                    <td>'.$linha['local'].'</td>
                                                                    <td>
                                                                        <a title="alterar"onclick="validaralter('.$linha['cod_atendimento'].')" class="btn btn-info"><i class="fa fa-edit"></i>
                                                                        <a title="delete" onclick="validardelete('.$linha['cod_atendimento'].')" class="btn btn-danger"><i class="fa fa-trash"></i>
                                                                    </td>
                                                                    </tr>';
                                                        } 
                                                    }

                                                    }

                                                }
                                            ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <tr>
                                                
                                            </tr>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div id="rodape">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" >
                            <span> Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a></span>
                        </div>                     
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script>
    function validardelete(cod){
      if(confirm('deseja realmente excluir o registro?')){
        location.href="delete.php?cod="+cod;
      }
    }
    function validaralter(cod){
      if(confirm('deseja realmente alterar o registro?')){
        location.href="frmcadalter.php?cod="+cod;
      }
    }
  </script>
      <script>
    function sair(){
      if(confirm('deseja realmente sair?')){
        location.href="../sair.php";
      }
    }
  </script>
    
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>