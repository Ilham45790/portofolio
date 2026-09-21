<?php
// Mendapatkan nama file yang sedang aktif untuk fitur menu active
$current_page = basename($_SERVER['PHP_SELF']);
?>
<aside class="sidebar">
    <div class="logo-container">
        <!-- Deteksi otomatis jika ada file logo, jika tidak pakai teks fallback -->
        <?php if(file_exists('assets/logo.png')): ?>
            <img src="assets/logo.png" alt="Logo" class="logo-img">
        <?php else: ?>
            <h1 class="logo-fallback">PORTFOLIO</h1>
        <?php endif; ?>
    </div>
    
    <nav class="nav-menu">
        <!-- Jika halaman utama memakai sistem single-page scroll -->
        <a href="index.php#hero" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Beranda</a>
        <a href="index.php#portfolio" class="nav-link">Portofolio</a>
        <a href="index.php#about" class="nav-link">Tentang Saya</a>
        <a href="index.php#contact" class="nav-link">Kontak</a>
    </nav>

    <div class="sidebar-footer">
        <p>&copy; <?php echo date('Y'); ?> Hak Cipta Dilindungi.</p>
    </div>
</aside>