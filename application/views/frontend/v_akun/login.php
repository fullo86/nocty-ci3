
<div id="contact" class="section wb">
  <div class="container-fluid">
    <div class="section-title row text-center">
    </div>

    <div class="row">
      <div class="section-title row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h3>LOGIN</h3>
          <hr class="grd1">
        </div>
      </div>

      <div class="col-md-6 col-md-offset-3">
        <div class="contact_form">
                    <?php $this->view('frontend/message'); ?>
          <form id="" class="row" action="<?php echo site_url('AuthUsr/login') ?>" name="contactform" method="post">
            <fieldset class="row-fluid">
              <div class="col-lg-15 col-md-12 col-sm-6 col-xs-12">
                <input type="email" name="email_user" id="" class="form-control" placeholder="Masukan Email">
              </div>
              <div class="col-lg-15 col-md-12 col-sm-6 col-xs-12">
                <input type="password" name="pswd_user" id="email" class="form-control" placeholder="Masukan Password">
              </div>
              <div class=" col-md-offset- col-md-6 col-sm-6 col-xs-3 text-center">
                <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd subt">Masuk</button>
              </div>
              <div class=" col-md-offset-7">
                <a href="<?php echo site_url('AuthUsr/lupapassword') ?>" style="color:white;">Lupa Password?</a>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
