<?php
if (isset($_POST['reservasi'])) {
  include "../koneksi.php";

  $query = mysqli_query($con, "Insert into tb_user(nama_reservasi, email_reservasi, notelp_reservasi, tgl_reservasi, jam_reservasi) values('$_POST[nama_reservasi]','$_POST[email_reservasi]','$_POST[notelp_reservasi]','$_POST[tgl_reservasi]','$_POST[tgl_reservasi],'$_POST[jam_reservasi]',)");

  echo "<script language = 'JavaScript'>
        confirm('Data Reservasi Telah Disimpan!');
        document.location='index_cus.php?page=bukti_reservasi';
        </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Resto Suka Makan - Reservasi</title>
</head>

<body>
  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <p>Reservasi <span>Meja-mu</span> Bersama Kami</p>
      </div>

      <div class="row g-0">
        <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>
        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
          <form action="proses_reservasi.php" method="post">
            <div class="row gy-4">
              <h5 align="center">Masukan Data reservasi</h5>
              <div class="col-lg-4 col-md-6">
                <input type="text" name="nama_reservasi" class="form-control" placeholder="Nama">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="email_reservasi" placeholder="Email">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="notelp_reservasi" placeholder="No. Telp">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="date" name="tgl_reservasi" class="form-control" placeholder="Tanggal">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="time" class="form-control" name="jam_reservasi" placeholder="Jam">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="number" min="1" class="form-control" name="jml_orang" placeholder="Jumlah Orang" required>
                <div class="validate"></div>
              </div>
            </div>
            <br>
            <center>
              <button type="submit" name="submit_reservasi" class="btn btn-primary">Book Now!</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </section><!-- End Book A Table Section -->
</body>

</html>