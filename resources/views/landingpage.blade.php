<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<style>
    #deskin:hover {
        text-decoration: underline;
    }

    #gambar {
        transition: transform 0.3s ease;
    }

    #gambar:hover {
        transform: scale(1.2);
    }
</style>

<body>
    <nav style="width: 100%; display: relative;" class="navbar bg-body-tertiary position-fixed navbar-expand-lg">
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
                        <a href="/profil/"><img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="pfp" width="30"
                                height="24"></a>
                    </li>
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
    <div style="width: 100%; height: 100dvh; display: relative;" class="bg-dark">
        <div class="position-absolute top-50 start-50 translate-middle text-light">
            <h1 class="mt-5">KAMI SIAP MELAYANI PERMINTAANMU<br />KAPANPUN, DIMANAPUN.</h1>

            <p>Ingin cari jasa-jasa yang tersedia?</p>

            <div class="input-group input-group-lg">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-lg">
                <button type="button" class="btn btn-light fw-semibold">Cari ></button>
            </div>
        </div>
    </div>

    <div style="text-align: center;" class="mt-5">
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>
        <a href=""><button type="button" class="btn btn-outline-secondary">Secondary</button></a>

        <h2 class="mt-5">Layanan yang tersedia</h2>

        <div style="justify-text: center;" class="row mt-4">
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
            <a href="/detail/" style="text-decoration: none; width: max-content;" class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="overflow-hidden">
                        <img src="/images/logo-picture.jpg" class="card-img-top" id="gambar" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desain Logo</h5>
                        <p class="card-text" id="deskin">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk
                            bisnis anda
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>