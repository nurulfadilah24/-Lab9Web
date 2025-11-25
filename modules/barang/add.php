<?php
include 'views/header.php';
?>

<div class="page-header">
    <h2>➕ Tambah Barang Baru</h2>
    <a href="index.php?module=barang&action=list" class="btn btn-secondary">
        ↩️ Kembali
    </a>
</div>

<div class="form-container">
    <form method="POST" action="index.php?module=barang&action=add" 
          enctype="multipart/form-data" class="barang-form">
        
        <div class="form-group">
            <label for="nama">Nama Barang *</label>
            <input type="text" id="nama" name="nama" required 
                   placeholder="Masukkan nama barang">
        </div>

        <div class="form-group">
            <label for="kategori">Kategori *</label>
            <select id="kategori" name="kategori" required>
                <option value="">Pilih Kategori</option>
                <option value="Komputer">Komputer</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Hand Phone">Hand Phone</option>
            </select>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="harga_jual">Harga Jual *</label>
                <input type="number" id="harga_jual" name="harga_jual" required 
                       placeholder="Masukkan harga jual">
            </div>

            <div class="form-group">
                <label for="harga_beli">Harga Beli *</label>
                <input type="number" id="harga_beli" name="harga_beli" required 
                       placeholder="Masukkan harga beli">
            </div>
        </div>

        <div class="form-group">
            <label for="stok">Stok *</label>
            <input type="number" id="stok" name="stok" required 
                   placeholder="Masukkan jumlah stok">
        </div>

        <div class="form-group">
            <label for="file_gambar">Gambar Barang</label>
            <input type="file" id="file_gambar" name="file_gambar" 
                   accept="image/*">
            <small>Format: JPG, PNG, GIF. Maksimal 2MB</small>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">💾 Simpan Barang</button>
            <a href="index.php?module=barang&action=list" class="btn btn-secondary">
                ❌ Batal
            </a>
        </div>
    </form>
</div>

<?php include 'views/footer.php'; ?>