	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
			</div>
			<h2 class="panel-title"><?php echo $sub ?></h2>
		</header>
		<div class="panel-body">
			<a href="<?php echo site_url('Pelayanan/create'); ?>" title="Tambah Data"> <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Tambah <i class="fa fa-plus"></i></button> </a>
						<?php $this->view('backend/message'); ?>
<!--Table-->
	<table class="table table-bordered table-striped mb-none" id="datatable-default">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Service</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no=1;
			foreach ($read->result_array() as $row) {
				?>
				<tr class="gradeX">
			<td><?php echo $no; ?></td>
			<td><?php echo $row['service'] ?></td>
			<td><?php echo $row['jml_bayar'] ?></td>
			<td>
				<a href="<?php echo site_url('Pelayanan/edit/'.$row['id_service']) ?>" title="Ubah Data" class="mb-xs mt-xs mr-xs btn btn-xs btn-info"><i class="fa fa-pencil" ></i></a>
				<a href="<?php echo site_url('Pelayanan/delete/'.$row['id_service']) ?>" title="Hapus data" onclick="javascript: return confirm('Yakin Mau dihapus data pelayanan <?php echo $row['service'];?>')" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
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
