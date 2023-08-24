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
  <form method="post" action="<?php echo site_url('Admin/update/'.$edit['kd_admin']) ?>" enctype="multipart/form-data">

  <label>Kode Admin</label><br>
  <input type="text" class="form-control" disabled name="kd_admin" placeholder="Masukan Nama admin" value="<?php echo $edit['kd_admin'] ?>" required oninvalid="this.setCustomValidity('Kode admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Nama</label><br>
  <input type="text" class="form-control" name="nama_admin" placeholder="Masukan Nama admin" value="<?php echo $edit['nama_admin'] ?>" required oninvalid="this.setCustomValidity('Nama admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>HP</label><br>
  <input type="text" class="form-control" name="hp_admin" placeholder="Masukan HP admin" value="<?php echo $edit['hp_admin'] ?>" required oninvalid="this.setCustomValidity('HP admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Email</label><br>
  <input type="text" class="form-control" name="email_admin" placeholder="Masukan Email admin" value="<?php echo $edit['email_admin'] ?>" required oninvalid="this.setCustomValidity('Email admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <img src="<?php echo base_url('assets/img_admin/'.$edit['img_admin']) ?>" width="15%"><br>

  <label>Ganti Foto</label><br>
  <input type="file" name="img_admin" class="form-control"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Perbaharui</button>
  <a href="<?php echo site_url('Admin') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>
  </form>
  <!--EndForm-->
</div>
</section>
</div>
