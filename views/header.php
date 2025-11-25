<?php
$current_user = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Barang</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1> Sistem Data Barang</h1>
            <div class="user-menu">
                <?php if ($current_user): ?>
                    <div class="user-info">
                        <span>Halo, <?php echo htmlspecialchars($current_user); ?></span>
                        <a href="index.php?page=auth/logout" class="logout-btn">Logout</a>
                    </div>
                <?php else: ?>
                    <a href="index.php?page=auth/login" class="login-btn">Login</a>
                <?php endif; ?>
            </div>
        </header>

        <?php if ($current_user): ?>
        <nav>
            <a href="index.php?page=dashboard">Dashboard</a>
            <a href="index.php?page=user/list">Data Barang</a>
            <a href="index.php?page=user/add">Tambah Barang</a>
        </nav>
        <?php endif; ?>
