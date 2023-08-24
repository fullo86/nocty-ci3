<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
    </div>
		<h2 class="panel-title"><?php echo $sub ?></h2>
  </header>
  <div class="panel-body">
<!--Table-->
<table class="table table-bordered table-striped mb-none" id="datatable-default">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Pemesan</th>
      <th>ORDER ID</th>
      <th>Jumlah Pembayaran</th>
      <th>Metode Pembayaran</th>
      <th>Waktu Transaksi</th>
      <th>Status Transaksi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$no=1;
		foreach ($read as $row) {
			?>
      <tr class="gradeX">
        <td><?php echo $no; ?></td>
        <td>
          <?php
            if ($row->id_user != NULL):
          ?>
          <a href="<?php echo site_url('User/edit/'.$row->id_user) ?>"><?php echo $row->nama_pms ?></a>
          <?php
            else:
          ?>
          <?php echo $row->nama_pms ?>
          <?php 
            endif;
          ?>
        </td>
        <td><?php echo $row->order_id ?></td>
        <td><?php echo rupiah($row->jumlah_bayar) ?></td>
        <td><?php echo ucwords(str_replace('_', ' ', $row->payment_type)) ?></td>
        <td><?php echo date('F d Y H:i', strtotime($row->transaction_time)) ?></td>
        <td>
          <?php
          if ($row->status_code == "200") {
            ?>
            <center><span class="badge bg-success">Pembayaran<br>Berhasil</br></span></center>
            <?php
          } elseif ($row->status_code == "201") {
            ?>
            <center><span class="badge bg-warning">Pending</span></center>
            <?php
          } else {
           ?>
            <center><span class="badge bg-danger">Gagal</span></center>
           <?php
          }
           ?>
        </td>
        <td>
          <a href="<?php echo site_url('Transaksi/delete/'.$row->order_id) ?>" title="Hapus data" onclick="javascript: return confirm('Yakin Mau dihapus Transaksi dengan Order ID <?php echo $row->order_id;?>')" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
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
