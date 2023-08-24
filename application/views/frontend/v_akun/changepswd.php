        <br></br>
<div class="row">
  <div class="section-title row text-center">
    <div class="col-md-8 col-md-offset-2">
      <h3>Ubah Password</h3>
      <hr class="grd1">
    </div>
  </div>

<div class="col-md-8 col-md-offset-2">
                <?php $this->view('frontend/message'); ?>
  <div class="contact_form">
    <div id="message"></div>
    <form id="" class="row" action="<?php echo site_url('AkunUsr/uchangepswd/'.$changepswd['id_user']) ?>" name="contactform" method="post">
      <fieldset class="row-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="password" name="pswd_userb" id="" value="" class="form-control" placeholder="Masukan Password baru" onKeyPress="return isNumberKey(event)" required oninvalid="this.setCustomValidity('Masukan Password Baru')" oninput="setCustomValidity('')">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <input type="password" name="pswd_useru" id="" value="" class="form-control" placeholder="Konfirmasi Password Baru" onKeyPress="return isNumberKey(event)" required oninvalid="this.setCustomValidity('Ulangi Password Baru')" oninput="setCustomValidity('')">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
          <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">PERBARUI PASSWORD</button>
        </div>
      </fieldset>
    </form>
  </div>
<br></br>
