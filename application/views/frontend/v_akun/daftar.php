
<div id="contact" class="section wb">
  <div class="container-fluid">
    <div class="section-title row text-center">
    </div>

    <div class="row">
      <div class="section-title row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h3>DAFTAR</h3>
          <hr class="grd1">
        </div>
      </div>

        <?php $this->view('frontend/message'); ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="contact_form">
                        <fieldset class="row-fluid">
                          <form id="payment-form" class="row" action="<?php echo site_url('AkunUsr/save') ?>" name="contactform" method="post">
                            <div class="col-lg-15 col-md-12 col-sm-6 col-xs-12">
                                <input type="text" name="username" class="form-control" placeholder="Masukan Username" required oninvalid="this.setCustomValidity('Kolom ini tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-lg-15 col-md-12 col-sm-6 col-xs-12">
                                <input type="email" name="email_user" class="form-control" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Kolom ini tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-lg-15 col-md-12 col-sm-6 col-xs-12">
                                <input type="text" name="hp_user" class="form-control" placeholder="Masukkan No Hp" required oninvalid="this.setCustomValidity('Kolom ini tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-lg-15 col-md-12 col-sm-6 col-xs-12">
                                <input type="password" name="pswd_user" class="form-control" placeholder="Masukkan Password" required oninvalid="this.setCustomValidity('Kolom ini tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-lg-15 col-md-12 col-sm-6 col-xs-12">
                                <input type="password" name="kpswd_user" class="form-control" placeholder="Masukkan Konfirmasi Password" required oninvalid="this.setCustomValidity('Kolom ini tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" value="SEND" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">DAFTAR</button>
                            </div>
                        </fieldset>
                 </form>
        </div>
      </div>
    </div>
    </div>
