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
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
        <!-- FIM Bootstrap CSS -->
        <link rel="stylesheet" href="cpa.css">
    <title>Agenda Pública</title>
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
                <a id="logos"class="navbar-brand" href="#">Agendamento</a>  
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
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
                                            <a class="nav-link" href="usuario/frmbusca.php"><i class="fa fa-fw fa-users"></i>Usuario</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="paciente/frmbusca.php"><i class="fa fa-male"></i>Paciente</a>
                                        </li>
										
										 <li class="nav-item">
                                            <a class="nav-link" href="profissional/frmbusca.php"><i class="fas fa-user-md"></i>Profissional</a>
                                        </li>
										
										 <li class="nav-item">
                                            <a class="nav-link" href="procedimento/frmbusca.php"><i class="fa fa-plus-circle"></i>Procedimento</a>
                                        </li>
										
										 <li class="nav-item">
                                            <a class="nav-link" href="atendimento/frmbusca.php"><i class="fas fa-id-card"></i>Atendimento</a>
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
		  if(isset($_GET['mess'])){
			 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Login Realizado com Sucesso!</strong> Seja bem-vindo!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				  </div>';
		  }
		?>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
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

  <!-- Logout Modal
  <div class="modal fade" id="sairmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agenda</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Deseja sair do sistema?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="sair.php">Confirmar</a>
        </div>
      </div>
    </div>
  </div>-->

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
    
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
    <script>
    function sair(){
      if(confirm('deseja realmente sair?')){
        location.href="sair.php";
      }
    }
  </script>
</body>
 
</html>