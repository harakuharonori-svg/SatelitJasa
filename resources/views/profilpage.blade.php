<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - SatelitJasa</title>
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

    
    .profile-container {
        padding-top: 100px;
        min-height: 100vh;
    }

    .profile-header {
        background: linear-gradient(135deg, var(--primary-black) 0%, #333333 100%);
        color: var(--primary-white);
        padding: 4rem 0;
        margin-bottom: 3rem;
        position: relative;
        overflow: hidden;
    }

    .profile-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%);
        pointer-events: none;
    }

    .profile-avatar {
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

    .profile-avatar:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    .profile-info {
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .profile-name {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 1.5rem 0 0.5rem;
    }

    .profile-role {
        font-size: 1.2rem;
        opacity: 0.9;
        margin-bottom: 2rem;
    }

    .profile-stats {
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

    .profile-content {
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

    .profile-description {
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
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
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
        .profile-container {
            padding-top: 90px;
        }

        .profile-header {
            padding: 3rem 0;
        }

        .profile-name {
            font-size: 2rem;
        }

        .profile-stats {
            gap: 2rem;
        }

        .stat-number {
            font-size: 1.5rem;
        }

        .profile-content {
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
        .profile-avatar {
            width: 120px;
            height: 120px;
        }

        .profile-name {
            font-size: 1.8rem;
        }

        .profile-stats {
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
</style>

<body>
    
    <x-navbar/>
    
    <div class="profile-container">
        
        <div class="profile-header">
            <div class="container">
                <div class="profile-info">
                    <img src="/images/pfp.jpg" alt="Profile Avatar" class="profile-avatar">
                    <h1 class="profile-name">Jono Priyono</h1>
                    <p class="profile-role">Penyedia Jasa Profesional</p>
                    
                    <div class="profile-stats">
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
            
            <div class="profile-content">
                <h2 class="section-title">
                    <i class="fas fa-user section-icon"></i>
                    Tentang Saya
                </h2>
                <p class="profile-description">
                    Saya adalah seorang profesional yang berpengalaman dalam bidang desain grafis, web development, dan digital marketing. 
                    Dengan passion yang tinggi terhadap kreativitas dan teknologi, saya selalu berusaha memberikan hasil terbaik untuk setiap klien. 
                    Saya percaya bahwa komunikasi yang baik dan dedikasi adalah kunci sukses dalam setiap proyek.
                </p>

                
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-envelope me-2"></i>
                            Email
                        </div>
                        <div class="info-value">jono.priyono@email.com</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-phone me-2"></i>
                            Telepon
                        </div>
                        <div class="info-value">+62 812-3456-7890</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Lokasi
                        </div>
                        <div class="info-value">Jakarta, Indonesia</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-calendar me-2"></i>
                            Bergabung
                        </div>
                        <div class="info-value">Januari 2023</div>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto">
                    <div class="earnings-card">
                        <div class="earnings-header">
                            <div class="earnings-icon">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <h3 class="earnings-title">Total Penghasilan</h3>
                        </div>
                        <div class="earnings-amount">Rp 150.000</div>
                        <p style="opacity: 0.9; margin-bottom: 1.5rem;">Pendapatan dari 47 proyek yang telah diselesaikan</p>
                        <button class="withdraw-btn">
                            <i class="fas fa-download me-2"></i>
                            Tarik Tunai
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>