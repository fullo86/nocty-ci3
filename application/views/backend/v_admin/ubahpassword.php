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
  <form method="post" action="<?php echo site_url('Admin/uchangepswd/'.$ubahpassword['kd_admin']) ?>" enctype="multipart/form-data">

  <label>Masukkan Password Baru</label><br>
  <input type="password" class="form-control" name="pswd_adminb" placeholder="Masukan Password baru" value="" required oninvalid="this.setCustomValidity('Kolom Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Konfirmasi Password Baru</label><br>
  <input type="password" class="form-control" name="pswd_adminu" placeholder="Konfirmasi Password baru" value="" required oninvalid="this.setCustomValidity('kolom Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Perbaharui</button>
  <a href="<?php echo site_url('Admin') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>
  </form>
  <!--EndForm-->
</div>
</section>
</div>
