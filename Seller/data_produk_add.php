<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">TABEL DATA PRODUK</h1></p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="container-fluid">
                        <h1 class="mt-4">Data Produk</h1>                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-edit mr-1"></i>Data Produk</div>
                            <div class="card-body">
<form method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Kode Produk :</label>
                <input type="text" name="kd_produk" class="form-control" placeholder="Masukkan Nama Produk..">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Nama Produk :</label>
                <input type="text" name="nm_produk" class="form-control" placeholder="Masukkan Harga Produk..">
            </div>
        </div>
    </div><br>

     <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Gambar :</label><br>
                <input type="file" name="gambar">
            </div>
        </div>
    </div>


    <center>
        <div class="form-group mt-4 mb-0">
            <input type="submit" name="proses" class="btn btn-primary" value="Simpan Data Produk">
            <button type="reset" class="btn btn-dark">Reset</button>
        </div>
    </center>
</form>
                            </div>
                        </div>
                    </div>
                </div>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include'../koneksi.php';

    $ekstensi_ok = array('jpg', 'png', 'jpeg', 'gif');
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $nm_random = rand(1,9999);
    $nm_baru = $nm_random.'-'.$gambar;
    $folder = "Gambar/";

    if(in_array($ekstensi, $ekstensi_ok) === true){
    if($ukuran < 5000000){
        move_uploaded_file($file_tmp, $folder.$nm_baru);
    $query = mysqli_query($con,"insert into tb_produk(id_produk, kd_produk, nm_produk, gambar) value('$_POST[id_produk]','$_POST[kd_produk]','$_POST[nm_produk]','$nm_baru')");

    echo"<script language = 'JavaScript'>
        confirm('Data Anda Berhasil Ditambahkan!');
        document.location='index_seller.php?page=data_produk';
        </script>";
}else{
    echo"Ukuran File Melebihi Batas!";
}
}
else{
    echo"Format File Tidak Sesuai!";
}
}
?>

</body>

</html>