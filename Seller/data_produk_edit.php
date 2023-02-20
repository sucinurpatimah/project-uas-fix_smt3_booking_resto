<?php
include "../koneksi.php";
$sql = mysqli_query($con, "Select * from tb_produk where id_produk ='$_GET[id]'");
$rp = mysqli_fetch_array($sql);

?>
<div class="card shadow mb-4">
    <div class="container-fluid">
        <h1 class="mt-4">Data Produk</h1>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-edit mr-1"></i>Edit Data Produk</div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Produk :</label>
                                <input type="text" name="kd_produk" class="form-control" value="<?php echo "$rp[kd_produk]"; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Produk :</label>
                                <input type="text" name="nm_produk" class="form-control" value="<?php echo "$rp[nm_produk]"; ?>">
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
                            <input type="submit" name="update" class="btn btn-primary" value="Simpan Data Produk">
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['update'])) {

    // var_dump($_POST);
    // return 1;

    include '../koneksi.php';

    $ekstensi_ok = array('jpg', 'png', 'jpeg', 'gif');
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $nm_random = rand(1, 9999);
    $nm_baru = $nm_random . '-' . $gambar;
    $folder = "Gambar/";

    $id_transaksi = $_GET['id'];


    if (in_array($ekstensi, $ekstensi_ok) === true) {
        if ($ukuran < 5000000) {
            move_uploaded_file($file_tmp, $folder . $nm_baru);
            $query = mysqli_query($con, "UPDATE tb_produk SET kd_produk='$_POST[kd_produk]', nm_produk='$_POST[nm_produk]', gambar = '$nm_baru' where id_produk='$_GET[id]' ");
            echo "<script language = 'JavaScript'>
        confirm('Data Anda Berhasil Disimpan!');
        document.location='index_seller.php?page=data_produk';
        </script>";
        } else {
            echo "Ukuran File Melebihi Batas!";
        }
    } else {
        echo "Format File Tidak Sesuai!";
    }
}
?>