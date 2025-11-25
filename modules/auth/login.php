<?php
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Simple authentication (bisa diganti dengan database)
    if ($username === 'nurul' && $password === 'nurul123') {
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = 'nurul';
        $_SESSION['role'] = 'Administrator';
        header('Location: index.php?page=dashboard');
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<div class="login-page">
    <div class="login-container">
        <div class="login-header">
            <h2>Masuk ke Sistem</h2>
            <p>Silakan masuk dengan akun Anda</p>
        </div>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-error">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" class="login-form">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required 
                       placeholder="Masukkan username">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required 
                       placeholder="Masukkan password">
            </div>
            
            <button type="submit" name="login" class="login-btn">Masuk</button>
        </form>
    </div>
</div>