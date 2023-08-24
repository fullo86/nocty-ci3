        <br></br>
<div class="row">
  <div class="section-title row text-center">
    <div class="col-md-8 col-md-offset-2">
      <h3>Ubah Data</h3>
      <hr class="grd1">
    </div>
  </div>

<div class="col-md-8 col-md-offset-2">
  <div class="contact_form">
    <div id="message"></div>
    <form id="" class="row" action="<?php echo site_url('AkunUsr/update/'.$edit['id_user']) ?>" name="contactform" method="post">
      <fieldset class="row-fluid">
        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
            <input type="text" name="username" id="" value="<?php echo $edit['username'] ?>" class="form-control" placeholder="Masukan Nama" required oninvalid="this.setCustomValidity('kolom ini Harus Di Isi')" oninput="setCustomValidity('')">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
          <input type="email" name="email_user" id="email" value="<?php echo $edit['email_user'] ?>" class="form-control" placeholder="Email" required oninvalid="this.setCustomValidity('kolom ini Harus Di Isi')" oninput="setCustomValidity('')">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
          <input type="text" name="hp_user" id="phone" value="<?php echo $edit['hp_user'] ?>" class="form-control" placeholder="No HP" required oninvalid="this.setCustomValidity('kolom ini Harus Di Isi')" oninput="setCustomValidity('')">
        </div>
        <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 text-center">
          <a href ="<?php echo site_url('AkunUsr/changepswd/'.$this->session->userdata('id_user')) ?>" button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">UBAH PASSWORD</button></a>
        </div>
        <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 text-center">
          <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd subt">UPDATE DATA</button>
        </div>
      </fieldset>
    </form>
  </div>
<br></br>
