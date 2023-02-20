<?php
session_start();
$_SESSION['nmuser'] = '';
unset($_SESSION['nmuser']);
session_unset();
session_destroy();
echo"<script language = 'JavaScript'>
        confirm('Anda Telah Keluar Dari Akun, Silahkan Login Kembali!');
        document.location='../login.php';
        </script>";
?>