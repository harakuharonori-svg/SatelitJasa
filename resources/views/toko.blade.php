<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
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
        --success-green: #198754;
        --hover-gray: #f1f3f4;
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

    .toko-img {
        width: 40px;
        height: 40px;
        border: 2px solid var(--primary-black);
        transition: all 0.3s ease;
    }

    .toko-img:hover {
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


    .toko-container {
        padding-top: 100px;
        min-height: 100vh;
    }

    .toko-header {
        background: linear-gradient(135deg, var(--primary-black) 0%, #333333 100%);
        color: var(--primary-white);
        padding: 4rem 0;
        margin-bottom: 3rem;
        position: relative;
        overflow: hidden;
    }

    .toko-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.05) 0%, transparent 70%);
        pointer-events: none;
    }

    .toko-avatar {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 6px solid var(--primary-white);
        object-fit: cover;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .toko-avatar:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    .toko-info {
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .toko-name {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 1.5rem 0 0.5rem;
    }

    .toko-role {
        font-size: 1.2rem;
        opacity: 0.9;
        margin-bottom: 2rem;
    }

    .toko-stats {
        display: flex;
        justify-content: center;
        gap: 3rem;
        margin-top: 2rem;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        display: block;
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-white);
    }

    .stat-label {
        font-size: 0.9rem;
        opacity: 0.8;
        margin-top: 0.25rem;
    }

    .toko-content {
        background: var(--primary-white);
        border-radius: 20px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid var(--border-gray);
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--primary-black);
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .section-icon {
        width: 24px;
        height: 24px;
        color: var(--primary-black);
    }

    .toko-description {
        color: var(--text-gray);
        font-size: 1rem;
        line-height: 1.8;
        margin-bottom: 2rem;
    }

    .earnings-card {
        background: linear-gradient(135deg, var(--success-green) 0%, #28a745 100%);
        color: var(--primary-white);
        border-radius: 20px;
        padding: 2rem;
        border: none;
        box-shadow: 0 8px 25px rgba(25, 135, 84, 0.2);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .earnings-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }

    .earnings-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(25, 135, 84, 0.3);
    }

    .earnings-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .earnings-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
    }

    .earnings-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin: 0;
    }

    .earnings-amount {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 1rem 0;
        position: relative;
        z-index: 2;
    }

    .withdraw-btn {
        background: var(--primary-white);
        color: var(--success-green);
        border: 2px solid var(--primary-white);
        border-radius: 15px;
        padding: 1rem 2rem;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        width: 100%;
        position: relative;
        z-index: 2;
    }

    .withdraw-btn:hover {
        background: transparent;
        color: var(--primary-white);
        border-color: var(--primary-white);
        transform: translateY(-2px);
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .info-item {
        background: var(--soft-gray);
        border-radius: 15px;
        padding: 1.5rem;
        border: 1px solid var(--border-gray);
        transition: all 0.3s ease;
    }

    .info-item:hover {
        background: var(--primary-white);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    .info-label {
        font-size: 0.9rem;
        color: var(--text-gray);
        margin-bottom: 0.5rem;
        font-weight: 500;
    }

    .info-value {
        font-size: 1.1rem;
        color: var(--primary-black);
        font-weight: 600;
    }


    @media (max-width: 768px) {
        .toko-container {
            padding-top: 90px;
        }

        .toko-header {
            padding: 3rem 0;
        }

        .toko-name {
            font-size: 2rem;
        }

        .toko-stats {
            gap: 2rem;
        }

        .stat-number {
            font-size: 1.5rem;
        }

        .toko-content {
            padding: 1.5rem;
            border-radius: 15px;
        }

        .earnings-amount {
            font-size: 2rem;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .toko-avatar {
            width: 120px;
            height: 120px;
        }

        .toko-name {
            font-size: 1.8rem;
        }

        .toko-stats {
            flex-direction: column;
            gap: 1rem;
        }

        .earnings-card {
            padding: 1.5rem;
        }

        .section-title {
            font-size: 1.3rem;
        }
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
</style>

<body>
    <x-navbar />

    <div class="toko-container">

        <div class="toko-header">
            <div class="container">
                <div class="toko-info">
                    <img src="/images/pfp.jpg" alt="toko Avatar" class="toko-avatar">
                    <h1 class="toko-name">Toko Kece</h1>
                    <p class="toko-role">by. Jono Priyono</p>

                    <div class="toko-stats">
                        <div class="stat-item">
                            <span class="stat-number">47</span>
                            <div class="stat-label">Proyek Selesai</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4.9</span>
                            <div class="stat-label">Rating</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">2</span>
                            <div class="stat-label">Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="toko-content">
                <h2 class="section-title">
                    <i class="fas fa-user section-icon"></i>
                    Tentang Toko
                </h2>
                <p class="toko-description">
                    Saya adalah seorang profesional yang berpengalaman dalam bidang desain grafis, web development, dan
                    digital marketing.
                    Dengan passion yang tinggi terhadap kreativitas dan teknologi, saya selalu berusaha memberikan hasil
                    terbaik untuk setiap klien.
                    Saya percaya bahwa komunikasi yang baik dan dedikasi adalah kunci sukses dalam setiap proyek.
                </p>
            </div>

            <div class="toko-content">
                <h4 style="font-size: large;" class="section-title">
                    <i class="fa fa-window-restore"></i>
                    Jasa-jasa:
                </h4>

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

                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="text-muted">
                                        <i class="fas fa-star text-warning"></i>
                                        4.9 (124 ulasan)
                                    </span>
                                    <span class="fw-bold">Mulai Rp 150.000</span>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>

        </div>
    </div>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>