<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">TABEL DATA MOTOR</h1></p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="index_seller.php?page=data_produk_add" class="btn btn-primary">Tambah Data</a><p></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>Nama</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                            <tbody>
                <?php
                include"../koneksi.php";
                $no=1;
                $sql = mysqli_query($con,"Select * from tb_produk");
                while($rp = mysqli_fetch_array($sql)){
                ?>
               <tr>
                  <td><?php echo"$no"; ?></td>
                  <td><?php echo"$rp[nm_produk]"; ?></td>
                  <td><img src="<?php echo"Gambar/$rp[gambar]"; ?>" width="150" height="200"></td>
                  <td>
                    <a href="<?php echo"index_seller.php?page=data_produk_edit&&id=$rp[id_produk]"; ?>" class="btn btn-warning">EDIT</a>
                  <a href="<?php echo"index_seller.php?page=data_produk_delete&&id=$rp[id_produk]"; ?>" class="btn btn-danger" onclick="javascript: return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
                </td>

                </tr>
                <?php $no++;} ?>
                                        </tbody>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</html>