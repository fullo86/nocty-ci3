	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
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
				<th>Nama</th>
				<th>Email</th>
				<th>No HP</th>
    		<th>Pesan</th>
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
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['no_hp'] ?></td>
    			<td><?php echo $row['pesan'] ?></td>
					<td>
						<a href="<?php echo site_url('Pesan/delete/'.$row['id_kontak']) ?>" title="Hapus data" onclick="javascript: return confirm('Yakin Mau dihapus pesan dari <?php echo $row['nama'];?>')" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
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
