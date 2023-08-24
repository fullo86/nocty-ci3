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
				<th>Nama</th>
				<th>Email</th>
				<th>HP</th>
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
			<td><?php echo $row['username'] ?></td>
			<td><?php echo $row['email_user'] ?></td>
			<td><?php echo $row['hp_user'] ?></td>
			<td>
				<a href="<?php echo site_url('User/edit/'.$row['id_user']) ?>" title="Ubah Data" class="mb-xs mt-xs mr-xs btn btn-xs btn-info"><i class="fa fa-pencil" ></i></a>
				<a href="<?php echo site_url('User/delete/'.$row['id_user']) ?>" title="Hapus data" onclick="javascript: return confirm('Yakin Mau dihapus data member <?php echo $row['username'];?>')" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
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
