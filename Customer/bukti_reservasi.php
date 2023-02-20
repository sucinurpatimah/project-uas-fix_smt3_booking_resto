<?php
include("../koneksi.php");

$query = "SELECT * FROM tb_reservasi JOIN tb_user ON tb_reservasi.id_user=tb_user.id_user WHERE tb_reservasi.id_user=tb_user.id_user ORDER BY created_at DESC LIMIT 1";
$bukti = mysqli_query($con, $query);

// jika belum melakukan reservasi maka di balikan ke halaman reservasi
if ($bukti->num_rows == 0) {
   echo "<script language = 'JavaScript'>
        confirm('Anda belum melakukan reservasi!');
        document.location='index_cus.php?page=reservasi';
        </script>";
}

$bukti = mysqli_fetch_assoc($bukti);


//buat jam waktu makan, konversi ke detik
$detik_mulai   = strtotime($bukti['jam_reservasi']);
$detik_selesai    = $detik_mulai + 3600;


// konversi ke jam, biar enak
$jam_mulai      = date("H:i", strtotime($bukti['jam_reservasi']));
$jam_selesai    = date('H:i', $detik_selesai);

function status_reservasi($status)
{
   if ($status == "selesai") {
      echo "<span class='btn btn-sm btn-danger'>Expired</span>";
   } else {
      echo "<span class='btn btn-sm btn-success'>Valid</span>";
   }
}

?>

<section id="book-a-table" class="book-a-table">
   <div class="container">
      <div class="section-header">
         <p>Bukti Reservasi</p>
      </div>
      <div class="row invoice-info">
         <div class="col-sm-4 invoice-col">
            From
            <address>
               <strong>
               </strong>
            </address>
         </div>
         <!-- /.col -->
         <div class="col-sm-4 invoice-col">
            To
            <address>
               <strong>
                  <?= $bukti['nama_reservasi'] ?> </strong>
               <br> <br>
               Phone :
               <?= $bukti['notelp_reservasi'] ?> <br>
               Email :<?= $bukti['email_reservasi'] ?>
            </address>
         </div>
         <!-- /.col -->
         <div class="col-sm-4 invoice-col">
            <b>Invoice #<?= strtotime($bukti['created_at']) ?></b><br>
            <br>
            <b>Order ID :</b> <?= sprintf('%06d', $bukti['id_reservasi']); ?><br>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Table row -->
      <div class="row">
         <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Tanggal Reservasi</th>
                     <th>Waktu Makan</th>
                     <th>Jumlah Orang</th>
                     <th>Harga</th>
                     <th>Total</th>
                     <th>Status</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td><?= date('D, d M Y', strtotime($bukti['tgl_reservasi'])) ?></td>
                     <td><?= $jam_mulai ?> s/d <?= $jam_selesai ?></td>
                     <td><?= $bukti['jml_orang'] ?></td>
                     <td>Rp<?= number_format($harga) ?>/orang</td>
                     <td>Rp<?= number_format($bukti['jml_orang'] * $harga) ?></td>
                     <td><?php status_reservasi($bukti['status_reservasi']) ?></td>
                  </tr>
               </tbody>
            </table>
            <p><b>Noted : Silahkan lakukan pembayaran ketika Check In.</b></p>
         </div>
         <!-- /.col -->
      </div>
</section>