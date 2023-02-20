<?php

include "../koneksi.php";
$sql = mysqli_query($con, "select * from tb_user where id_user = '$_SESSION[id_user]'");
$row = mysqli_fetch_assoc($sql);

// $query = "SELECT * FROM tb_reservasi JOIN tb_user ON tb_reservasi.id_user=tb_user.id_user ORDER BY created_at DESC";
// $bukti = mysqli_query($con, $query);

function status_reservasi($status)
{
    if ($status == "selesai") {
        echo "<span class='btn btn-sm btn-danger'>Expired</span>";
    } else {
        echo "<span class='btn btn-sm btn-success'>Valid</span>";
    }
}
?>

<!-- Content Wrapper -->
<!-- Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="tgl_awal" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="tgl_akhir" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="cari" name="cari">
                                </div>
                            </div>
                        </div>
                    </form>
                    <a href="<?php echo "report_reservasi.php?name=$row[nm_user]"; ?>" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> Cetak Laporan Reservasi</a>
                    <p></p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Reservasi</th>
                                <th>Tanggal Reservasi</th>
                                <th>Estimasi Waktu</th>
                                <th>Jumlah Orang</th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php
                        include "../koneksi.php";

                        if (isset($_POST['cari'])) {
                            $awal = (string)$_POST['tgl_awal'];
                            $akhir = (string)$_POST['tgl_akhir'];

                            $sql = "SELECT * FROM tb_reservasi JOIN tb_user ON tb_reservasi.id_user=tb_user.id_user WHERE tgl_reservasi BETWEEN '$awal' AND '$akhir'";
                            $query = mysqli_query($con, $sql);
                            $bukti = mysqli_query($con, $sql);
                        } else {
                            $sql = "SELECT * FROM tb_reservasi JOIN tb_user ON tb_reservasi.id_user=tb_user.id_user";
                            $query = mysqli_query($con, $sql);
                            $bukti = mysqli_query($con, $sql);
                        }

                        $jumlah = mysqli_num_rows($query);

                        if ($jumlah == 0) {
                        ?>
                            <tr>
                                <td colspan="5"> Data yang Anda cari tidak ada! </td>
                            </tr>

                        <?php
                        } else {

                            while ($data = mysqli_fetch_array($query)) {
                            }

                        ?>
                            <tbody>
                                <?php foreach ($bukti as $key => $r) {

                                    //buat jam waktu makan, konversi ke detik
                                    $detik_mulai = strtotime($r['jam_reservasi']);
                                    $detik_selesai   = $detik_mulai + 3600;

                                    // konversi ke jam
                                    $jam_mulai       = date("H:i", strtotime($r['jam_reservasi']));
                                    $jam_selesai     = date('H:i', $detik_selesai);

                                ?>
                                    <tr>
                                        <td><?= $key += 1 ?></td>
                                        <td><?= $r['nama_reservasi'] ?></td>
                                        <td><?= date('D, d M Y', strtotime($r['tgl_reservasi'])) ?></td>
                                        <td><?= $jam_mulai ?> s/d <?= $jam_selesai ?></td>
                                        <td><?= $r['jml_orang'] ?></td>
                                        <td>Rp<?= number_format($harga) ?>/orang</td>
                                        <td>Rp<?= number_format($r['jml_orang'] * $harga) ?></td>
                                        <td><?php status_reservasi($r['status_reservasi']) ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
<!-- End of Content Wrapper -->