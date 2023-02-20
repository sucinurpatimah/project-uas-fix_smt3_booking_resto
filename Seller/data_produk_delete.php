<?php 
include"../koneksi.php";
$query = mysqli_query($con, "select * from tb_produk where id_produk = '$_GET[id]'");
$data_file = $query->fetch_array();

mysqli_query($con, "delete from tb_produk where id_produk = '$_GET[id]'");
unlink('Gambar/'.$data_file['gambar']);

echo"<script language = 'JavaScript'>
        confirm('Data Anda Berhasil Dihapus!');
         document.location='index_seller.php?page=data_produk';
        </script>";

?>