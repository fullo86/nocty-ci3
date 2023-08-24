<?php
	$sidebar = isset($sidebar) ? $sidebar : '';
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<!-- Page Title -->
		<title><?php echo $judul ?> - Administrator</title>

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="#" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/select2/select2.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="#" class="logo">
						<img src="<?php echo base_url(); ?>assets/backend/images/nc.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo base_url('assets/img_admin/'.$this->session->userdata('img_admin')) ?>" alt="Joseph Doe" width="44" height="44" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><?php echo  $this->session->userdata('nama_admin'); ?></span>
								<span class="role"><?php echo  $this->session->userdata('kd_admin'); ?></span>
							</div>
							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" href="<?php echo site_url('Admin/edit/'.$this->session->userdata('kd_admin')) ?>"><i class="fa fa-user"></i> Akun Saya</a>
								</li>
								<li>
									<a role="menuitem" href="<?php echo site_url('Admin/ubahpassword/'.$this->session->userdata('kd_admin')) ?>"><i class="fa fa-lock"></i> Ubah Password</a>
								</li>
								<li>
									<a role="menuitem" href="<?php echo site_url('Auth/logout') ?>"><i class="fa fa-power-off"></i> Keluar</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">

						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li <?= $sidebar == 'beranda' ? 'class="active"' : '' ?>>
										<a href="<?php echo site_url('Beranda') ?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Beranda</span>
										</a>
									</li>
									<li <?= $sidebar == 'admin' ? 'class="active"' : '' ?>>
										<a href="<?php echo site_url('Admin') ?>">
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Data Admin</span>
										</a>
									</li>
									<li <?= $sidebar == 'user' ? 'class="active"' : '' ?>>
										<a href="<?php echo site_url('User') ?>">
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>Data Member</span>
										</a>
									</li>
									<li <?= $sidebar == 'pelayanan' ? 'class="active"' : '' ?>>
										<a href="<?php echo site_url('Pelayanan') ?>">
											<i class="fa fa-database" aria-hidden="true"></i>
											<span>Data Pelayanan</span>
										</a>
									</li>
									<li <?= $sidebar == 'booking' ? 'class="active"' : '' ?>>
										<a href="<?php echo site_url('Booking') ?>">
											<i class="fa fa-book" aria-hidden="true"></i>
											<span>Data Pemesanan</span>
										</a>
									</li>
									<li <?= $sidebar == 'transaksi' ? 'class="active"' : '' ?>>
										<a href="<?php echo site_url('Transaksi') ?>">
											<i class="fa fa-usd" aria-hidden="true"></i>
											<span>Transaksi</span>
										</a>
									</li>
									<li <?= $sidebar == 'laporan' ? 'class="active"' : '' ?>>
										<a href="<?php echo site_url('Laporan') ?>">
											<i class="fa fa-file-text" aria-hidden="true"></i>
											<span>Laporan</span>
										</a>
									</li>
									<li <?= $sidebar == 'pesan' ? 'class="active"' : '' ?>>
										<a href="<?php echo site_url('Pesan') ?>">
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Pesan</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('Auth/logout') ?>">
											<i class="fa fa-power-off" aria-hidden="true"></i>
											<span>Keluar</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo $judul ?></h2>

					</header>

					<!-- start: page -->
					<!--isi content-->
					<?php echo $contents ?>
					<!--end isi content-->

					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>

						<div class="sidebar-right-wrapper">

							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>

								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="<?php echo base_url(); ?>assets/backend/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="<?php echo base_url(); ?>assets/backend/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="<?php echo base_url(); ?>assets/backend/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="<?php echo base_url(); ?>assets/backend/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/backend/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/backend/vendor/select2/select2.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/tables/examples.datatables.tabletools.js"></script>

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
