<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-IBO57kwAQ_Pc4mIt"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <!-- Site Metas -->
    <title>Blank Page</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/images/faviconn.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/frontend/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/custom.css">

    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>assets/frontend/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="<?php echo base_url(); ?>assets/frontend/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">

        <!-- Sidebar-wrapper -->
        <div id="sidebar-wrapper">
			<div class="side-top">
				<div class="logo-sidebar">
					<a href="<?php echo site_url('BerandaUsr') ?>"><img src="<?php echo base_url(); ?>assets/frontend/images/logos/nc.jpg" alt="image"></a>
				</div>
				<ul class="sidebar-nav">
					<li><a href="<?php echo site_url('BerandaUsr') ?>">BERANDA</a></li>
					<li><a href="<?php echo site_url('Page/aboutus') ?>">TENTANG KAMI</a></li>
					<li><a href="<?php echo site_url('Page/pricelist') ?>">PRICELIST</a></li>
          <li><a href="<?php echo site_url('Page/gallery') ?>">GALLERY</a></li>
					<li><a href="<?php echo site_url('Kontak') ?>">KONTAK</a></li>
          <!--LogikaLogin-->
          <?php if($this->session->userdata('IsUser')==1) { ?>
                    <li><a href="<?php echo site_url('AkunUsr/akun/'.$this->session->userdata('id_user')) ?>">AKUN SAYA</a></li>
                    <li><a href="<?php echo site_url('AuthUsr/logout') ?>">LOGOUT</a></li>
          <?php
          }
          else{
          ?>
          <li><a href="<?php echo site_url('AkunUsr') ?>">DAFTAR</a></li>
          <li><a href="<?php echo site_url('AuthUsr') ?>">LOGIN</a></li>
          <?php
          }
          ?>
          <!--EndLogikaLogin-->

				</ul>
			</div>
        </div>
        <!-- End Sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="<?php echo base_url(); ?>assets/frontend/#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
              <?php echo $contents ?>
                    </div><!-- end row -->
            </div><!-- end section -->

            <div class="copyrights">
                           <div class="container-fluid">
                               <div class="footer-distributed">
                                   <div class="footer-left">
                                       <p class="footer-links">
                                           <a href="<?php echo site_url('BerandaUsr') ?>">Beranda</a>
                                           <a href="<?php echo site_url('Page/aboutus') ?>">Tentang Kami</a>
                                           <a href="<?php echo site_url('Page/pricelist') ?>">PRICELIST</a>
                                           <a href="<?php echo site_url('Page/gallery') ?>">GALLERY</a>
                                           <a href="<?php echo site_url('Kontak') ?>">Kontak</a>
                                       </p>
                                       <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">&nbsp;Nocty Salon</a></p>
                                   </div>

                               </div>
                           </div><!-- end container -->
                       </div><!-- end copyrights -->
                   </div>
               </div><!-- end wrapper -->

               <a href="<?php echo base_url(); ?>assets/frontend/" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

               <!-- ALL JS FILES -->
               <script src="<?php echo base_url(); ?>assets/frontend/js/all.js"></script>
           	<script src="<?php echo base_url(); ?>assets/frontend/js/responsive-tabs.js"></script>
               <!-- ALL PLUGINS -->
               <script src="<?php echo base_url(); ?>assets/frontend/js/custom.js"></script>


               <!-- Menu Toggle Script -->
               <script>
               (function($) {
                   "use strict";
                   $("#menu-toggle").click(function(e) {
                       e.preventDefault();
                       $("#wrapper").toggleClass("toggled");
                   });
                   smoothScroll.init({
                       selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
                       selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
                       speed: 500, // Integer. How fast to complete the scroll in milliseconds
                       easing: 'easeInOutCubic', // Easing pattern to use
                       offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
                       callback: function ( anchor, toggle ) {} // Function to run after scrolling
                   });
               })(jQuery);
               </script>

               <script type="text/javascript">

               $('#pay-button').click(function (event) {
                 event.preventDefault();
                 $(this).attr("disabled", "disabled");

                 var nama_pemesan = $('#nama_pemesan').val();
                 var email_pemesan = $('#email_pemesan').val();
                 var service = $('select.pilih-service').serialize();
                 var no_hp = $('#no_hp').val();
                 var waktu_pemesanan = $('#waktu_pemesanan').val();
                 var jam_kedatangan = $('#jam_kedatangan').val();
                 var jml_bayar = $('#jml_bayar').val();
				 var formSer = $('#payment-form').serialize();

               $.ajax({
                 type: 'POST',
                 url: '<?=site_url()?>/Snap/token',
                 data: formSer,
                 cache: false,

                 success: function(data) {
                   //location = data;

                   console.log('token = '+data);

                   var resultType = document.getElementById('result-type');
                   var resultData = document.getElementById('result-data');

                   function changeResult(type,data){
                     $("#result-type").val(type);
                     $("#result-data").val(JSON.stringify(data));
                     //resultType.innerHTML = type;
                     //resultData.innerHTML = JSON.stringify(data);
                   }

                   snap.pay(data, {

                     onSuccess: function(result){
                       changeResult('success', result);
                       console.log(result.status_message);
                       console.log(result);
                       $("#payment-form").submit();
                     },
                     onPending: function(result){
                       changeResult('pending', result);
                       console.log(result.status_message);
                       $("#payment-form").submit();
                     },
                     onError: function(result){
                       changeResult('error', result);
                       console.log(result.status_message);
                       $("#payment-form").submit();
                     }
                   });
                 }
               });
             });

             </script>

                       <script type="text/javascript">
              $(document).ready(function(){
                $('#service').change(function(){
                    var service = this.value;
                    $.ajax({
                        url : "<?=site_url('Snap/GetService')?>",
                        type : "POST",
                        dataType : "HTML",
                        data : { service : service},
                        success : function(data){
                            $('#jml_bayar').val(data);
                        }
                    })
                })

              })
          </script>

               <!-- message -->
           		<script type="text/javascript">
           			$(document).ready(function() {
           				$('#notice').hide();
           				<?php if($this->session->flashdata('message_true')){ ?>
           					$('#notice').fadeIn(2000);
           					$('#notice').addClass('alert-success');
           					$('#pesan').html('<?php echo $this->session->flashdata('message_true'); ?>');
           					$('#notice').delay(2000).fadeOut(2000);
           				<?php }elseif($this->session->flashdata('message_false')){ ?>
           					$('#notice').fadeIn(2000);
           					$('#notice').addClass('alert-danger');
           					$('#pesan').html('<?php echo $this->session->flashdata('message_false'); ?>');
           					$('#notice').delay(2000).fadeOut(2000);
           				<?php } ?>
           			});
           		</script>
           		<!-- end-message -->

			<script type="text/javascript">
				$(document).ready(function() {
              		var hargaService1 = parseInt($('#service1').find(':selected').data('harga')),
              			hargaService2 = parseInt($('#service2').find(':selected').data('harga')),
              			hargaService3 = parseInt($('#service3').find(':selected').data('harga')),
              			hargaService4 = parseInt($('#service4').find(':selected').data('harga'));

              		$('#service1').on('change', function() {
              			var service1      = parseInt($(this).find(':selected').data('harga'));
              			var hargaService2 = parseInt($('#service2').find(':selected').data('harga')),
                              hargaService3 = parseInt($('#service3').find(':selected').data('harga'));
                              hargaService4 = parseInt($('#service4').find(':selected').data('harga'));
              			var totalHarga = service1 + hargaService2 + hargaService3 + hargaService4;
              			$('#jml_bayar').val(totalHarga);
              		})

                      $('#service2').on('change', function() {
              			var service2      = parseInt($(this).find(':selected').data('harga'));
              			var hargaService1 = parseInt($('#service1').find(':selected').data('harga')),
                              hargaService3 = parseInt($('#service3').find(':selected').data('harga'));
                              hargaService4 = parseInt($('#service4').find(':selected').data('harga'));
              			var totalHarga = hargaService1 + service2 + hargaService3 + hargaService4;
              			$('#jml_bayar').val(totalHarga);
              		})

                      $('#service3').on('change', function() {
              			var service3      = parseInt($(this).find(':selected').data('harga'));
              			var hargaService1 = parseInt($('#service1').find(':selected').data('harga')),
                              hargaService2 = parseInt($('#service2').find(':selected').data('harga'));
                              hargaService4 = parseInt($('#service4').find(':selected').data('harga'));
              			var totalHarga = hargaService1 + hargaService2 + service3 + hargaService4;
              			$('#jml_bayar').val(totalHarga);
              		})

					$('#service4').on('change', function() {
						var service4      = parseInt($(this).find(':selected').data('harga'));
						var hargaService1 = parseInt($('#service1').find(':selected').data('harga')),
							hargaService2 = parseInt($('#service2').find(':selected').data('harga'));
							hargaService3 = parseInt($('#service3').find(':selected').data('harga'));
						var totalHarga = hargaService1 + hargaService2 + hargaService3 + service4;
						$('#jml_bayar').val(totalHarga);
					})

					$('#jam_kedatangan').on('change', function() {
						var jam     = $(this).val(),
							tanggal = $('#waktu_pemesanan').val();

						$('#pay-button').prop('disabled', true);

						$.ajax({
							url : "<?=site_url('Snap/cekJam')?>",
							type : "POST",
							dataType : "HTML",
							data : { jam:jam, tanggal:tanggal},
							success : function(data){
								var totalBooking = parseInt(data);

								if (totalBooking >= 5) {
									alert('Pesanan sudah penuh, silahkan pilih tanggal atau jam kedatangan yang berbeda.');
								}
								else {
									$('#pay-button').prop('disabled', false);
								}
							}
						})
					})
				})
			</script>

      <script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
          return true;
        }
      </script>

     </body>
  </html>
