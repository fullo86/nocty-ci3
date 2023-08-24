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
  <form method="post" action="<?php echo site_url('User/update/'.$edit['id_user']) ?>" enctype="multipart/form-data">
  <div class="col-lg-9">

    <label>Nama</label><br>
    <input type="text" class="form-control" name="username" placeholder="Masukan Nama User" value="<?php echo $edit['username'] ?>" required oninvalid="this.setCustomValidity('Nama User Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

    <label>HP</label><br>
    <input type="text" class="form-control" name="hp_user" placeholder="Masukan HP User" value="<?php echo $edit['hp_user'] ?>" required oninvalid="this.setCustomValidity('HP User Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

    <label>Email</label><br>
    <input type="text" class="form-control" name="email_user" placeholder="Masukan Email" value="<?php echo $edit['email_user'] ?>" required oninvalid="this.setCustomValidity('Email admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  </div>

  <div class="col-lg-12">
    <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Perbaharui</button>
    <a href="<?php echo site_url('User') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>
  </form>
</div>
  <!--EndForm-->
</div>
</section>
</div>
