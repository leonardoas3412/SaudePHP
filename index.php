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
    <title>Login</title>
</head>

<body class="bg-dark">

				
	<div class="container">
		<div class="card card-login mx-auto mt-5">
		  <div class="card-header"> <img src="logo.png"><br><i class="fa fa-lock"></i> <b>Acesso</b></div>
		  <div class="card-body">	
															
											   
									
				<form name="form1" id="form1" method="POST" action="login.php">
		  

					  <div class="form-group">
						  <label for="example-email" class="col-md-12">Email</label>
						  <div class="col-md-12">
							  <input type="email" name="email" class="form-control form-control-line" name="example-email" id="example-email">
						  </div>
					  </div>
					  <div class="form-group">
						  <label class="col-md-12">Senha</label>
						  <div class="col-md-12">
							  <input type="password" name="senha" class="form-control form-control-line">
						  </div>
					  </div>

					<!--
					<div class="form-group">
					  <div class="checkbox">
						<label>
						  <input type="checkbox" value="remember-me">
							  Lembrar senha
						</label>
					  </div>
					</div>
						-->	
					
					  <div class="form-group">
						  <div class="col-sm-12">
							  <button type="submit" class="btn btn-primary btn-block">Entrar <i class="fa fa-check"></i></button>
						  </div>
					  </div>

				</form>
								
						

        


								<!--
										<div class="form-group">
											<label class="col-md-12">Phone No</label>
											<div class="col-md-12">
												<input type="text" placeholder="123 456 7890" class="form-control form-control-line">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12">Message</label>
											<div class="col-md-12">
												<textarea rows="5" class="form-control form-control-line"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-12">Select Country</label>
											<div class="col-sm-12">
												<select class="form-control form-control-line">
													<option>London</option>
													<option>India</option>
													<option>Usa</option>
													<option>Canada</option>
													<option>Thailand</option>
												</select>
											</div>
										</div>


									</form>

								</div>
							</div>
						</div>
					  -->

					<?php
					  if(isset($_GET['mess'])){
						if($_GET['mess'] == 'erro'){
						  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								 <strong>Atenção!</strong> Erro de login!
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								 </button>
								</div>';
								//melhor aluno=expedito
								//pior aluno
								//melhor  prof=spe
						}
						if($_GET['mess'] == 'session'){
						  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
								 <strong>Atenção!</strong> Usuário sem sessão!
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								 </button>
								</div>';
						}
						if($_GET['mess'] == 'logout'){
						  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
								 <strong>Atenção!</strong> Logout realizado com sucesso!
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								 </button>
								</div>';
						}
					  }
					?>
			</div>
		</div>	
	</div> 
  

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/plugins/d3/d3.min.js"></script>
    <script src="assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    
</body>

</html>
