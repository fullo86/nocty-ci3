<br></br>
<div class="row">
	<div class="section-title row text-center">
		<div class="col-md-8 col-md-offset-2">
			<h3>Reschedule</h3>
			<hr class="grd1">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="contact_form">
			<div id="message"></div>
			<form id="" class="row" action="<?php echo site_url('AkunUsr/rescheduleBooking') ?>" name="contactform" method="post">
				<input type="hidden" name="id" value="<?= $reschedule['id_booking'] ?>">
				<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
					<input type="date" name="waktu_pemesanan" id="waktu_pemesanan" value="<?php echo $reschedule['waktu_pemesanan'] ?>" class="form-control" required>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
					<select name="jam_kedatangan" id="jam_kedatangan" class="selectpicker form-control" value="<?php echo $reschedule['jam_kedatangan'] ?>" data-style="btn-white" required>
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
				<div class="col-md-12 col-md-offset-6">
					<button type="submit" id="submit" class="btn btn-light btn-radius btn-brd subt">UPDATE PEMESANAN</button>
				</div>
			</form>
		</div>
	</div> 
</div>
<div style="height: 300px; width: 100%"></div>

<script>
	$('document').ready(function() {
		$('#jam_kedatangan').on('change', function() {
			var jam     = $(this).val(),
				tanggal = $('#waktu_pemesanan').val();

			$('#submit').prop('disabled', true);

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
						$('#submit').prop('disabled', false);
					}
				}
			})
		})
	})
</script>
