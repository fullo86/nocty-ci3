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
  <form method="post" action="<?php echo site_url('Pelayanan/update/'.$edit['id_service']) ?>" enctype="multipart/form-data">
  <div class="col-lg-9">

    <label>Nama Pelayanan</label><br>
    <input type="text" class="form-control" name="service" placeholder="Masukan Nama Pelayanan" value="<?php echo $edit['service'] ?>" required oninvalid="this.setCustomValidity('kolom ini Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

    <label>Harga</label><br>
    <input type="text" class="form-control" name="jml_bayar" placeholder="Masukan Harga" value="<?php echo $edit['jml_bayar'] ?>" required oninvalid="this.setCustomValidity('kolom ini Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  </div>

  <div class="col-lg-12">
    <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Perbaharui</button>
    <a href="<?php echo site_url('Pelayanan') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>
  </form>
</div>
  <!--EndForm-->
</div>
</section>
</div>
