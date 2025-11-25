<?php
include 'views/header.php';

// Get data from database
$sql = "SELECT * FROM data_barang ORDER BY id_barang DESC";
$result = mysqli_query($conn, $sql);
?>

<div class="page-header">
    <h2>📦 Data Barang</h2>
    <div class="action-buttons">
        <a href="index.php?module=barang&action=add" class="btn btn-primary">
            ➕ Tambah Barang
        </a>
        <a href="index.php?module=dashboard" class="btn btn-secondary">
            📊 Dashboard
        </a>
    </div>
</div>

<div class="table-container">
    <?php if ($result && mysqli_num_rows($result) > 0): ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td>
                        <?php if ($row['gambar']): ?>
                            <img src="<?= $row['gambar'] ?>" alt="<?= $row['nama'] ?>" 
                                 width="60" height="60" class="product-image">
                        <?php else: ?>
                            <div class="no-image">No Image</div>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td>
                        <span class="category-badge"><?= $row['kategori'] ?></span>
                    </td>
                    <td class="price"><?= formatRupiah($row['harga_jual']) ?></td>
                    <td class="price"><?= formatRupiah($row['harga_beli']) ?></td>
                    <td>
                        <span class="stock <?= $row['stok'] > 0 ? 'in-stock' : 'out-of-stock' ?>">
                            <?= $row['stok'] ?>
                        </span>
                    </td>
                    <td class="action-buttons">
                        <a href="index.php?module=barang&action=edit&id=<?= $row['id_barang'] ?>" 
                           class="btn btn-edit">✏️ Edit</a>
                        <a href="index.php?module=barang&action=delete&id=<?= $row['id_barang'] ?>" 
                           class="btn btn-delete" 
                           onclick="return confirm('Yakin ingin menghapus barang <?= $row['nama'] ?>?')">
                           🗑️ Hapus
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="no-data">
            <p>📭 Tidak ada data barang.</p>
            <a href="index.php?module=barang&action=add" class="btn btn-primary">
                Tambah Barang Pertama
            </a>
        </div>
    <?php endif; ?>
</div>

<?php include 'views/footer.php'; ?>