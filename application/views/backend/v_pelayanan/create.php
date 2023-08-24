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
<form method="post" action="<?php echo site_url('Pelayanan/save') ?>">

  <label>Nama Pelayanan</label><br>
  <input type="text" name="service" class="form-control" placeholder="Masukan Nama Pelayanan" value="" required oninvalid="this.setCustomValidity('kolom ini Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Harga</label><br>
  <input type="text" name="jml_bayar" class="form-control" placeholder="Masukan Harga" value="" required oninvalid="this.setCustomValidity('kolom ini Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Simpan</button>
  <a href="<?php echo site_url('Pelayanan') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>

</form>
<!--EndForm-->
</div>
</section>
</div>
