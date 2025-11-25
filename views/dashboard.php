<div class="content">
    <h2>Dashboard</h2>
    
    <?php if (isset($_SESSION['username'])): ?>
        <div class="welcome-message">
            <p>Selamat datang, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
        </div>
    <?php endif; ?>
    
    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-number">15</div>
            <div class="stat-label">Total Barang</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">3</div>
            <div class="stat-label">Kategori</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">125</div>
            <div class="stat-label">Stok Total</div>
        </div>
    </div>
    
    <div style="margin-top: 2rem;">
        <a href="index.php?page=user/list" class="btn">Lihat Data Barang</a>
        <a href="index.php?page=user/add" class="btn btn-success">Tambah Barang</a>
    </div>
</div>