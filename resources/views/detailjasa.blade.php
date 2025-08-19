<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jasa</title>
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
    <nav style="width: 100%; display: relative; z-index: 9999;" class="navbar bg-body-tertiary position-fixed navbar-expand-lg">
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
                        <a href="/profil/">
                            <div style="top: 50%; left: 25%;">
                                <img src="/images/pfp.jpg" alt="pfp" style="width: 40px; height: 40px;"
                                    class="rounded-circle border border-light border-5">
                            </div>
                        </a>
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
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="overflow-hidden" style="width: 100%; height: 75dvh;">
                    <img src="/images/logo-picture.jpg" alt="picture"
                        style="max-width: 50%; height: auto; text-align: center; margin: 25%; margin-top: 7%;"
                        id="gambar" />
                </div>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="overflow-hidden" style="width: 100%; height: 75dvh;">
                    <img src="/images/logo-picture.jpg" alt="picture"
                        style="max-width: 50%; height: auto; text-align: center; margin: 25%; margin-top: 7%;"
                        id="gambar" />
                </div>
            </div>
            <div class="carousel-item">
                <div class="overflow-hidden" style="width: 100%; height: 75dvh;">
                    <img src="/images/logo-picture.jpg" alt="picture"
                        style="max-width: 50%; height: auto; text-align: center; margin: 25%; margin-top: 7%;"
                        id="gambar" />
                </div>
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

    <div class="mx-5">
        <h4 class="mt-5">Saya dapat membuatkan anda logo yang simpel dan minimalis untuk bisnis anda</h4>
        <div style="width: 100%;" class="row mb-5">
            <a href="/profil/"><img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="pfp" width="30"
                    height="24"></a>
            <h5>Badru</h5>
        </div>
        <hr />
        <div class="d-grid gap-2">
            <button class="btn btn-success" type="button">Lanjutkan</button>
        </div>

        <a href="/chat/" style="text-decoration: none;" class="d-grid gap-2 mt-3">
            <button class="btn btn-outline-secondary" type="button">Pesan</button>
        </a>

        <h6 class="mt-5">Reviews:</h6>

        <h6 class="mt-5">Penjelasan Jasa</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nobis cupiditate possimus consectetur
            asperiores eveniet, fugit veritatis cumque sit molestias in consequuntur accusantium mollitia at iste ipsa
            ab similique explicabo!</p>

        <h6 class="mt-5">Rekomendasi Untukmu</h6>
        <div class="row">
            <a href="/detail/" style="text-decoration: none; width: max-content;">
                <div class="card" style="width: 10rem;">
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
            <a href="/detail/" style="text-decoration: none; width: max-content;">
                <div class="card" style="width: 10rem;">
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
            <a href="/detail/" style="text-decoration: none; width: max-content;">
                <div class="card" style="width: 10rem;">
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