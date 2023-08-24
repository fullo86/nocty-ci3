<br></br>
<div class="row">
	<div class="section-title row text-center">
		<div class="col-md-8 col-md-offset-2">
			<h3>Riwayat Pemesanan</h3>
			<hr class="grd1">
		</div>
	</div>

	<div class="col-md-12" style="padding-left: 45px; padding-right: 45px">
		<?php $this->view('frontend/message'); ?>
	</div>

	<div class="col-md-12" style="padding-left: 60px; padding-right: 60px">
		<div class="row">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php
					$i = 1;
					foreach ($booking as $row):
						$decode_service = json_decode($row->service);
				?>
				<div class="panel panel-default" style="margin-bottom: 30px; <?= strtotime($row->waktu_pemesanan) < strtotime('now') ? 'border: #ff0000 solid 2px' : '' ?>">
					<div class="panel-heading" role="tab" id="heading<?= $i ?>">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
						Atas nama <?= $nama_user ?> (<?= $hp_user ?>) tanggal <strong><?= tgl_indo(date('d-m-Y', strtotime($row->waktu_pemesanan))) ?> jam <?= $row->jam_kedatangan ?></strong> <?= strtotime($row->waktu_pemesanan) < strtotime('now') ? '(Sudah lewat)' : '' ?>
						</a>
					</h4>
					</div>
					<div id="collapse<?= $i ?>" class="panel-collapse collapse <?= $i == 1  ? 'in' : '' ?>" role="tabpanel" aria-labelledby="heading<?= $i ?>">
					<div class="panel-body">
						<center>Status Pembayaran</center>
						<center><a href="#" class="btn btn-danger btn-radius btn-brd grd1 effect-1 butn"><?php if ($row->status_code == "200") echo 'Pembayaran Berhasil'; elseif ($row->status_code == "201") echo 'Pembayaran Pending'; else echo 'Gagal' ?></a></center>
						<p>Service:</p>
						<ul>
							<?php
								foreach ($decode_service as $service_booking):
							?>
							<li class=""><?= $service_data[$service_booking] ?></li>
							<?php
								endforeach;
							?>
						</ul>
						<p>&nbsp;</p>
						<p><strong>Total : <?= rupiah($row->total_bayar) ?></strong>						<a class="btn btn-danger grd1 col-md-offset-9" href="<?php echo site_url('AkunUsr/reschedule/'.$row->id_booking) ?>">Reschedule Pemesanan</a>
</p>

					</div>
					</div>
				</div>
				<?php
						$i++;
					endforeach;
				?>
			</div>
		</div>
		<div style="height: 300px; width: 100%"></div>
	</div>
