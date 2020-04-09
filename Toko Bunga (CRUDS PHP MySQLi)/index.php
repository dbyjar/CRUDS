<!DOCTYPE html>
<html>
    <head>
        <title>Toko Bunga</title>
        <link type="text/css" href="style.css" rel="stylesheet">
    </head>
    <body>
	<center>
        <?php include('function/koneksi.php'); ?>

        <center><h3>Daftar Bunga</h3></center><br>

        <!-- form pencarian -->
        <form action="index.php" method="get" style="margin-bottom: 20px;">
            <input type="text" name="cari">
            <button type="submit">Cari</button>
        </form>

        <a href="form_tambah.php" class="btn">+ Tambah</a>
        <table border="1">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th colspan="2">Action</th>
            </tr>

	        <?php
	            $no = 1;

                // jika ada data pencarian didapat dari url
	            if (isset($_GET['cari'])) {
	                $cari = $_GET['cari'];
	                $data = mysqli_query($koneksi, "SELECT * FROM daftar_bunga WHERE nama_bunga LIKE '%".$cari."%'");
	            } else {
                    // jika tidak ada data pencarian
	                $data = mysqli_query($koneksi, "SELECT * FROM daftar_bunga WHERE status='iya'");
	            }
	        ?>

            <?php foreach($data as $d) : ?>
                
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['nama_bunga'] ?></td>
                    <td><?= $d['harga'] ?></td>
                    <td><?= $d['stok'] ?></td>
                    <td><a href="form-edit.php?id=<?= $d['id_bunga'] ?>">Edit</a></td>
                    <td><a href="function/hapus.php?id=<?= $d['id_bunga'] ?>">Hapus</a></td>
                </tr>
            
            <?php endforeach ?>

        </table>

            <!-- menghitung jumlah data -->
            <?php $tot = mysqli_num_rows($data); ?>
            <div style="margin-top: 10px;">Total Bungan : <?= $tot ?></div>
       
       </center>
    </body>
</html>