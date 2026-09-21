<?php
// DAFTAR DATA PROYEK KAMU (Tinggal tambah/kurang di sini kalau ada proyek baru)
$projects = [
    1 => [
        'title'       => 'E-Commerce',
        'category'    => 'Web Design & Development',
        'description' => 'Projek ini berfokus pada transformasi platform digital untuk Studio Editorial Corporate guna memperkuat identitas brand mereka di ranah B2B. Pendekatan yang digunakan mengutamakan tata letak bergaya editorial premium yang bersih dan minimalis.',
        'client'      => 'Studio Editorial Jakarta',
        'year'        => '2025',
        'image'       => 'projek1.png', // sesuaikan dengan nama file di folder assets
        'live_link'   => 'https://wa.me/6285602871278',
        // TAMBAHAN: Daftar foto gallery khusus projek 1
        'gallery'     => ['projek1.png', 'detail-produk1.png', 'detail-produk2.png', 'detail-produk3.png']
    ],
    2 => [
        'title'       => 'Landing Page',
        'category'    => 'Custom Landing Page',
        'description' => 'Pembuatan landing page katalog produk yang minimalis dan elegan untuk meningkatkan konversi penjualan brand lokal. Desain fokus pada produk dengan navigasi yang sangat mulus.',
        'client'      => 'Local Brand Bandung',
        'year'        => '2026',
        'image'       => 'projek2.png',
        'live_link'   => 'https://denyartgallery.com/index.php#about',
        // TAMBAHAN: Daftar foto gallery khusus projek 2
        'gallery'     => ['projek2.png', 'detail-produk-d-1.png', 'detail-produk-d-2.png', 'detail-produk-d-3.png', 'detail-produk-d-4.png', 'detail-produk-d-5.png', 'detail-produk-d-6.png', 'detail-produk-d-7.png']
    ],
    3 => [
        'title'       => 'Admin Control Panel',
        'category'    => 'Manajemen Conten & Proyek',
        'description' => 'Website profil perusahaan untuk UMKM agar terlihat lebih profesional dan terpercaya di mata konsumen. Dilengkapi dengan optimasi SEO agar mudah ditemukan di Google.',
        'client'      => 'Maju Bersama UMKM',
        'year'        => '2025',
        'image'       => 'projek3.png',
        'live_link'   => 'https://wa.me/6285602871278',
        
        // =========================================================================
        // DI SINI TEMPAT KAMU MEMASUKKAN FOTO UNTUK SLIDE PREVIEW 1 DAN PREVIEW 2
        // =========================================================================
        'gallery_preview1' => ['projek3.png', 'admin-d-1.png', 'admin-d-2.png', 'admin-d-3.png', 'admin-d-4.png' ], // Isi Foto Slide untuk Preview 1 (Kiri)
        'gallery_preview2' => ['projek4.png', 'admin-b-1.png', 'admin-b-2.png', 'admin-b-3.png', 'admin-b-4.png', 'admin-b-5.png', 'admin-b-6.png', 'admin-b-7.png' ] // Isi Foto Slide untuk Preview 2 (Kanan)
    ]
];

// Ambil ID dari URL (misal: detail.php?id=1)
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Jika ID tidak ada di daftar, balikkan ke halaman utama
if (!array_key_exists($id, $projects)) {
    header("Location: index.php");
    exit;
}

// Ambil data proyek yang dipilih
$project = $projects[$id];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project['title']; ?> | ILVORA Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=10.0">
    <style>
        body { background: #0a0a0b; color: #ffffff; font-family: 'Inter', sans-serif; }
        .detail-section { padding: 140px 0 80px 0; min-height: 80vh; }
        .detail-container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
        .btn-back { display: inline-block; margin-bottom: 30px; color: var(--color-gold, #f4c430); text-decoration: none; font-weight: 500; font-size: 0.9rem; transition: transform 0.2s; }
        .btn-back:hover { transform: translateX(-5px); }
        .project-header { margin-bottom: 40px; }
        .project-category { color: var(--color-gold, #f4c430); font-size: 0.85rem; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; display: block; margin-bottom: 10px; }
        .project-title { font-size: 2.8rem; font-weight: 800; letter-spacing: -1px; margin: 0 0 20px 0; line-height: 1.2; }
        .project-info-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 60px; }
        .project-description h3 { font-size: 1.6rem; margin-top: 0; margin-bottom: 20px; font-weight: 700; border-left: 4px solid var(--color-gold, #f4c430); padding-left: 15px; }
        .project-description p { color: #a0a0a5; line-height: 1.8; margin-bottom: 20px; font-size: 1.05rem; }
        .project-meta-box { background: #121214; padding: 35px; border-radius: 16px; border: 1px solid rgba(255,255,255,0.05); align-self: start; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        .meta-item { margin-bottom: 25px; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 15px; }
        .meta-item:last-child { margin-bottom: 0; border-bottom: none; padding-bottom: 0; }
        .meta-label { font-size: 0.75rem; color: #66666a; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 8px; }
        .meta-value { font-size: 1rem; color: #ffffff; font-weight: 500; }
        .meta-value a { color: var(--color-gold, #f4c430); text-decoration: none; font-weight: 600; }
        @media (max-width: 768px) { .detail-section { padding: 100px 0 60px 0; } .project-info-grid { grid-template-columns: 1fr; gap: 40px; } .project-title { font-size: 2.2rem; } }

        /* STYLE CSS LIGHTBOX FIXED */
        .lightbox {
            position: fixed; z-index: 99999; top: 0; left: 0; width: 100vw; height: 100vh;
            background-color: rgba(0, 0, 0, 0.95); display: none; align-items: center; justify-content: center;
        }
        .lightbox-content { max-width: 80%; max-height: 80vh; display: flex; align-items: center; justify-content: center; }
        .lightbox-content img {
            max-width: 100%; max-height: 80vh; object-fit: contain; border-radius: 8px;
            box-shadow: 0 0 30px rgba(0,0,0,0.8); animation: zoom 0.3s ease;
        }
        @keyframes zoom { from {transform: scale(0.95); opacity: 0;} to {transform: scale(1); opacity: 1;} }
        .lightbox-close { position: absolute; top: 20px; right: 30px; color: #fff; font-size: 50px; font-weight: 300; cursor: pointer; z-index: 100000; transition: color 0.2s; line-height: 1; }
        .lightbox-close:hover { color: var(--color-gold, #f4c430); }
        .lightbox-arrow { position: absolute; top: 50%; transform: translateY(-50%); color: rgba(255, 255, 255, 0.7); font-size: 45px; font-weight: bold; padding: 20px; cursor: pointer; user-select: none; z-index: 100000; transition: all 0.2s; }
        .lightbox-arrow:hover { color: var(--color-gold, #f4c430); background-color: rgba(255,255,255,0.05); border-radius: 50%; }
        .arrow-left { left: 20px; }
        .arrow-right { right: 20px; }
        @media (max-width: 768px) { .lightbox-content { max-width: 90%; } .lightbox-arrow { font-size: 30px; padding: 10px; } .arrow-left { left: 5px; } .arrow-right { right: 5px; } .lightbox-close { top: 15px; right: 20px; font-size: 40px; } }

        /* STYLE CSS UNTUK 1 ATAU 2 KOTAK PREVIEW */
        .project-images-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 50px;
        }
        .project-main-image-single {
            width: 100%;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 50px;
            border: 1px solid rgba(255,255,255,0.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            cursor: pointer;
        }
        .project-main-image-single img {
            width: 100%;
            height: auto;
            display: block;
        }
        .project-box-image {
            width: 100%;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            cursor: pointer;
            position: relative;
            aspect-ratio: 16 / 10;
            background: #121214;
        }
        .project-box-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }
        .project-box-image:hover img {
            transform: scale(1.03);
        }
        .image-overlay-text {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0));
            text-align: center;
            color: var(--color-gold, #f4c430);
            font-size: 0.85rem;
            font-weight: 500;
            opacity: 0.8;
            transition: opacity 0.2s;
        }
        .project-box-image:hover .image-overlay-text {
            opacity: 1;
        }
        @media (max-width: 768px) {
            .project-images-wrapper { grid-template-columns: 1fr; gap: 15px; margin-bottom: 35px; }
        }
    </style>
</head>
<body>

    <header class="top-nav">
        <div class="nav-container">
            <div class="logo">
                <a href="index.php" class="logo-wrapper">
                    <img src="assets/logo.png" alt="ILVORA Logo" class="main-logo">
                    <span class="logo-text">ILVORA<span style="color:var(--color-gold);">SOLUTIONS</span></span>
                </a>
            </div>
            <nav class="nav-links" id="navLinks">
                <a href="index.php#about">ABOUT ME</a>
                <a href="index.php#portfolio">PORTFOLIO</a>
                <a href="https://wa.me/6285602871278" target="_blank" class="btn-nav-accent">CONSULTATION</a>
            </nav>
        </div>
    </header>

    <main class="detail-section">
        <div class="detail-container">
            <a href="index.php#portfolio" class="btn-back">&larr; Kembali ke Portofolio</a>
            
            <div class="project-header">
                <span class="project-category"><?php echo $project['category']; ?></span>
                <h1 class="project-title"><?php echo $project['title']; ?></h1>
            </div>
            
            <?php if (isset($project['gallery_preview1']) && isset($project['gallery_preview2'])): ?>
                <div class="project-images-wrapper">
                    
                    <div>
                        <div class="project-box-image" onclick="openLightboxGroup('preview1', 0)">
                            <img src="assets/<?php echo $project['gallery_preview1'][0]; ?>" alt="<?php echo $project['title']; ?> - Preview 1">
                        </div>
                        <div style="text-align: center; margin-top: 15px;">
                            <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 600; margin: 0;">
                                Admin Tembaga Alumunium
                                
                            </h3>
                        </div>
                    </div>
                    
                    <div>
                        <div class="project-box-image" onclick="openLightboxGroup('preview2', 0)">
                            <img src="assets/<?php echo $project['gallery_preview2'][0]; ?>" alt="<?php echo $project['title']; ?> - Preview 2">
                        </div>
                        <div style="text-align: center; margin-top: 15px;">
                            <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 600; margin: 0;">
                                Admin Toko Baju
                            </h3>
                        </div>
                    </div>

                </div>
            <?php else: ?>
                <div class="project-main-image-single" onclick="openLightboxGroup('standard', 0)">
                    <img src="assets/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                </div>
            <?php endif; ?>
            
            <div id="hidden-gallery-container" style="display: none;">
                <?php if (isset($project['gallery_preview1']) && isset($project['gallery_preview2'])): ?>
                    <div class="slide-group" data-group="preview1">
                        <?php foreach ($project['gallery_preview1'] as $imgSrc) { echo '<span class="slide-src">assets/' . $imgSrc . '</span>'; } ?>
                    </div>
                    <div class="slide-group" data-group="preview2">
                        <?php foreach ($project['gallery_preview2'] as $imgSrc) { echo '<span class="slide-src">assets/' . $imgSrc . '</span>'; } ?>
                    </div>
                <?php else: ?>
                    <div class="slide-group" data-group="standard">
                        <?php 
                        if (isset($project['gallery']) && is_array($project['gallery'])) {
                            foreach ($project['gallery'] as $imgSrc) { echo '<span class="slide-src">assets/' . $imgSrc . '</span>'; }
                        } else {
                            echo '<span class="slide-src">assets/' . $project['image'] . '</span>';
                        }
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="project-info-grid">
                <div class="project-description">
                    <h3>Tentang Projek</h3>
                    <p><?php echo $project['description']; ?></p>
                </div>
                
                <div class="project-meta-box">
                    <div class="meta-item">
                        <span class="meta-label">Klien</span>
                        <span class="meta-value"><?php echo $project['client']; ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Layanan</span>
                        <span class="meta-value"><?php echo $project['category']; ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Tahun Rilis</span>
                        <span class="meta-value"><?php echo $project['year']; ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Live Link</span>
                        <span class="meta-value"><a href="<?php echo $project['live_link']; ?>" target="_blank">Lihat Website &rarr;</a></span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer style="padding: 30px 0; border-top: 1px solid rgba(255,255,255,0.05); background: #0a0a0b; text-align: center; font-size: 0.8rem; color: var(--text-muted);">
        <p>&copy; <?php echo date('Y'); ?> <span style="color: var(--color-gold); font-weight:600;">ILVORA Solutions</span>. All Rights Reserved.</p>
    </footer>

    <div id="lightbox" class="lightbox">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <span class="lightbox-arrow arrow-left" onclick="changeSlide(-1)">&#10094;</span>
        <div class="lightbox-content">
            <img id="lightbox-img" src="" alt="Lightbox Image">
        </div>
        <span class="lightbox-arrow arrow-right" onclick="changeSlide(1)">&#10095;</span>
    </div>

    <script>
        window.scrollTo(0, 0);

        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual';
        }

        let currentSlideIndex = 0;
        let activeGalleryGroup = [];

        function openLightboxGroup(groupName, index) {
            activeGalleryGroup = [];
            // Ambil semua foto hanya dari grup yang diklik (preview1 atau preview2)
            const groupContainer = document.querySelector(`.slide-group[data-group="${groupName}"]`);
            if (groupContainer) {
                const elements = groupContainer.querySelectorAll('.slide-src');
                elements.forEach(el => {
                    activeGalleryGroup.push(el.innerText.trim());
                });
            }

            if (activeGalleryGroup.length === 0) return;
            
            currentSlideIndex = index;
            document.getElementById('lightbox').style.display = 'flex';
            updateLightboxImage();
            document.body.style.overflow = 'hidden'; 
        }

        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
            document.body.style.overflow = 'auto'; 
        }

        function changeSlide(direction) {
            if (activeGalleryGroup.length === 0) return;
            currentSlideIndex += direction;
            if (currentSlideIndex >= activeGalleryGroup.length) {
                currentSlideIndex = 0;
            }
            if (currentSlideIndex < 0) {
                currentSlideIndex = activeGalleryGroup.length - 1;
            }
            updateLightboxImage();
        }

        function updateLightboxImage() {
            const lightboxImg = document.getElementById('lightbox-img');
            lightboxImg.src = activeGalleryGroup[currentSlideIndex];
        }

        document.addEventListener('keydown', function(e) {
            const lightbox = document.getElementById('lightbox');
            if (lightbox.style.display === 'flex') {
                if (e.key === "Escape") closeLightbox();
                if (e.key === "ArrowRight") changeSlide(1);
                if (e.key === "ArrowLeft") changeSlide(-1);
            }
        });
    </script>
</body>
</html>