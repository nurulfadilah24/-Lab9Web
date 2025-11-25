<?php
// modules/barang/tambah.php
?>

<div class="container">
    <h2>Tambah Barang</h2>
    <form action="" method="post">
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" required>
        </div>
        <div class="form-group">
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" required>
        </div>
        <div class="form-group">
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" required>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
</div>
