<!DOCTYPE html>
<html>
    <head>
        <title>Bunga Bungaan</title>
        <link type="text/css" href="style.css" rel="stylesheet">
    </head>
    <body>
    <center>
        <h3>Tambah Daftar Bunga</h3>
    </center>
        <form class="form" action="function/input_action.php" method="post">
            <div class="element-form">
                <label>Nama Bunga</label>
                <input type="text" name="nama">
            </div>
            <div class="element-form">
                <label>Harga</label>
                <input type="text" name="harga">
            </div>
            <div class="element-form">
                <label>Stok</label>
                <input type="text" name="stok">
            </div>
            <div class="element-form">
                <label>Tampil</label>
                <input type="radio" name="status" value="iya" />Iya
                <input type="radio" name="status" value="ga" />Ga
            </div>
            <div class="element-form">
                <input class="btn" type="submit" value="Tambah" style="margin-top: 10px;">
            </div>
        </form>
    </body>
</html>