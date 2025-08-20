<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jasa - SatelitJasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
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

    body {
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: var(--primary-black);
        background: var(--soft-gray);
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

    
    .dropdown-menu {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 1rem 0;
        margin-top: 0.5rem;
        background: var(--primary-white);
        min-width: 200px;
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
        display: flex;
        align-items: center;
    }

    .dropdown-item:hover {
        background: var(--primary-black) !important;
        color: var(--primary-white) !important;
        transform: translateX(5px);
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

    .dropdown-divider {
        margin: 0.5rem 1rem;
        border-color: var(--border-gray);
    }

    
    .main-container {
        margin-top: 100px;
        padding-bottom: 3rem;
    }

    
    .image-carousel {
        background: var(--primary-white);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }

    .carousel-item {
        height: 500px;
        background: var(--soft-gray);
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    
    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
        height: 50px;
        background: var(--primary-white);
        border-radius: 50%;
        opacity: 0.9;
        transition: all 0.3s ease;
        top: 50%;
        transform: translateY(-50%);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .carousel-control-prev {
        left: 20px;
    }

    .carousel-control-next {
        right: 20px;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        opacity: 1;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        transform: translateY(-50%) scale(1.1);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: transparent;
        border-radius: 0;
        width: 20px;
        height: 20px;
        background-size: 100%, 100%;
        filter: invert(1);
    }

    
    .service-details {
        background: var(--primary-white);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .service-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--primary-black);
        margin-bottom: 1.5rem;
        line-height: 1.3;
    }

    .provider-info {
        display: flex;
        align-items: center;
        padding: 1rem;
        background: var(--soft-gray);
        border-radius: 15px;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        text-decoration: none;
        color: inherit;
    }

    .provider-info:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        color: inherit;
        text-decoration: none;
    }

    .provider-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--primary-black);
        margin-right: 1rem;
    }

    .provider-name {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--primary-black);
        margin: 0;
    }

    .action-btns {
        margin: 1.5rem 0;
    }

    .btn-primary-custom {
        background: var(--primary-black);
        border: 2px solid var(--primary-black);
        color: var(--primary-white);
        border-radius: 15px;
        padding: 1rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
        width: 100%;
        margin-bottom: 1rem;
    }

    .btn-primary-custom:hover {
        background: transparent;
        color: var(--primary-black);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .btn-outline-custom {
        background: transparent;
        border: 2px solid var(--primary-black);
        color: var(--primary-black);
        border-radius: 15px;
        padding: 1rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-outline-custom:hover {
        background: var(--primary-black);
        color: var(--primary-white);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .section-heading {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--primary-black);
        margin: 2rem 0 1rem 0;
        border-bottom: 2px solid var(--border-gray);
        padding-bottom: 0.5rem;
        display: flex;
        align-items: center;
    }

    .section-heading i {
        margin-right: 0.5rem;
    }

    .description {
        color: var(--text-gray);
        line-height: 1.8;
        font-size: 1rem;
        margin-bottom: 2rem;
    }

    
    .recommendations {
        display: flex;
        gap: 1rem;
        overflow-x: auto;
        padding: 1rem 0;
        scroll-behavior: smooth;
    }

    .recommendations::-webkit-scrollbar {
        height: 8px;
    }

    .recommendations::-webkit-scrollbar-track {
        background: var(--soft-gray);
        border-radius: 10px;
    }

    .recommendations::-webkit-scrollbar-thumb {
        background: var(--primary-black);
        border-radius: 10px;
    }

    .rec-card {
        min-width: 250px;
        background: var(--primary-white);
        border: none;
        border-radius: 15px;
        transition: all 0.3s ease;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        text-decoration: none;
        color: inherit;
    }

    .rec-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        text-decoration: none;
        color: inherit;
    }

    .rec-card img {
        height: 150px;
        object-fit: cover;
        transition: transform 0.3s ease;
        width: 100%;
    }

    .rec-card:hover img {
        transform: scale(1.05);
    }

    .rec-card .card-body {
        padding: 1rem;
    }

    .rec-card .card-title {
        font-size: 1rem;
        font-weight: 600;
        color: var(--primary-black);
        margin-bottom: 0.5rem;
    }

    .rec-card .card-text {
        color: var(--text-gray);
        font-size: 0.9rem;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    
    @media (max-width: 768px) {
        .main-container {
            margin-top: 80px;
        }

        .service-details {
            padding: 1.5rem;
        }

        .service-title {
            font-size: 1.5rem;
        }

        .carousel-item {
            height: 300px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
        }

        .carousel-control-prev {
            left: 15px;
        }

        .carousel-control-next {
            right: 15px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 16px;
            height: 16px;
        }

        .provider-info {
            flex-direction: column;
            text-align: center;
        }

        .provider-avatar {
            margin-right: 0;
            margin-bottom: 0.5rem;
        }

        .rec-card {
            min-width: 200px;
        }
    }

    @media (max-width: 576px) {
        .carousel-item {
            height: 250px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 35px;
            height: 35px;
        }

        .carousel-control-prev {
            left: 10px;
        }

        .carousel-control-next {
            right: 10px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 14px;
            height: 14px;
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

    
    <div class="container main-container">
        
        <div class="image-carousel">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/logo-picture.jpg" class="d-block w-100" alt="Service Image 1" />
                    </div>
                    <div class="carousel-item">
                        <img src="/images/logo-picture.jpg" class="d-block w-100" alt="Service Image 2" />
                    </div>
                    <div class="carousel-item">
                        <img src="/images/logo-picture.jpg" class="d-block w-100" alt="Service Image 3" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        
        <div class="service-details">
            <h1 class="service-title">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk bisnis anda</h1>
            
            <a href="/profil/" class="provider-info">
                <img src="/images/pfp.jpg" alt="Provider Avatar" class="provider-avatar">
                <h5 class="provider-name">Badru</h5>
            </a>

            <hr />

            <div class="action-btns">
                <a href="/detail/pembayaran/" class="text-decoration-none">
                    <button class="btn btn-primary-custom" type="button">
                        <i class="fas fa-credit-card me-2"></i>Lanjutkan
                    </button>
                </a>

                <a href="/chat/" class="text-decoration-none">
                    <button class="btn btn-outline-custom" type="button">
                        <i class="fas fa-comment me-2"></i>Pesan
                    </button>
                </a>
            </div>

            <h6 class="section-heading">
                <i class="fas fa-star"></i>Reviews
            </h6>

            <h6 class="section-heading">
                <i class="fas fa-info-circle"></i>Penjelasan Jasa
            </h6>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nobis cupiditate possimus consectetur
                asperiores eveniet, fugit veritatis cumque sit molestias in consequuntur accusantium mollitia at iste ipsa
                ab similique explicabo!
            </p>

            <h6 class="section-heading">
                <i class="fas fa-thumbs-up"></i>Rekomendasi Untukmu
            </h6>
            <div class="recommendations">
                @for ($i = 0; $i < 10; $i++)
                    <a href="/detail/" class="rec-card">
                        <div class="overflow-hidden">
                            <img src="/images/logo-picture.jpg" alt="Recommendation">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Desain Logo</h5>
                            <p class="card-text">
                                Saya dapat membuatkan anda logo yang simpel dan minimalis untuk bisnis anda
                            </p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>

    
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
