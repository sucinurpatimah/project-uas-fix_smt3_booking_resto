<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "project_uas";

$con = mysqli_connect($host, $user, $pass, $db);


// ini harga paten bayar makanan;
$harga = 109000;
$pajak = 0.11;

/*function status_reservasi($status){
	if($status == "selesai"){
		echo "<span class='btn btn-sm btn-danger'>Expired</span>";
	}else{
		echo "<span class='btn btn-sm btn-success'>Valid</span>";
	}
}
?>*/