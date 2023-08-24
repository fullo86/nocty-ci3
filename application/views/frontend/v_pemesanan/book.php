<div id="contact" class="section wb">
    <div class="container-fluid">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
            <h3>BOOKING ONLINE NOCTY SALON</h3>
            </div>
        </div><!-- end title -->
        <?php $this->view('frontend/message'); ?>
        <div class="row">
            <div class="col-md-12 ">
                <div class="contact_form">
                        <fieldset class="row-fluid">
                          <form id="payment-form" class="row" action="<?=site_url()?>snap/finish" name="contactform" method="post">
                          <input type="hidden" name="result_type" id="result-type" value="">
                          <input type="hidden" name="result_data" id="result-data" value="">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control" placeholder="Masukan Nama" value="<?= $nama_user != NULL ? $nama_user : '' ?>" <?= $nama_user != NULL ? 'readonly' : '' ?>>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="email" name="email_pemesan" id="email_pemesan" class="form-control" placeholder="Email" value="<?= $email_user != NULL ? $email_user : '' ?>" <?= $email_user != NULL ? 'readonly' : '' ?>>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label class="sr-only">Service</label>
                                <select name="service[]" id="service1" class="selectpicker pilih-service form-control" data-style="btn-white" required>
                                    <option value="" data-harga="0">Pilih Service</option>
                                    <?php foreach ($service->result_array() as $service_1): ?>
                                    <option value="<?= $service_1['id_service'] ?>" data-harga="<?= $service_1['jml_bayar'] ?>"><?= $service_1['service'] ?> (<?= rupiah($service_1['jml_bayar']) ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label class="sr-only">Service</label>
                                <select name="service[]" id="service2" class="selectpicker pilih-service form-control" data-style="btn-white" required>
                                    <option value="" data-harga="0">Pilih Service</option>
                                    <?php foreach ($service->result_array() as $service_2): ?>
                                    <option value="<?= $service_2['id_service'] ?>" data-harga="<?= $service_2['jml_bayar'] ?>"><?= $service_2['service'] ?> (<?= rupiah($service_2['jml_bayar']) ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label class="sr-only">Service</label>
                                <select name="service[]" id="service3" class="selectpicker pilih-service form-control" data-style="btn-white">
                                    <option value="" data-harga="0">Pilih Service</option>
                                    <?php foreach ($service->result_array() as $service_3): ?>
                                    <option value="<?= $service_3['id_service'] ?>" data-harga="<?= $service_3['jml_bayar'] ?>"><?= $service_3['service'] ?> (<?= rupiah($service_3['jml_bayar']) ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label class="sr-only">Service</label>
                                <select name="service[]" id="service4" class="selectpicker pilih-service form-control" data-style="btn-white">
                                    <option value="" data-harga="0">Pilih Service</option>
                                    <?php foreach ($service->result_array() as $service_4): ?>
                                    <option value="<?= $service_4['id_service'] ?>" data-harga="<?= $service_4['jml_bayar'] ?>"><?= $service_4['service'] ?> (<?= rupiah($service_4['jml_bayar']) ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="date" name="waktu_pemesanan" id="waktu_pemesanan" class="form-control"  placeholder="Pilih Tanggal Booking" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label class="sr-only">jam_kedatangan</label>
                              <select name="jam_kedatangan" id="jam_kedatangan" class="selectpicker form-control" data-style="btn-white" required>
                                  <option value="">Jam Kedatangan</option>
                                  <option value="10.00">10.00</option>
                                  <option value="11.00">11.00</option>
                                  <option value="12.00">12.00</option>
                                  <option value="13.00">13.00</option>
                                  <option value="14.00">14.00</option>
                                  <option value="15.00">15.00</option>
                                  <option value="16.00">16.00</option>
                                  <option value="17.00">17.00</option>
                                  <option value="18.00">18.00</option>
                                  <option value="19.00">19.00</option>
                              </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukan No Hp" value="<?= $hp_user != NULL ? $hp_user : '' ?>" <?= $hp_user != NULL ? 'readonly' : '' ?>>
                                </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" readonly name="jml_bayar" id="jml_bayar" class="form-control" placeholder="Total Pembayaran">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" value="SEND" id="pay-button" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">BOOKING & BAYAR SEKARANG</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!-- end col -->
         </div>
    </div>
