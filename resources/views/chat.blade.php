<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - SatelitJasa</title>
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
        --message-sent: #000000;
        --message-received: #f1f3f4;
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

    
    .chat-container {
        padding-top: 100px;
        min-height: 100vh;
        background: linear-gradient(135deg, var(--soft-gray) 0%, var(--primary-white) 100%);
    }

    .chat-wrapper {
        background: var(--primary-white);
        border-radius: 25px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 2rem 0;
        border: 1px solid var(--border-gray);
    }

    .chat-header {
        background: linear-gradient(135deg, var(--primary-black) 0%, #333333 100%);
        color: var(--primary-white);
        padding: 2rem;
        position: relative;
        overflow: hidden;
    }

    .chat-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        pointer-events: none;
    }

    .back-btn {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: var(--primary-white);
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
        backdrop-filter: blur(10px);
    }

    .back-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.4);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .chat-user-info {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        position: relative;
        z-index: 2;
    }

    .chat-avatar {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        border: 4px solid var(--primary-white);
        object-fit: cover;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    .chat-avatar:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4);
    }

    .chat-user-details h2 {
        margin: 0;
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 0.5rem;
    }

    .chat-user-status {
        font-size: 1rem;
        opacity: 0.9;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .status-indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #22c55e;
        box-shadow: 0 0 15px rgba(34, 197, 94, 0.5);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { box-shadow: 0 0 15px rgba(34, 197, 94, 0.5); }
        50% { box-shadow: 0 0 25px rgba(34, 197, 94, 0.8); }
        100% { box-shadow: 0 0 15px rgba(34, 197, 94, 0.5); }
    }

    .chat-messages {
        padding: 2.5rem;
        max-height: 65vh;
        overflow-y: auto;
        background: var(--primary-white);
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .message-date {
        text-align: center;
        color: var(--text-gray);
        font-size: 0.85rem;
        margin: 1rem 0;
        position: relative;
    }

    .message-date::before,
    .message-date::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 30%;
        height: 1px;
        background: var(--border-gray);
    }

    .message-date::before {
        left: 0;
    }

    .message-date::after {
        right: 0;
    }

    .message-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        animation: fadeInUp 0.5s ease;
    }

    .message-bubble {
        max-width: 75%;
        padding: 1.25rem 1.75rem;
        border-radius: 25px;
        position: relative;
        word-wrap: break-word;
        font-size: 1rem;
        line-height: 1.5;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .message-bubble:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .message-sent {
        background: linear-gradient(135deg, var(--primary-black) 0%, #333333 100%);
        color: var(--primary-white);
        margin-left: auto;
        border-bottom-right-radius: 8px;
        position: relative;
    }

    .message-sent::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: -8px;
        width: 0;
        height: 0;
        border-left: 8px solid #333333;
        border-bottom: 8px solid transparent;
    }

    .message-received {
        background: var(--soft-gray);
        color: var(--primary-black);
        margin-right: auto;
        border-bottom-left-radius: 8px;
        border: 1px solid var(--border-gray);
        position: relative;
    }

    .message-received::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: -9px;
        width: 0;
        height: 0;
        border-right: 9px solid var(--soft-gray);
        border-bottom: 8px solid transparent;
    }

    .message-time {
        font-size: 0.75rem;
        opacity: 0.7;
        margin-top: 0.5rem;
        text-align: right;
    }

    .message-received .message-time {
        text-align: left;
    }

    .input-container {
        background: var(--primary-white);
        border-radius: 50px;
        padding: 0.75rem;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;
        transition: all 0.3s ease;
        display: flex;
        align-items: end;
        gap: 1rem;
    }

    .chat-input-area {
        padding: 2rem;
        background: var(--soft-gray);
        border-top: 1px solid var(--border-gray);
    }

    .input-container:focus-within {
        border-color: var(--primary-black);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    .message-input {
        flex: 1;
        border: none;
        outline: none;
        background: transparent;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        resize: none;
        font-family: inherit;
        max-height: 120px;
        min-height: 45px;
    }

    .input-actions {
        display: flex;
        gap: 0.5rem;
        align-items: center;
    }

    .action-btn {
        background: transparent;
        border: none;
        color: var(--text-gray);
        padding: 0.5rem;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
    }

    .action-btn:hover {
        background: var(--soft-gray);
        color: var(--primary-black);
        transform: scale(1.1);
    }

    .send-btn {
        background: linear-gradient(135deg, var(--primary-black) 0%, #333333 100%);
        color: var(--primary-white);
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 1.1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .send-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .send-btn:active {
        transform: scale(0.95);
    }

    
    .chat-messages::-webkit-scrollbar {
        width: 8px;
    }

    .chat-messages::-webkit-scrollbar-track {
        background: transparent;
    }

    .chat-messages::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, var(--border-gray) 0%, var(--text-gray) 100%);
        border-radius: 10px;
    }

    .chat-messages::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, var(--text-gray) 0%, var(--primary-black) 100%);
    }

    
    @media (max-width: 768px) {
        .chat-container {
            padding-top: 90px;
        }

        .chat-wrapper {
            margin: 1rem;
            border-radius: 20px;
        }

        .chat-header {
            padding: 1.5rem;
        }

        .chat-user-details h2 {
            font-size: 1.4rem;
        }

        .chat-avatar {
            width: 60px;
            height: 60px;
        }

        .message-bubble {
            max-width: 85%;
            padding: 1rem 1.25rem;
            font-size: 0.95rem;
        }

        .chat-messages {
            padding: 1.5rem;
        }

        .chat-input-area {
            padding: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .chat-wrapper {
            margin: 0.5rem;
            border-radius: 15px;
        }

        .message-bubble {
            max-width: 90%;
            font-size: 0.9rem;
        }

        .back-btn span {
            display: none;
        }

        .input-actions .action-btn:not(.send-btn) {
            display: none;
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

    
    <div class="chat-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="chat-wrapper">
                        
                        <div class="chat-header">
                            <button class="back-btn" onclick="window.location.href='/inbox'">
                                <i class="fas fa-arrow-left"></i>
                                <span>Kembali ke Inbox</span>
                            </button>
                            
                            <div class="chat-user-info">
                                <img src="/images/pfp.jpg" alt="Profile" class="chat-avatar">
                                <div class="chat-user-details">
                                    <h2>Ahmad Rizky</h2>
                                    <div class="chat-user-status">
                                        <span class="status-indicator"></span>
                                        <span>Online • Terakhir dilihat baru saja</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="chat-messages" id="chatMessages">
                            <div class="message-date">Hari ini</div>
                            
                            <div class="message-group">
                                <div class="message-bubble message-received">
                                    Halo! Saya tertarik dengan jasa desain logo yang Anda tawarkan. Bisakah kita diskusi lebih lanjut mengenai detail proyek saya?
                                    <div class="message-time">10:30</div>
                                </div>
                            </div>

                            <div class="message-group">
                                <div class="message-bubble message-sent">
                                    Halo! Tentu saja, saya akan senang membantu Anda dengan proyek desain logo. Bisa tolong ceritakan lebih detail tentang bisnis Anda dan style logo yang diinginkan?
                                    <div class="message-time">10:32</div>
                                </div>
                            </div>

                            <div class="message-group">
                                <div class="message-bubble message-received">
                                    Saya memiliki startup teknologi di bidang fintech. Saya ingin logo yang modern, minimalis, dan memberikan kesan trustworthy untuk target market millennial.
                                    <div class="message-time">10:35</div>
                                </div>
                            </div>

                            <div class="message-group">
                                <div class="message-bubble message-sent">
                                    Sounds great! Untuk project seperti ini, saya biasanya memberikan 3-4 konsep desain awal. Timeframe untuk completion sekitar 5-7 hari kerja. Budget range Anda berapa untuk project ini?
                                    <div class="message-time">10:38</div>
                                </div>
                            </div>

                            <div class="message-group">
                                <div class="message-bubble message-received">
                                    Budget saya sekitar 2-3 juta. Apakah itu cukup untuk mendapatkan logo dengan beberapa variasi dan file dalam berbagai format?
                                    <div class="message-time">10:40</div>
                                </div>
                            </div>

                            <div class="message-group">
                                <div class="message-bubble message-sent">
                                    Perfect! Budget tersebut sudah sangat reasonable. Anda akan mendapatkan logo dalam format AI, EPS, PDF, PNG, dan JPG dengan berbagai ukuran. Kapan bisa kita mulai?
                                    <div class="message-time">10:42</div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="chat-input-area">
                            <div class="input-container">
                                <textarea 
                                    class="message-input" 
                                    id="messageInput"
                                    placeholder="Ketik pesan Anda..."
                                    rows="1"
                                    onkeypress="handleKeyPress(event)"
                                ></textarea>
                                <div class="input-actions">
                                    <button type="button" class="action-btn" title="Lampiran">
                                        <i class="fas fa-paperclip"></i>
                                    </button>
                                    <button type="button" class="action-btn" title="Emoji">
                                        <i class="fas fa-smile"></i>
                                    </button>
                                    <button type="submit" class="send-btn" onclick="sendMessage(event)">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <footer class="bg-black text-white py-5 mt-5">
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
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <script>
        // Auto-scroll to bottom of messages
        function scrollToBottom() {
            const chatMessages = document.getElementById('chatMessages');
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Send message function
        function sendMessage(event) {
            event.preventDefault();
            const messageInput = document.getElementById('messageInput');
            const messageText = messageInput.value.trim();
            
            if (messageText) {
                // Create new message element
                const messageGroup = document.createElement('div');
                messageGroup.className = 'message-group';
                
                const messageBubble = document.createElement('div');
                messageBubble.className = 'message-bubble message-sent';
                
                const currentTime = new Date().toLocaleTimeString('id-ID', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
                
                messageBubble.innerHTML = `
                    ${messageText}
                    <div class="message-time">${currentTime}</div>
                `;
                
                messageGroup.appendChild(messageBubble);
                document.getElementById('chatMessages').appendChild(messageGroup);
                
                // Clear input and scroll to bottom
                messageInput.value = '';
                scrollToBottom();
                
                // Auto-resize textarea
                messageInput.style.height = 'auto';
            }
        }

        // Handle Enter key press
        function handleKeyPress(event) {
            if (event.key === 'Enter' && !event.shiftKey) {
                event.preventDefault();
                sendMessage(event);
            }
        }

        // Auto-resize textarea
        document.getElementById('messageInput').addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = Math.min(this.scrollHeight, 120) + 'px';
        });

        // Initial scroll to bottom
        document.addEventListener('DOMContentLoaded', function() {
            scrollToBottom();
        });
    </script>
</body>

</html>