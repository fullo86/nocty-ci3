<?php $this->view('backend/message'); ?>
<!--menghitung data-->
<div class="col-md-12">
	<div class="row">
		
		<div class="col-md-12 col-lg-6 col-xl-6">
			<section class="panel panel-featured-left panel-featured-secondary">
				<div class="panel-body">
					<div class="widget-summary">
						<div class="widget-summary-col widget-summary-col-icon">
							<div class="summary-icon bg-secondary">
								<i class="fa fa-user"></i>
							</div>
						</div>
						<div class="widget-summary-col">
							<div class="summary">
								<h4 class="title">Admin</h4>
								<div class="info">
									<strong class="amount"><?php echo $total_admin ?></strong>
								</div>
							</div>
							<div class="summary-footer">
								<a href="Admin" class="text-muted text-uppercase">Administrator</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="col-md-12 col-lg-6 col-xl-6">
			<section class="panel panel-featured-left panel-featured-secondary">
				<div class="panel-body">
					<div class="widget-summary">
						<div class="widget-summary-col widget-summary-col-icon">
							<div class="summary-icon bg-warning">
								<i class="fa fa-book"></i>
							</div>
						</div>
						<div class="widget-summary-col">
							<div class="summary">
								<h4 class="title">Pemesanan</h4>
								<div class="info">
									<strong class="amount"><?php echo $total_booking ?></strong>
								</div>
							</div>
							<div class="summary-footer">
								<a href="Booking" class="text-muted text-uppercase">Pemesanan</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="col-md-12 col-lg-6 col-xl-6">
			<section class="panel panel-featured-left panel-featured-primary">
				<div class="panel-body">
					<div class="widget-summary">
						<div class="widget-summary-col widget-summary-col-icon">
							<div class="summary-icon bg-primary">
								<i class="fa fa-users"></i>
							</div>
						</div>

						<div class="widget-summary-col">
							<div class="summary">
								<h4 class="title">Member</h4>
								<div class="info">
									<strong class="amount"><?php echo $total_user ?></strong>
								</div>
							</div>

							<div class="summary-footer">
								<a href="User" class="text-muted text-uppercase">Member</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>\

		<div class="col-md-12 col-lg-6 col-xl-6">
			<section class="panel panel-featured-left panel-featured-quartenary">
				<div class="panel-body">
					<div class="widget-summary">
						<div class="widget-summary-col widget-summary-col-icon">
							<div class="summary-icon bg-success">
								<i class="fa fa-usd"></i>
							</div>
						</div>
						<div class="widget-summary-col">
							<div class="summary">
								<h4 class="title">Transaksi</h4>
								<div class="info">
									<strong class="amount"><?php echo $total_transaksi ?></strong>
								</div>
							</div>
							<div class="summary-footer">
								<a href="Transaksi" class="text-muted text-uppercase">Data Transaksi</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="col-md-12 col-lg-6 col-xl-6">
			<section class="panel panel-featured-left panel-featured-quartenary">
				<div class="panel-body">
					<div class="widget-summary">
						<div class="widget-summary-col widget-summary-col-icon">
							<div class="summary-icon bg-quartenary">
								<i class="fa fa-database"></i>
							</div>
						</div>
						<div class="widget-summary-col">
							<div class="summary">
								<h4 class="title">Pelayanan</h4>
								<div class="info">
									<strong class="amount"><?php echo $total_service ?></strong>
								</div>
							</div>
							<div class="summary-footer">
								<a href="Pelayanan" class="text-muted text-uppercase">LIST PELAYANAN</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="col-md-12 col-lg-6 col-xl-6">
			<section class="panel panel-featured-left panel-featured-tertiary">
				<div class="panel-body">
					<div class="widget-summary">
						<div class="widget-summary-col widget-summary-col-icon">
							<div class="summary-icon bg-tertiary">
								<i class="fa fa-envelope"></i>
							</div>
						</div>
						<div class="widget-summary-col">
							<div class="summary">
								<h4 class="title">Pesan</h4>
								<div class="info">
									<strong class="amount"><?php echo $total_kontak ?></strong>
								</div>
							</div>
							<div class="summary-footer">
								<a href="Pesan" class="text-muted text-uppercase">Pesan</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<!--//menghitung data--><?php //echo $user['nama_admin'] ?>
<!--data akun-->
<div class="row">
	<div class="col-xl-3 col-lg-6">
		<section class="panel panel-transparent">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
				</div>

				<h2 class="panel-title">Akun Saya</h2>
			</header>
			<div class="panel-body">
				<section class="panel panel-group">
					<header class="panel-heading bg-primary">
						<div class="widget-profile-info">
							<div class="profile-picture">
								<img src="<?php echo base_url('assets/img_admin/'.$akun['img_admin']) ?>">
							</div>
							<div class="profile-info">
								<h4 class="name text-semibold"><?php echo $akun['nama_admin'] ?></h4>
								<div class="profile-footer">
									<a href="<?php echo site_url('Admin/edit/'.$this->session->userdata('kd_admin')) ?>">(edit profile)</a>
								</div>
							</div>
						</div>
				</header>
					<div id="accordion">
						<div class="panel panel-accordion panel-accordion-first">
							<div id="collapse1One" class="accordion-body collapse in">
								<div class="panel-body">
									<ul class="widget-todo-list">
										<li>
											<b>Username</b><br>
											<label class="todo-label" for="todoListItem2"><span><?php echo $akun['kd_admin'] ?></span></label>
										</li>
										<li>
											<b>Nama Admin</b><br>
											<label class="todo-label" for="todoListItem2"><span><?php echo $akun['nama_admin'] ?></span></label>
										</li>
										<li>
											<b>Email</b><br>
											<label class="todo-label" for="todoListItem2"><span><?php echo $akun['email_admin'] ?></span></label>
										</li>
										<li>
											<b>HP</b><br>
											<label class="todo-label" for="todoListItem2"><span><?php echo $akun['hp_admin'] ?></span></label>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
	</div>
</div>
<!--//data akun-->
