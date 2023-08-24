	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
			</div>
			<h2 class="panel-title"><?php echo $sub ?></h2>
		</header>
		<div class="panel-body">
						<?php $this->view('backend/message'); ?>
<!--Table-->
	<table class="table table-bordered table-striped mb-none" id="datatable-default">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pemesan</th>
				<th>Order ID</th>
				<th>Service</th>
      	<th>Email</th>
				<th>No&nbsp;Hp</th>
				<th>Tanggal Kedatangan</th>
				<th>jam Kedatangan</th>
				<th>Tagihan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no=1;
			foreach ($booking as $row) {
				$decode_service = json_decode($row->service);

				?>
				<tr class="gradeX">
					<td><?php echo $no; ?></td>
					<td>
						<?php
							if ($row->id_user != NULL):
						?>
						<a href="<?php echo site_url('User/edit/'.$row->id_user) ?>"><?php echo $row->nama_pemesan; ?></a>
						<?php
							else:
						?>
						<?php echo $row->nama_pemesan; ?>
						<?php
							endif;
						?>
					</td>
					<td><?php echo $row->order_id; ?></td>
					<td>
						<ul>
							<?php
								foreach ($decode_service as $service_booking):
							?>
								<li><?= $service_data[$service_booking] ?></li>
							<?php
								endforeach;
							?>
							</ul>
					</td>
					<td><?php echo $row->email_pemesan; ?></td>
					<td><?php echo $row->no_hp; ?></td>
					<td><?php echo date('F d, Y', strtotime($row->waktu_pemesanan)) ?></td>
					<td><center><?php echo $row->jam_kedatangan; ?></center></td>
					<td>Rp. <?php echo $row->jml_bayar; ?></td>
					<td>
						<a href="<?php echo site_url('Booking/ubah/'.$row->id_booking) ?>" title="Ubah Data" class="mb-xs mt-xs mr-xs btn btn-xs btn-info"><i class="fa fa-pencil" ></i></a>
						<a href="<?php echo site_url('Booking/delete/'.$row->id_booking) ?>" title="Hapus data" onclick="javascript: return confirm('Yakin Mau dihapus')" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
					</td>
				</tr>
				<?php
				$no++;
			}
			?>
		</tbody>
	</table>
	<!--EndTable-->
	</div>
	</section>
