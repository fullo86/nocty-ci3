    <div  id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('<?php echo base_url(); ?>assets/frontend/uploads/slide2.jpg');">
                    <div class="row">
        <div id="full-width" class="owl-carousel owl-theme">
          <div class="text-center item">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              <div class="big-tagline text-center">
                <h2><strong>NOCTY SALON</strong><br>
                  Hair & Beauty Salon</h2>
                  <p class="lead">Di Kerjakan oleh tenaga dan pelayanan yang professional Nocty Salon siap membantu perawatan kecantikan & Rambut anda.</p>
                  <!--LogikaLogin-->
                  <?php if($this->session->userdata('IsUser')==1) { ?>
                            <a href="<?php echo site_url('snap/') ?>" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn"> BOOKING SEKARANG</a>
                  <?php
                  }
                  else{
                  ?>
                  <?php $this->view('frontend/message'); ?>
                  <li><a href="<?php echo site_url('AuthUsr') ?>" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">BOOKING SEKARANG</a></li>
                  <?php
                  }
                  ?>
                  <!--EndLogikaLogin-->

                </div>
              </div>
            </div>

                </div>
