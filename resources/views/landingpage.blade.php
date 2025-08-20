<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SatelitJasa - Platform Jasa Terpercaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<style>
    :root {
        --primary-black: #000000;
        --primary-white: #ffffff;
        --soft-gray: #f8f9fa;
        --border-gray: #e9ecef;
        --text-gray: #6c757d;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: var(--primary-black);
    }

    .navbar-modern {
        background: var(--primary-white) !important;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        padding: 1rem 0;
    }

    .navbar-brand img {
        transition: transform 0.3s ease;
    }

    .navbar-brand:hover img {
        transform: scale(1.05);
    }

    .nav-link {
        color: var(--primary-black) !important;
        font-weight: 500;
        margin: 0 0.5rem;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-link:hover {
        color: var(--text-gray) !important;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -5px;
        left: 50%;
        background-color: var(--primary-black);
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .profile-img {
        width: 40px;
        height: 40px;
        border: 2px solid var(--primary-black);
        transition: all 0.3s ease;
    }

    .profile-img:hover {
        transform: scale(1.1);
        border-color: var(--text-gray);
    }

    .hero-section {
        min-height: 100vh;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(51, 51, 51, 0.8) 100%), url('/images/satelite-background.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .hero-content {
        z-index: 2;
        max-width: 800px;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        color: var(--primary-white);
        margin-bottom: 2rem;
        line-height: 1.2;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: #cccccc;
        margin-bottom: 3rem;
        font-weight: 300;
    }

    .search-container {
        max-width: 600px;
        position: relative;
    }

    .search-input {
        border: none;
        border-radius: 50px;
        padding: 1rem 1.5rem;
        font-size: 1.1rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .search-input:focus {
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
    }

    .search-btn {
        border-radius: 50px;
        padding: 1rem 2rem;
        background: var(--primary-white);
        color: var(--primary-black);
        border: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .search-btn:hover {
        background: var(--soft-gray);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .category-section {
        padding: 5rem 0;
        background: var(--primary-white);
    }

    .category-btn {
        border: 2px solid var(--primary-black);
        color: var(--primary-black);
        background: transparent;
        border-radius: 25px;
        padding: 0.75rem 1.5rem;
        margin: 0.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .category-btn:hover {
        background: var(--primary-black);
        color: var(--primary-white);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .services-section {
        padding: 5rem 0;
        background: var(--soft-gray);
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-black);
        margin-bottom: 3rem;
        text-align: center;
    }

    .service-card {
        background: var(--primary-white);
        border: none;
        border-radius: 15px;
        transition: all 0.3s ease;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        margin-bottom: 2rem;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .service-card img {
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .service-card:hover img {
        transform: scale(1.05);
    }

    .card-body {
        padding: 1.5rem;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--primary-black);
        margin-bottom: 1rem;
    }

    .card-text {
        color: var(--text-gray);
        line-height: 1.6;
    }

    .pagination-modern {
        justify-content: center;
        margin-top: 3rem;
    }

    .page-link {
        color: var(--primary-black);
        border: 2px solid var(--border-gray);
        margin: 0 0.25rem;
        border-radius: 10px;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
    }

    .page-link:hover {
        background: var(--primary-black);
        color: var(--primary-white);
        border-color: var(--primary-black);
    }

    .page-item.active .page-link {
        background: var(--primary-black);
        border-color: var(--primary-black);
    }

    .dropdown-menu {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 1rem 0;
        margin-top: 0.5rem;
        background: var(--primary-white);
        min-width: 200px;
        backdrop-filter: blur(10px);
        animation: fadeInUp 0.3s ease;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(10px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dropdown-item {
        color: var(--primary-black) !important;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
        border-radius: 8px;
        margin: 0.25rem 0.5rem;
        position: relative;
        display: flex;
        align-items: center;
    }

    .dropdown-item:hover {
        background: var(--primary-black) !important;
        color: var(--primary-white) !important;
        transform: translateX(5px);
    }

    .dropdown-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 3px;
        height: 0;
        background: var(--primary-black);
        transition: height 0.3s ease;
        border-radius: 2px;
    }

    .dropdown-item:hover::before {
        height: 100%;
        background: var(--primary-white);
    }

    .dropdown-divider {
        margin: 0.5rem 1rem;
        border-color: var(--border-gray);
    }

    .dropdown-item-icon {
        width: 16px;
        height: 16px;
        margin-right: 0.75rem;
        opacity: 0.7;
        transition: opacity 0.3s ease;
    }

    .dropdown-item:hover .dropdown-item-icon {
        opacity: 1;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .hero-subtitle {
            font-size: 1.1rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .category-btn {
            display: block;
            margin: 0.5rem 0;
            text-align: center;
        }

        .search-input {
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }

        .category-section,
        .services-section {
            padding: 3rem 0;
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-modern fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/logo_black.png" alt="SatelitJasa Logo" width="40" height="40">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Akun
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/auth/register">
                                    <i class="fas fa-user-plus dropdown-item-icon"></i>
                                    Daftar Akun
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="/auth/login">
                                    <i class="fas fa-sign-in-alt dropdown-item-icon"></i>
                                    Masuk
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="/profil/">
                            <img src="/images/pfp.jpg" alt="Profile" class="rounded-circle profile-img">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="hero-content text-center">
                        <h1 class="hero-title">
                            Temukan Jasa Terbaik<br>
                            <span class="text-white-50">untuk Setiap Kebutuhan</span>
                        </h1>
                        <p class="hero-subtitle">
                            Platform terpercaya yang menghubungkan Anda dengan penyedia jasa profesional. 
                            Kapanpun, dimanapun, kami siap melayani.
                        </p>
                        
                        <div class="search-container mx-auto">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control search-input" 
                                       placeholder="Cari jasa yang Anda butuhkan..."
                                       aria-label="Search services">
                                <button class="btn search-btn" type="button">
                                    <i class="fas fa-search me-2"></i>Cari
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="category-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Kategori Populer</h2>
                    <div class="text-center">
                        <a href="#" class="category-btn">Desain Grafis</a>
                        <a href="#" class="category-btn">Pemrograman</a>
                        <a href="#" class="category-btn">Penerjemahan</a>
                        <a href="#" class="category-btn">Video & Animasi</a>
                        <a href="#" class="category-btn">Penulisan</a>
                        <a href="#" class="category-btn">Pemasaran Digital</a>
                        <a href="#" class="category-btn">Fotografi</a>
                        <a href="#" class="category-btn">Konsultasi Bisnis</a>
                        <a href="#" class="category-btn">Musik & Audio</a>
                        <a href="#" class="category-btn">Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Layanan Unggulan</h2>
                </div>
            </div>
            
            <div class="row">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-lg-4 col-md-6 g-5">
                        <a href="/detail/" class="text-decoration-none">
                            <div class="card service-card h-100">
                                <div class="overflow-hidden">
                                    <img src="/images/logo-picture.jpg" class="card-img-top w-100" alt="Desain Logo">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Desain Logo Profesional</h5>
                                    <p class="card-text flex-grow-1">
                                        Buat logo yang mencerminkan identitas brand Anda dengan desain yang modern, 
                                        minimalis, dan memorable untuk membangun kesan profesional.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="text-muted">
                                            <i class="fas fa-star text-warning"></i>
                                            4.9 (124 ulasan)
                                        </span>
                                        <span class="fw-bold">Mulai Rp 150.000</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>

            <div class="row">
                <div class="col-12">
                    <nav aria-label="Service pagination">
                        <ul class="pagination pagination-modern">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#" aria-current="page">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#services">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#services">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#services" aria-label="Next">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="mb-3">SatelitJasa</h5>
                    <p class="text-white-50">Platform terpercaya untuk menemukan dan menyediakan jasa profesional dengan kualitas terbaik.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="mb-3">Layanan</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50 text-decoration-none">Desain</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Pemrograman</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Pemasaran</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Konsultasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="mb-3">Perusahaan</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50 text-decoration-none">Tentang Kami</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Karir</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Blog</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h6 class="mb-3">Kontak</h6>
                    <p class="text-white-50 mb-2">
                        <i class="fas fa-envelope me-2"></i>
                        info@satelitjasa.com
                    </p>
                    <p class="text-white-50 mb-2">
                        <i class="fas fa-phone me-2"></i>
                        +62 812-3456-7890
                    </p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-white-50">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-white-50 mb-0">&copy; 2025 SatelitJasa. Semua hak dilindungi.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>