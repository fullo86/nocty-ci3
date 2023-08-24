<br></br>
<div class="section-title row text-center">
    <div class="col-md-8 col-md-offset-2">
        <h3 >AKUN SAYA</h3>
        <hr class="grd1" >
    </div>
    <div class="testi-meta">
    </div>
</div><!-- end title -->
<?php $this->view('frontend/message'); ?>
<div class="row dev-list text-center">
    <div class="col-lg-12  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="widget clearfix">
            <div class="hover-br">
                <img src="uploads/barber_team_01.jpg" alt="" class="img-responsive">
            </div>
            <div class="widget-title">
                <h3>Hi Selamat Datang Di Dashboard Akun Anda</h3>
                <small></small>
            </div>
            
            <center><h3><?php echo $akun['username'] ?></h3></center>

            
        </div><!--widget -->
    </div><!-- end col -->
</div>

<div class="row">
    <div class=" col-sm-6">
        <section class="section nopad cac text-center">
            <a href="<?php echo site_url('AkunUsr/edit/'.$akun['id_user']) ?>"><h3>Perbarui Data Akun</h3></a>
        </section>
    </div>
    <div class=" col-sm-6">
        <section class="section nopad cac text-center">
            <a href="<?php echo site_url('AkunUsr/pemesanan/'.$akun['id_user']) ?>"><h3>Lihat Pemesanan Saya</h3></a>
        </section>
    </div>
<div style="height: 300px; width: 100%"></div>
