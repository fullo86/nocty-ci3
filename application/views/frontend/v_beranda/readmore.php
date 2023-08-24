<section class="blog_area section-padding">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h1><?php echo $row['judul_berita'] ?><hr></h1>
          </div>
      </div>
        <div class="row">
<div class="single-post row">
    <div class="col-lg-12">
        <div class="feature-img">
            <img class="img-fluid" src="<?php echo base_url('assets/img_berita/'.$row['img_berita']) ?>" alt="">
        </div>
    </div>
    <div class="col-lg-3  col-md-3">
        <div class="blog_info text-right">

            <ul class="blog_meta list">
                    <li><a href="#"><?php echo $row['nama_kategori'] ?><i class="fa fa-eye"></i></a></li>
                    <li><a href="#"><?php echo $row['kd_admin'] ?><i class="fa fa-user-o"></i></a></li>
                    <li><a href="#"><?php echo $row['tgl_berita'] ?><i class="fa fa-calendar-o"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 blog_details">
        <h5><?php echo $row['judul_berita'] ?></h5>
        <p class="excert">
            <?php echo $row['isi_berita'] ?>
        </p>

    </div>

</div>
</div>
</div>
</section>
