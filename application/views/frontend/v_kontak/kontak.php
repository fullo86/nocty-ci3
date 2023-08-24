  <div class="container-fluid">
    <div class="section-title row text-center">
    </div>

    <div class="row">
      <div class="section-title row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h3>KONTAK KAMI</h3>
          <hr class="grd1">
        </div>
      </div>

      <div class="row">

        <div class="col-md-6">
          <div class="service-wrap clearfix">
            <h4 style="text-align:center;">Kontak Informasi</h4><br>
            <h3>Jl. Hang Tuah No.49,<br> Tegalsari Kota Tegal, Jawa Tengah</br></h3><br>
            <h3>Telp : 087821339009</h3><br>
            <h3>Email : noctysalon@gmail.com</h3>
          </div>
        </div>

        <div class="col-md-6">
          <br></br>
          <h3><center><b>Kontak Kami Dengan Mengisi Form Dibawah</b></center></h3>
          <div class="contact_form">
            <?php $this->view('frontend/message'); ?>
            <form id="" class="row" action="<?php echo site_url('Kontak/save') ?>" name="contactform" method="post">
              <fieldset class="row-fluid">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                  <input type="text" name="nama" id="" class="form-control" placeholder="Masukan Nama" required oninvalid="this.setCustomValidity('Kolom nama tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email" required oninvalid="this.setCustomValidity('Kolom email tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="no_hp" id="phone" class="form-control"  maxlength="13" onkeypress="return hanyaAngka(event)" placeholder="No HP" required oninvalid="this.setCustomValidity('Kolom no hp tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <textarea class="form-control" name="pesan" id="comments" rows="6" placeholder="Tulis Pesan.." required oninvalid="this.setCustomValidity('Kolom ini tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                  <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">KIRIM PESAN</button>
                </div>
              </fieldset>
            </form>
          </div>
          <br></br>
        </div>

</div>
