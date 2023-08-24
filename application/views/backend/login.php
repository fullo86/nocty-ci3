<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Page Title -->
    <title>ADMINISTRATOR</title>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="#" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/backend/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="mb-MD mt-MD mr-MD btn btn-lg btn-primary"><i class=""></i> ADMINISTRATOR AREA</h2>

					</div>

					<div class="panel-body">
						<?php $this->view('backend/message'); ?>
						<form action="<?php echo site_url('Auth/login') ?>" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="kd_admin" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>

								</div>
								<div class="input-group input-group-icon">
									<input name="pswd_admin" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<button type="submit" class="mb-xs mt-xs mr-xs btn btn-lg btn-primary">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.init.js"></script>

		<!-- message -->
		<script type="text/javascript">
			$(document).ready(function() {
				$('#notice').hide();
				<?php if($this->session->flashdata('message_true')){ ?>
					$('#notice').fadeIn(2000);
					$('#notice').addClass('alert-success');
					$('#pesan').html('<?php echo $this->session->flashdata('message_true'); ?>');
					$('#notice').delay(2000).fadeOut(2000);
				<?php }elseif($this->session->flashdata('message_false')){ ?>
					$('#notice').fadeIn(2000);
					$('#notice').addClass('alert-danger');
					$('#pesan').html('<?php echo $this->session->flashdata('message_false'); ?>');
					$('#notice').delay(2000).fadeOut(2000);
				<?php } ?>
			});
		</script>
		<!-- end-message -->

	</body>
</html>
