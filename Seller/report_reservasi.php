<body onload="javascript:window.print()" style="margin:0 auto; width: 1000px;">
	<div style="margin-left: 20px;"></div>
	<table width="90%" cellspacing="0" cellpadding="0">
		<div style="margin-left: 20px;"></div>
   			<img src="Gambar/logo_mashu.jpg" style="width:100; float: left:">
		<table width="90%" cellspacing="0" cellpadding="0"></table>
		<tr>
			<td><center><font size="6" color="red"><b> RESTO SUKA MAKAN </b></font></center></td>
		</tr>
		<tr>
			<td><center><font size="4"> Jl. Pekalangan No. 107 <br>
              Cirebon, Jawa Barat, Indonesia.</font></center></td>
		</tr>
		<tr>
			<td><center><font size="3"> Telp : 0895-3460-57189, E-Mail : sukamakan@gmail.com</font></center></td>
		</tr>
	</table><br><hr>

	<label>
		<font size="4"><u><center>Laporan Reservasi</center></u></font>
	</label>
	<p><!-- &nbsp; --></p>

	<table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspadding="0">

		<tr>
			<th style="border-right: 1px solid gray; text-align: center">No.</th>
			<th style="border-right: 1px solid gray; text-align: center">Nama Reservasi</th>
			<th style="border-right: 1px solid gray; text-align: center">Tanggal Reservasi</th>
			<th style="border-right: 1px solid gray; text-align: center">Jumlah Orang</th>
			<th style="border-right: 1px solid gray; text-align: center">Total</th>
		</tr>

		<?php
                error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                include"../koneksi.php";
                $no=1;
                $id = $_GET['id'];
                $sql = mysqli_query($con,"SELECT * FROM tb_reservasi");
                $fetch = mysqli_fetch_array($sql);

                while ($rows = mysqli_fetch_array($sql)) {
                ?>
               <tr>
                  <td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px"><?php echo"$no"; ?></td>
                  <td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px"><?php echo"$rows[nama_reservasi]"; ?></td>
                  <td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px"><?php echo"$rows[tgl_reservasi]"; ?></td>
                  <td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px"><?php echo"$rows[jml_orang]"; ?></td>
                  <td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px"><?php echo"$rows[total_bayar]"; ?></td>
                </tr>
                <?php $no++;} ?>
		
	</table>

	<p>&nbsp;</p>

	<table align="border-right" cellpadding="0" cellspacing="0">
		<tr>
			<td><center> Cirebon, <?php echo date("d F Y"); ?></center></td>
		</tr>
		<tr>
			<td><center> Pemilik </center>
				<p>&nbsp;</p>
				<center><u>RESTO SUKA MAKAN</u></center>
			</td>
		</tr>
	</table>

</body>