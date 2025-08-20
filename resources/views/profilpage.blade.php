<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <nav style="width: 100%; display: fix; z-index: 9999;"
        class="navbar bg-body-tertiary position-fixed navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/logo_black.png" alt="Logo" width="40" height="40">
            </a>
            <div>

            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end w-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Masuk
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/auth/register">Register</a></li>
                            <li><a class="dropdown-item" href="/auth/login">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="height: 70dvh; width: 100%; display: relative;">
        <div style="height: 50dvh; width: 100%; display: relative;" class="bg-dark">

        </div>
        <div style="transform: translate(50%, 0%); top: 50%; left: 25%;" class="position-absolute translate-middle">
            <img src="/images/pfp.jpg" alt="pfp" style="width: 120px; height: 120px;"
                class="rounded-circle border border-light border-5">
        </div>
        <h2 style="transform: translate(50%, 0%); top: 65%; left: 25%;" class="position-absolute translate-middle">Jono
            Priyono</h2>
    </div>

    <div style="margin-left: 5%; margin-right: 5%;">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae facere dolore deserunt consequatur
            reprehenderit necessitatibus accusantium. Veritatis consequatur id voluptate quasi voluptatem asperiores
            amet
            dolore molestiae a, aliquam quod qui.</p>

        <hr>

        <div style="justify-items: end; text-align: end;">
            <div class="card border-info mb-3" style="max-width: 18rem; width: 18rem;">
                <div class="card-header">Penghasilanmu</div>
                <div class="card-body">
                    <h5 class="card-title">Rp 150.000,00</h5>
                </div>
            </div>
            <button type="button" style="width: 18rem;" class="btn btn-info">Tarik Tunai</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>