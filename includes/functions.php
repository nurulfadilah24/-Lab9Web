<?php
// includes/functions.php

function processLogin() {
    global $conn;
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    
    // Simple authentication (in real app, use password_hash and password_verify)
    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = true;
        
        header('Location: index.php?module=barang&action=list');
        exit;
    } else {
        $_SESSION['error'] = 'Username atau password salah!';
        header('Location: index.php?module=auth&action=login');
        exit;
    }
}

function processAddBarang() {
    global $conn;
    
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $harga_jual = mysqli_real_escape_string($conn, $_POST['harga_jual']);
    $harga_beli = mysqli_real_escape_string($conn, $_POST['harga_beli']);
    $stok = mysqli_real_escape_string($conn, $_POST['stok']);
    $gambar = null;

    // Handle file upload
    if (isset($_FILES['file_gambar']) && $_FILES['file_gambar']['error'] == 0) {
        $filename = str_replace(' ', '_', $_FILES['file_gambar']['name']);
        $upload_dir = 'uploads/gambar/';
        
        // Create directory if not exists
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $destination = $upload_dir . $filename;
        if (move_uploaded_file($_FILES['file_gambar']['tmp_name'], $destination)) {
            $gambar = $destination;
        }
    }

    $sql = "INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar) 
            VALUES ('$nama', '$kategori', '$harga_jual', '$harga_beli', '$stok', " . 
            ($gambar ? "'$gambar'" : "NULL") . ")";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = 'Barang berhasil ditambahkan!';
        header('Location: index.php?module=barang&action=list');
    } else {
        $_SESSION['error'] = 'Error: ' . mysqli_error($conn);
        header('Location: index.php?module=barang&action=add');
    }
    exit;
}

function processEditBarang($id) {
    global $conn;
    
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $harga_jual = mysqli_real_escape_string($conn, $_POST['harga_jual']);
    $harga_beli = mysqli_real_escape_string($conn, $_POST['harga_beli']);
    $stok = mysqli_real_escape_string($conn, $_POST['stok']);
    $gambar = null;

    // Handle file upload
    if (isset($_FILES['file_gambar']) && $_FILES['file_gambar']['error'] == 0) {
        $filename = str_replace(' ', '_', $_FILES['file_gambar']['name']);
        $upload_dir = 'uploads/gambar/';
        $destination = $upload_dir . $filename;
        
        if (move_uploaded_file($_FILES['file_gambar']['tmp_name'], $destination)) {
            $gambar = $destination;
        }
    }

    $sql = "UPDATE data_barang SET 
            nama = '$nama', 
            kategori = '$kategori', 
            harga_jual = '$harga_jual', 
            harga_beli = '$harga_beli', 
            stok = '$stok'";
    
    if ($gambar) {
        $sql .= ", gambar = '$gambar'";
    }
    
    $sql .= " WHERE id_barang = '$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = 'Barang berhasil diupdate!';
    } else {
        $_SESSION['error'] = 'Error: ' . mysqli_error($conn);
    }
    
    header('Location: index.php?module=barang&action=list');
    exit;
}

function formatRupiah($angka) {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function is_select($var, $val) {
    return $var == $val ? 'selected="selected"' : '';
}
?>