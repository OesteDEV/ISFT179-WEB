    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="../css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<div class="breadcrumb">
		<h2>Ingreso</h2>
	</div>
	<div id="login" class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="active" id="login-form-link">Ingresar</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">

<?= $this->Form->create() ?>
									<div class="form-group">

<?= $this->Form->control(('email'), ['class' => 'form-control', 'placeholder' => 'Email', 'label' => false]) ?>
									</div>
									<div class="form-group">
<?= $this->Form->control(('password'), ['class' => 'form-control', 'placeholder' => 'Contraseña', 'label' => false]) ?>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
<?= $this->Form->button(('Login'),['class' =>'form-control btn btn-login']) ?>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">¿Olvidó su contraseña?</a>
												</div>
											</div>
										</div>
									</div>
<?= $this->Form->end() ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
