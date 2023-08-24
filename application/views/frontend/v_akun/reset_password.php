
<div id="contact" class="section wb">
  <div class="container-fluid">
    <div class="section-title row text-center">
    </div>

    <div class="row">
      <div class="section-title row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h3>Reset Password</h3>
          <hr class="grd1">
        </div>
      </div>

      <div class="col-md-6 col-md-offset-3">
        <div class="contact_form">
                    <?php $this->view('frontend/message'); ?>
          <form id="" class="row" action="<?php echo site_url('AuthUsr/aksi_reset') ?>" name="contactform" method="post">
            <fieldset class="row-fluid">
              <div class="col-lg-15 col-md-12 col-sm-6 col-xs-12">
                <input type="password" name="password_baru" id="" class="form-control" placeholder="Masukkan Password Baru" required oninvalid="this.setCustomValidity('Masukan Password Baru')" oninput="setCustomValidity('')">
                <input type="hidden" name="id_user" value="<?=$id_user?>">
              </div>
              <div class="col-lg-15 col-md-12 col-sm-6 col-xs-12">
                <input type="password" name="konfirmasi_password" id="" class="form-control" placeholder="Konfirmasi Password" required oninvalid="this.setCustomValidity('Masukan Konfirmasi Password')" oninput="setCustomValidity('')">
                <input type="hidden" name="id_user" value="<?=$id_user?>">
              </div>
              <div class=" col-md-offset-6 col-md-6 col-sm-6 col-xs-3 text-center">
                <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd subt">Reset</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
