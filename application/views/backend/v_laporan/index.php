<?php
    $tahunSekarang = date('Y');
    $bulanSekarang = date('m');

    if ($getBulan == NULL && $getTahun == NULL) {
        $tanggalAktif  = tgl_indo(date('d-m-Y', strtotime($tahunSekarang . '-' . $bulanSekarang . '-01')));
        $normalMonth   = date('m', strtotime($tahunSekarang . '-' . $bulanSekarang . '-01'));
        $jumlahTanggal = cal_days_in_month(CAL_GREGORIAN, date('n'), $tahunSekarang);
    }
    else {
        $tanggalAktif  = tgl_indo(date('d-m-Y', strtotime($getTahun . '-' . $getBulan . '-01')));
        $normalMonth   = date('m', strtotime($getTahun . '-' . $getBulan . '-01'));
        $jumlahTanggal = cal_days_in_month(CAL_GREGORIAN, (int)$getBulan, $getTahun);
    }

    $explodeTanggalAktif = explode(' ', $tanggalAktif);
    $bulanAktif = $explodeTanggalAktif[1];
    $tahunAktif = $explodeTanggalAktif[2];

    $totalPesanan = 0;
    $pesananBerhasil = 0;
    $totalPendapatan = 0;
    foreach ($laporan as $stat) {
        if ($stat->status_code == "200") {
            $totalPendapatan += $stat->jumlah_bayar;
            $pesananBerhasil++;
        }

        $totalPesanan++;
    }

    $dataSet = [];
    for ($k = 1; $k <= $jumlahTanggal; $k++) {
        $tanggalSet = str_pad($k, 2, "0", STR_PAD_LEFT);
        $fullDate   = $tahunAktif . '-' . $normalMonth . '-' . $tanggalSet;

        $totalPendapatanTanggalIni = 0;
        $loopData = $this->M_transaksi->transaksiSuksesPerTanggal($fullDate);
        foreach ($loopData as $dataTglIni) {
            $totalPendapatanTanggalIni += $dataTglIni->jumlah_bayar;
        }

        $dataSet[$k - 1] = $totalPendapatanTanggalIni;
    }

    $jsonDataSet = json_encode($dataSet);
?>
<div class="row">
    <div class="col-md-6">
        <section class="panel panel-featured-left panel-featured-secondary">
            <div class="panel-body">
                <div class="widget-summary">
                    <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-secondary">
                            <i class="fa fa-dollar"></i>
                        </div>
                    </div>
                    <div class="widget-summary-col">
                        <div class="summary">
                            <h4 class="title">Pendapatan</h4>
                            <div class="info">
                                <strong class="amount"><?php echo rupiah($totalPendapatan) ?></strong>
                            </div>
                        </div>
                        <div class="summary-footer">
                            <a href="#" class="text-muted text-uppercase">Pada <?= $bulanAktif ?> <?= $tahunSekarang ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="col-md-6">
        <section class="panel panel-featured-left panel-featured-warning">
            <div class="panel-body">
                <div class="widget-summary">
                    <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-warning">
                            <i class="fa fa-book"></i>
                        </div>
                    </div>
                    <div class="widget-summary-col">
                        <div class="summary">
                            <h4 class="title">Jumlah Pesanan Berhasil</h4>
                            <div class="info">
                                <strong class="amount"><?= $pesananBerhasil ?></strong>
                            </div>
                        </div>
                        <div class="summary-footer">
                            <a href="#" class="text-muted text-uppercase">Dari <?= $totalPesanan ?> Pesanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
        </div>
        <h2 class="panel-title"><?php echo $sub ?></h2>
    </header>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                <select id="select-bulan" name="bulan" class="form-control">
                    <option value="">Pilih Bulan</option>
                    <option value="01" <?= (($getBulan == NULL && $bulanSekarang == '01') || $getBulan == '01') ? 'selected' :'' ?>>Januari</option>
                    <option value="02" <?= (($getBulan == NULL && $bulanSekarang == '02') || $getBulan == '02') ? 'selected' :'' ?>>Februari</option>
                    <option value="03" <?= (($getBulan == NULL && $bulanSekarang == '03') || $getBulan == '03') ? 'selected' :'' ?>>Maret</option>
                    <option value="04" <?= (($getBulan == NULL && $bulanSekarang == '04') || $getBulan == '04') ? 'selected' :'' ?>>April</option>
                    <option value="05" <?= (($getBulan == NULL && $bulanSekarang == '05') || $getBulan == '05') ? 'selected' :'' ?>>Mei</option>
                    <option value="06" <?= (($getBulan == NULL && $bulanSekarang == '06') || $getBulan == '06') ? 'selected' :'' ?>>Juni</option>
                    <option value="07" <?= (($getBulan == NULL && $bulanSekarang == '07') || $getBulan == '07') ? 'selected' :'' ?>>Juli</option>
                    <option value="08" <?= (($getBulan == NULL && $bulanSekarang == '08') || $getBulan == '08') ? 'selected' :'' ?>>Agustus</option>
                    <option value="09" <?= (($getBulan == NULL && $bulanSekarang == '09') || $getBulan == '09') ? 'selected' :'' ?>>September</option>
                    <option value="10" <?= (($getBulan == NULL && $bulanSekarang == '10') || $getBulan == '10') ? 'selected' :'' ?>>Oktober</option>
                    <option value="11" <?= (($getBulan == NULL && $bulanSekarang == '11') || $getBulan == '11') ? 'selected' :'' ?>>November</option>
                    <option value="12" <?= (($getBulan == NULL && $bulanSekarang == '12') || $getBulan == '12') ? 'selected' :'' ?>>Desember</option>
                </select>
            </div>
            <div class="col-md-2">
                <select id="select-tahun" name="tahun" class="form-control">
                    <option value="">Pilih Tahun</option>
                    <?php
                        for ($i = 2020; $i <= $tahunSekarang; $i++):
                    ?>
                    <option value="<?= $i ?>" <?= (($getTahun == NULL && $tahunSekarang == $i) || $getTahun == $i) ? 'selected' :'' ?>><?= $i ?></option>
                    <?php
                        endfor;
                    ?>
                </select>
            </div>
            <div class="col-md-2">
                <button id="filter-laporan" class="btn btn-block btn-primary">Submit</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>

            <div class="col-md-12">
                <canvas id="chart" width="100%" height="350"></canvas>
            </div>

            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-12">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($laporan as $row) {
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
                                <td><?php echo tgl_indo(date('d-m-Y', strtotime($row->transaction_time))) . ' ' . date('H:i:s', strtotime($row->transaction_time)) ?></td>
                                <td>
                                    <?php
                                        if ($row->status_code == "200"):
                                    ?>
                                        <center><span class="badge bg-success">Pembayaran<br>Berhasil</br></span></center>
                                    <?php
                                        elseif ($row->status_code == "201"):
                                    ?>
                                        <center><span class="badge bg-warning">Pending</span></center>
                                    <?php
                                        else:
                                    ?>
                                        <center><span class="badge bg-danger">Gagal</span></center>
                                    <?php
                                        endif;
                                    ?>
                                </td>
                            </tr>
                            <?php
                                    $no++;
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script>
    $('document').ready(function() {
        $('#filter-laporan').on('click', function() {
            var bulan = $('#select-bulan').val();
            var tahun = $('#select-tahun').val();

            if (bulan.length < 1) {
                alert('Silahkan pilih bulan');
            }

            if (tahun.length < 1) {
                alert('Silahkan pilih tahun');
            }

            if (bulan.length > 0 && tahun.length > 0) {
                var redirect = '<?php echo site_url('Laporan') ?>?bulan=' + bulan + '&tahun=' + tahun;
                window.location.href = redirect;
            }

            return false;
        })
    })
</script>
<script>
    var ctx = document.getElementById('chart');
    var totalDays = <?= $jumlahTanggal ?>;
    var labels    = [];
    var dataValue = [];
    var parseDataset = JSON.parse("<?= $jsonDataSet ?>");
    
    for (var i = 1; i <= totalDays; i++) {
        labels[i-1] = i + ' <?= $bulanAktif ?> <?= $tahunSekarang ?>';
    } 

    for (var k = 1; k <= parseDataset.length; k++) {
        dataValue[k-1] = parseDataset[k-1];
    }

    function formatRupiah(angka) {
        var	number_string = angka.toString(),
            sisa 	= number_string.length % 3,
            rupiah 	= number_string.substr(0, sisa),
            ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        return 'Rp. ' + rupiah
    }

    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Grafik Penjualan',
                data: dataValue,
                fill: true,
                borderColor: '#34495e',
                tension: 0.1
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    enabled: true,
                    callbacks: {
                        label: function(context) {
                            var label = context.dataset.label || '';
                            var val   = context.parsed.y;
                            return 'Total Penjualan:' + formatRupiah(val);
                        }
                    }
                }
            }
        }
    });
</script>