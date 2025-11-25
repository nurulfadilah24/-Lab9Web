<?php
require_once 'config/session.php';
require_once 'config/database.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

$allowed_pages = [
    'dashboard' => 'views/dashboard.php',
    'user/list' => 'modules/user/list.php', 
    'user/add' => 'modules/user/add.php',
    'auth/login' => 'modules/auth/login.php',
    'auth/logout' => 'modules/auth/logout.php'
];

$page_file = $allowed_pages[$page] ?? 'views/dashboard.php';

include 'views/header.php';

if (file_exists($page_file)) {
    include $page_file;
} else {
    echo '<div class="content"><h2>Halaman tidak ditemukan</h2></div>';
}

include 'views/footer.php';
?>