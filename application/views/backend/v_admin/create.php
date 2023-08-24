<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
</div>
<h2 class="panel-title"><?php echo $sub ?></h2>
</header>
<div class="panel-body">
						<?php $this->view('backend/message'); ?>
<!--Form-->
<form method="post" action="<?php echo site_url('Admin/save') ?>">

  <label>Username</label><br>
  <input type="text" name="kd_admin" class="form-control" placeholder="Masukan Username" value="" required oninvalid="this.setCustomValidity('Kode admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Nama Lengkap</label><br>
  <input type="text" name="nama_admin" class="form-control" placeholder="Masukan Nama Lengkap admin" value="" required oninvalid="this.setCustomValidity('Nama admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>HP</label><br>
  <input type="text" name="hp_admin" class="form-control" placeholder="Masukan HP admin" value="" required oninvalid="this.setCustomValidity('Email admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Email</label><br>
  <input type="email" name="email_admin" class="form-control" placeholder="Masukan Email admin" value="" required oninvalid="this.setCustomValidity('Email admin Harus Di Isi atau Bentuk Format Email')" oninput="setCustomValidity('')"><p></p>

  <label>Password</label><br>
  <input type="password" name="pswd_admin" class="form-control" placeholder="Masukan Kata Sandi" value="" required oninvalid="this.setCustomValidity('Password admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Simpan</button>
  <a href="<?php echo site_url('Admin') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>

</form>
<!--EndForm-->
</div>
</section>
</div>
