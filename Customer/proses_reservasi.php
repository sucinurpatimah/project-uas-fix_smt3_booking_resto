<?php
session_start();
if (isset($_POST['submit_reservasi'])) {
  include "../koneksi.php";

  $nama_reservasi   = $_POST['nama_reservasi'];
  $email_reservasi   = $_POST['email_reservasi'];
  $notelp_reservasi   = $_POST['notelp_reservasi'];
  $jam_reservasi     = $_POST['jam_reservasi'];
  $tgl_reservasi     = $_POST['tgl_reservasi'];
  $jml_orang       = $_POST['jml_orang'];

  //buat jam waktu makan, konversi ke detik
  $detik_mulai  = strtotime($jam_reservasi);
  $detik_selesai   = $detik_mulai + 3600;


  // konversi ke jam
  $jam_mulai    = strtotime($jam_reservasi);
  $jam_selesai   = date('H:i', $detik_selesai);
  // H itu Hour, i itu menit lihat di sini https://www.w3schools.com/php/func_date_date.asp

  // $harga ada di file koneksi
  $total_bayar = ($harga * $jml_orang) + (($harga * $jml_orang) * $pajak);

  $query = "INSERT INTO tb_reservasi (id_user, nama_reservasi, email_reservasi, notelp_reservasi, tgl_reservasi, jam_reservasi, jml_orang, total_bayar) VALUES('$_SESSION[id_user]','$nama_reservasi', '$email_reservasi', '$notelp_reservasi','$tgl_reservasi','$jam_reservasi','$jml_orang','$total_bayar')";

  $add = mysqli_query($con, $query);

  if ($add) {
    echo "<script language = 'JavaScript'>
        confirm('Anda Telah melakukan reservasi!');
        document.location='index_cus.php?page=bukti_reservasi';
        </script>";
  }
}
