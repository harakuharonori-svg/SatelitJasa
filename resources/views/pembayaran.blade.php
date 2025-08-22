<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - SatelitJasa</title>
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
        --hover-gray: #f1f3f4;
        --success-green: #198754;
        --warning-orange: #fd7e14;
        --accent-blue: #0d6efd;
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
        background: linear-gradient(135deg, var(--soft-gray) 0%, var(--primary-white) 100%);
        min-height: 100vh;
    }

    .payment-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 1rem;
        position: relative;
    }

    .back-btn {
        position: absolute;
        top: 2rem;
        left: 2rem;
        background: var(--primary-white);
        border: 2px solid var(--border-gray);
        color: var(--primary-black);
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        z-index: 10;
    }

    .back-btn:hover {
        background: var(--primary-black);
        color: var(--primary-white);
        border-color: var(--primary-black);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .payment-card {
        background: var(--primary-white);
        border-radius: 25px;
        padding: 3rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--border-gray);
        width: 100%;
        max-width: 600px;
        position: relative;
        overflow: hidden;
    }

    .payment-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(0,0,0,0.02) 0%, transparent 70%);
        pointer-events: none;
    }

    .payment-header {
        text-align: center;
        margin-bottom: 2.5rem;
        position: relative;
        z-index: 2;
    }

    .payment-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--accent-blue), var(--success-green));
        border-radius: 50%;
        margin: 0 auto 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-white);
        font-size: 2rem;
        transition: transform 0.3s ease;
    }

    .payment-icon:hover {
        transform: scale(1.05);
    }

    .payment-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-black);
        margin-bottom: 0.5rem;
    }

    .payment-subtitle {
        color: var(--text-gray);
        font-size: 1.1rem;
        margin-bottom: 1rem;
    }

    .order-summary {
        background: linear-gradient(135deg, var(--soft-gray), var(--primary-white));
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        border: 1px solid var(--border-gray);
        position: relative;
        z-index: 2;
    }

    .order-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid var(--border-gray);
    }

    .order-item:last-child {
        border-bottom: none;
        font-weight: 600;
        font-size: 1.1rem;
        color: var(--primary-black);
    }

    .order-item .label {
        color: var(--text-gray);
    }

    .order-item .value {
        font-weight: 500;
        color: var(--primary-black);
    }

    .payment-methods {
        margin-bottom: 2rem;
        position: relative;
        z-index: 2;
    }

    .payment-methods h5 {
        font-weight: 600;
        color: var(--primary-black);
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .payment-method {
        background: var(--primary-white);
        border: 2px solid var(--border-gray);
        border-radius: 15px;
        padding: 1.25rem;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 1rem;
        position: relative;
        overflow: hidden;
    }

    .payment-method:hover {
        border-color: var(--primary-black);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    .payment-method.selected {
        border-color: var(--success-green);
        background: linear-gradient(135deg, rgba(25, 135, 84, 0.05), var(--primary-white));
    }

    .payment-method.selected::after {
        content: '\f00c';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        top: 1rem;
        right: 1rem;
        color: var(--success-green);
        font-size: 1.2rem;
    }

    .bank-logo {
        width: 60px;
        height: 60px;
        object-fit: contain;
        border-radius: 10px;
        padding: 0.5rem;
        background: var(--primary-white);
        border: 1px solid var(--border-gray);
        transition: transform 0.3s ease;
    }

    .payment-method:hover .bank-logo {
        transform: scale(1.05);
    }

    .bank-info h6 {
        font-weight: 600;
        color: var(--primary-black);
        margin-bottom: 0.25rem;
    }

    .bank-info p {
        color: var(--text-gray);
        font-size: 0.9rem;
        margin: 0;
    }

    .payment-actions {
        display: flex;
        gap: 1rem;
        position: relative;
        z-index: 2;
    }

    .btn-modern {
        flex: 1;
        padding: 1rem 2rem;
        border-radius: 15px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        border: 2px solid;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        text-decoration: none;
    }

    .btn-primary-modern {
        background: var(--primary-black);
        border-color: var(--primary-black);
        color: var(--primary-white);
    }

    .btn-primary-modern:hover {
        background: transparent;
        color: var(--primary-black);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .btn-secondary-modern {
        background: transparent;
        border-color: var(--border-gray);
        color: var(--text-gray);
    }

    .btn-secondary-modern:hover {
        background: var(--hover-gray);
        border-color: var(--text-gray);
        color: var(--primary-black);
    }

    .security-info {
        background: linear-gradient(135deg, rgba(25, 135, 84, 0.05), rgba(25, 135, 84, 0.02));
        border: 1px solid rgba(25, 135, 84, 0.2);
        border-radius: 15px;
        padding: 1rem;
        margin-top: 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        position: relative;
        z-index: 2;
    }

    .security-info i {
        color: var(--success-green);
        font-size: 1.5rem;
    }

    .security-info p {
        margin: 0;
        color: var(--text-gray);
        font-size: 0.9rem;
    }

    
    @media (max-width: 768px) {
        .payment-container {
            padding: 1rem;
        }

        .back-btn {
            top: 1rem;
            left: 1rem;
            padding: 0.5rem 1rem;
        }

        .payment-card {
            padding: 2rem;
            border-radius: 20px;
        }

        .payment-title {
            font-size: 1.7rem;
        }

        .payment-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .payment-actions {
            flex-direction: column;
        }

        .bank-logo {
            width: 50px;
            height: 50px;
        }
    }

    @media (max-width: 576px) {
        .back-btn span {
            display: none;
        }

        .payment-card {
            padding: 1.5rem;
            border-radius: 15px;
        }

        .payment-method {
            padding: 1rem;
        }

        .btn-modern {
            padding: 0.875rem 1.5rem;
            font-size: 1rem;
        }
    }

    
    .btn-modern.loading {
        opacity: 0.7;
        cursor: not-allowed;
    }

    .btn-modern.loading::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border: 2px solid transparent;
        border-top: 2px solid currentColor;
        border-radius: 50%;
        right: 1rem;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    
    .payment-category {
        margin-bottom: 2rem;
    }

    .payment-category h6 {
        font-weight: 600;
        color: var(--primary-black);
        margin-bottom: 1rem;
        padding-left: 0.5rem;
        border-left: 4px solid var(--accent-blue);
    }
</style>

<body>
    
    <a href="/detail" class="back-btn">
        <i class="fas fa-arrow-left"></i>
        <span>Kembali</span>
    </a>

    
    <div class="payment-container">
        <div class="payment-card">
            
            <div class="payment-header">
                <div class="payment-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h1 class="payment-title">Pembayaran</h1>
                <p class="payment-subtitle">Pilih metode pembayaran yang sesuai untuk Anda</p>
            </div>

            
            <div class="order-summary">
                <div class="order-item">
                    <span class="label">
                        <i class="fas fa-briefcase me-2"></i>
                        Jasa Design Logo
                    </span>
                    <span class="value">Rp 125.000</span>
                </div>
                <div class="order-item">
                    <span class="label">
                        <i class="fas fa-shipping-fast me-2"></i>
                        Biaya Admin
                    </span>
                    <span class="value">Rp 5.000</span>
                </div>
                <div class="order-item">
                    <span class="label">
                        <i class="fas fa-percentage me-2"></i>
                        Diskon Member
                    </span>
                    <span class="value text-success">-Rp 10.000</span>
                </div>
                <div class="order-item">
                    <span class="label">
                        <i class="fas fa-calculator me-2"></i>
                        <strong>Total Pembayaran</strong>
                    </span>
                    <span class="value text-success">
                        <strong>Rp 120.000</strong>
                    </span>
                </div>
            </div>

            
            <div class="payment-methods">
                <h5>
                    <i class="fas fa-wallet"></i>
                    Metode Pembayaran
                </h5>

                
                <div class="payment-category">
                    <h6>Transfer Bank</h6>
                    
                    <div class="payment-method" onclick="selectPayment(this, 'bca')">
                        <img src="/images/lg-bca.png" alt="BCA" class="bank-logo">
                        <div class="bank-info">
                            <h6>Bank Central Asia (BCA)</h6>
                            <p>Transfer langsung ke rekening BCA</p>
                        </div>
                    </div>

                    <div class="payment-method" onclick="selectPayment(this, 'bri')">
                        <img src="/images/Logo-BRI.png" alt="BRI" class="bank-logo">
                        <div class="bank-info">
                            <h6>Bank Rakyat Indonesia (BRI)</h6>
                            <p>Transfer langsung ke rekening BRI</p>
                        </div>
                    </div>

                    <div class="payment-method" onclick="selectPayment(this, 'bni')">
                        <img src="/images/LogoBNI.png" alt="BNI" class="bank-logo">
                        <div class="bank-info">
                            <h6>Bank Negara Indonesia (BNI)</h6>
                            <p>Transfer langsung ke rekening BNI</p>
                        </div>
                    </div>

                    <div class="payment-method" onclick="selectPayment(this, 'cimb')">
                        <img src="/images/logo-niaga.png" alt="CIMB Niaga" class="bank-logo">
                        <div class="bank-info">
                            <h6>CIMB Niaga</h6>
                            <p>Transfer langsung ke rekening CIMB Niaga</p>
                        </div>
                    </div>
                </div>

                
                <div class="payment-category">
                    <h6>Pembayaran Digital</h6>
                    
                    <div class="payment-method" onclick="selectPayment(this, 'qris')">
                        <img src="/images/LogoQriss.webp" alt="QRIS" class="bank-logo">
                        <div class="bank-info">
                            <h6>QRIS</h6>
                            <p>Scan QR Code untuk pembayaran instan</p>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="security-info">
                <i class="fas fa-shield-alt"></i>
                <div>
                    <p><strong>Transaksi Aman:</strong> Semua pembayaran dilindungi dengan enkripsi SSL 256-bit dan sistem keamanan berlapis.</p>
                </div>
            </div>

            
            <div class="payment-actions">
                <a href="/detail" class="btn-modern btn-secondary-modern">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
                <button class="btn-modern btn-primary-modern" onclick="processPayment()" id="paymentBtn" disabled>
                    <i class="fas fa-lock"></i>
                    Bayar Sekarang
                </button>
            </div>
        </div>
    </div>
    
    <x-footer/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    <script>
        let selectedPaymentMethod = null;

        function selectPayment(element, method) {
            document.querySelectorAll('.payment-method').forEach(pm => {
                pm.classList.remove('selected');
            });
            
            element.classList.add('selected');
            selectedPaymentMethod = method;
            
            const paymentBtn = document.getElementById('paymentBtn');
            paymentBtn.disabled = false;
            paymentBtn.innerHTML = '<i class="fas fa-lock"></i> Bayar Sekarang';
        }

        function processPayment() {
            if (!selectedPaymentMethod) {
                alert('Silakan pilih metode pembayaran terlebih dahulu');
                return;
            }

            const paymentBtn = document.getElementById('paymentBtn');
            paymentBtn.classList.add('loading');
            paymentBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';

            setTimeout(() => {
                paymentBtn.classList.remove('loading');
                
                switch(selectedPaymentMethod) {
                    case 'qris':
                        alert('Mengarahkan ke halaman QRIS...');
                        break;
                    case 'bca':
                    case 'bri':
                    case 'bni':
                    case 'cimb':
                        alert(`Mengarahkan ke halaman transfer ${selectedPaymentMethod.toUpperCase()}...`);
                        break;
                    default:
                        alert('Metode pembayaran tidak valid');
                }
                
                paymentBtn.innerHTML = '<i class="fas fa-lock"></i> Bayar Sekarang';
            }, 2000);
        }

        document.addEventListener('DOMContentLoaded', function() {
            const paymentMethods = document.querySelectorAll('.payment-method');
            paymentMethods.forEach((method, index) => {
                method.style.opacity = '0';
                method.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    method.style.transition = 'all 0.5s ease';
                    method.style.opacity = '1';
                    method.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && selectedPaymentMethod) {
                processPayment();
            }
        });
    </script>
</body>

</html>
