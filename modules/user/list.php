<?php
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<div class="content">
    <h2>Data Barang</h2>
    
    <a href="index.php?page=user/add" class="btn btn-success" style="margin-bottom: 1rem;">Tambah Barang</a>
    
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && mysqli_num_rows($result) > 0): ?>
                    <?php while($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['nama']); ?></td>
                        <td><?php echo htmlspecialchars($row['kategori']); ?></td>
                        <td>Rp <?php echo number_format($row['harga_jual'], 0, ',', '.'); ?></td>
                        <td>Rp <?php echo number_format($row['harga_beli'], 0, ',', '.'); ?></td>
                        <td><?php echo $row['stok']; ?></td>
                        <td>
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn" style="background: #e74c3c;">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" style="text-align: center;">Tidak ada data barang</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>