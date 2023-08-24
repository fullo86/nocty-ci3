<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">
<div class="panel-actions">
  <a href="#" class="fa fa-caret-down"></a>
  <a href="#" class="fa fa-times"></a>
</div>
<h2 class="panel-title"><?php echo $sub ?></h2>
</header>
<div class="panel-body">
						<?php $this->view('backend/message'); ?>
  <!--Form-->
  <form method="post" action="<?php echo site_url('Booking/update/'.$ubah['id_booking']) ?>" enctype="multipart/form-data">

  <label>Nama Customer</label><br>
  <input type="text" class="form-control" name="nama_pemesan" placeholder="Masukan Nama" value="<?php echo $ubah['nama_pemesan'] ?>" required oninvalid="this.setCustomValidity('Kolom ini Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Email</label><br>
  <input type="text" class="form-control" name="email_pemesan" placeholder="Masukan Email" value="<?php echo $ubah['email_pemesan'] ?>" required oninvalid="this.setCustomValidity('Kolom ini Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>No Hp</label><br>
  <input type="text" class="form-control" name="no_hp" placeholder="Masukan No Hp" value="<?php echo $ubah['no_hp'] ?>" required oninvalid="this.setCustomValidity('Kolom ini Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Waktu Kedatangan</label><br>
  <input type="date" class="form-control" name="waktu_pemesanan" placeholder="Masukan Tanggal Kedatangan" value="<?php echo $ubah['waktu_pemesanan'] ?>" required oninvalid="this.setCustomValidity('Kolom ini Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Perbaharui</button>
  <a href="<?php echo site_url('Booking') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>
  </form>
  <!--EndForm-->
</div>
</section>
</div>
