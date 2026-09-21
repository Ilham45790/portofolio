<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILVORA Solutions | Web Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=10.0">
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
                <a href="#about">ABOUT ME</a>
                <a href="#portfolio">PORTFOLIO</a>
                <a href="https://wa.me/6285602871278" target="_blank" class="btn-nav-accent">CONSULTATION</a>
            </nav>

            <button class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main>
        <section id="hero" class="hero-section">
            <div class="hero-container">
                
                <div class="hero-left">
                    <p class="hero-subtitle">Professional Web Developer</p>
                    <h1 class="hero-title">M ILHAM SAPUTRO</h1>
                    <p class="hero-desc">
                        Membantu UMKM, corporate, dan brand lokal membangun platform digital berkelas dunia. Bersama saya, mari wujudkan website kustom yang responsif, estetik, dan optimal di halaman mesin pencari Google.
                    </p>
                    <div class="hero-buttons">
                        <a href="https://wa.me/6285602871278" target="_blank" class="btn-primary">CHAT NOW</a>
                        <a href="#portfolio" class="btn-text-link">PORTFOLIO &rarr;</a>
                    </div>
                </div>
                
                <div class="hero-right">
                    <div class="hero-image-wrapper">
                        <img src="assets/fotoilham.png" alt="M Ilham Saputro">
                    </div>
                </div>

            </div>
        </section>

        <section class="logo-bar">
            <div class="logo-bar-track">
                <div class="logo-item"><span>✦</span> WEBSITE DEVELOPER</div>
                <div class="logo-item"><span>●</span> COMPANY PROFILE</div>
                <div class="logo-item"><span>✦</span> UMKM DIGITAL SOLUTION</div>
                <div class="logo-item"><span>●</span> LANDING PAGE SPECIALIST</div>
            </div>
        </section>

        <section id="about" class="about-section">
            <div class="wrapper">
                <div class="about-grid">
                    <div>
                        <span class="section-tag">ABOUT ME</span>
                        <h2 class="about-main-title">Behind the Craft.</h2>
                    </div>
                    <div class="about-right">
                        <h3 class="about-opening">Halo, Saya M. Ilham Saputro</h3>
                        <p class="about-text">
                            Saya adalah Full-stack Web Developer & Founder dari ILVORA Solutions. Fokus utama saya adalah mentransformasi bisnis konvensional menuju ekosistem digital modern dengan memadukan aspek estetik fungsional dan optimasi SEO dasar.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio-section">
            <div class="wrapper">
                <span class="section-tag">MY WORKS</span>
                <h2 class="section-title">Portofolio Projek</h2>
                
                <div class="portfolio-grid-4">
    
    <a href="detail.php?id=1" class="card-project" style="text-decoration: none; color: inherit; display: block;">
        <div class="card-img-box">
            <img src="assets/projek1.png" alt="E-Commerce">
        </div>
        <div class="card-info">
            <h3>Studio Editorial Corporate</h3>
            <p>Web Design & Development</p>
        </div>
    </a>
    
    <a href="detail.php?id=2" class="card-project" style="text-decoration: none; color: inherit; display: block;">
        <div class="card-img-box">
            <img src="assets/projek2.png" alt="Minimalist Brand Catalog">
        </div>
        <div class="card-info">
            <h3>Landing Page</h3>
            <p>Custom Landing Page</p>
        </div>
    </a>

    <a href="detail.php?id=3" class="card-project" style="text-decoration: none; color: inherit; display: block;">
        <div class="card-img-box">
            <img src="assets/projek3.png" alt="Admin Control Panel">
        </div>
        <div class="card-info">
            <h3>Admin Control Panel</h3>
            <p>Manajemen Conten & Proyek</p>
        </div>
    </a>
    
</div>
            </div>
        </section>
    </main>

    <footer style="padding: 30px 0; border-top: 1px solid rgba(255,255,255,0.05); background: #0a0a0b; text-align: center; font-size: 0.8rem; color: var(--text-muted);">
        <p>&copy; <?php echo date('Y'); ?> <span style="color: var(--color-gold); font-weight:600;">ILVORA Solutions</span>. All Rights Reserved.</p>
    </footer>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        const links = navLinks.getElementsByTagName('a');
        for (let link of links) {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        }
    </script>

</body>
</html>