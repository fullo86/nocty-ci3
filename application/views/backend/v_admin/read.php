<section class="panel">
<header class="panel-heading">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
</div>
<h2 class="panel-title"><?php echo $sub ?></h2>
</header>
<div class="panel-body">
<a href="<?php echo site_url('Admin/create'); ?>" title="Tambah Data"> <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Tambah <i class="fa fa-plus"></i></button> </a>
						<?php $this->view('backend/message'); ?>
<!--Table-->
<table class="table table-bordered table-striped mb-none" id="datatable-default">
<thead>
	<tr>
		<th>No</th>
		<th>Username</th>
		<th>Nama</th>
		<th>HP</th>
		<th>Email</th>
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
		<td><?php echo $row['kd_admin'] ?></td>
		<td><?php echo $row['nama_admin'] ?></td>
		<td><?php echo $row['hp_admin'] ?></td>
		<td><?php echo $row['email_admin'] ?></td>
		<td>
			<a href="<?php echo site_url('Admin/edit/'.$row['kd_admin']) ?>" title="Ubah Data" class="mb-xs mt-xs mr-xs btn btn-xs btn-info"><i class="fa fa-pencil" ></i></a>
			<a href="<?php echo site_url('Admin/delete/'.$row['kd_admin']) ?>" title="Hapus data" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['kd_admin'];?>')" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
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
