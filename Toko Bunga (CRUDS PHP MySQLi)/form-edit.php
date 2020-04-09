<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
        <link type="text/css" href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include "function/koneksi.php";

            // mendapatkan data id dari url
            $id = $_GET['id'];
            $query = mysqli_query($koneksi, "SELECT * FROM daftar_bunga WHERE id_bunga=$id"); 
            $data = mysqli_fetch_array($query)
        ?>

    <center>
        <h3>Memperbarui Daftar Bunga</h3>
    </center>

        <form class="form" action="function/edit_action.php" method="post">
            <div class="element-form">
                <label>Nama Bunga</label>
                <input type="hidden" name="id" value='<?php echo $data['id_bunga']; ?>' />
                <input type="text" name="nama" value='<?php echo $data['nama_bunga']; ?>' />
            </div>
            <div class="element-form">
                <label>Harga</label>
                <input type="text" name="harga" value='<?php echo $data['harga']; ?>' />
            </div>
            <div class="element-form">
                <label>Stok</label>
                <input type="text" name="stok" value='<?php echo $data['stok']; ?>' />
            </div>
            <div class="element-form">
                <label>Tampil</label>
                <input type="radio" name="status" value="iya" />Iya
                <input type="radio" name="status" value="ga" />Ga
                <div>*Jangan lupa pilih salah satu</div>
            </div>
            <div class="element-form">
                <input type="submit" class="btn" value="Perbarui" style="margin-top: 10px;">
            </div>
        </form>
    </body>
</html>