<!DOCTYPE html>
<html lang="de">
<head>
    <!--

     ▐▄▄▄      ▄▄▄ .▄▄▌       ▐ ▄ ▄▄▄ . ▄▄▄·      • ▌ ▄ ·. ▄• ▄▌▄ •▄
      ·██▪     ▀▄.▀·██•      •█▌▐█▀▄.▀·▐█ ▄█▪     ·██ ▐███▪█▪██▌█▌▄▌▪
    ▪▄ ██ ▄█▀▄ ▐▀▀▪▄██▪      ▐█▐▐▌▐▀▀▪▄ ██▀· ▄█▀▄ ▐█ ▌▐▌▐█·█▌▐█▌▐▀▀▄·
    ▐▌▐█▌▐█▌.▐▌▐█▄▄▌▐█▌▐▌    ██▐█▌▐█▄▄▌▐█▪·•▐█▌.▐▌██ ██▌▐█▌▐█▄█▌▐█.█▌
     ▀▀▀• ▀█▄▀▪ ▀▀▀ .▀▀▀     ▀▀ █▪ ▀▀▀ .▀    ▀█▄▀▪▀▀  █▪▀▀▀ ▀▀▀ ·▀  ▀

    J N   |   digital spirit in code ✨
          contact: joel.nepomuk2005@gmail.com

    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPB Immobilien</title>
    @vite(['resources/css/app.css', 'resources/scripts/js/app.js', "/resources/styles/sass/frontend/custom.css"])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"/>
</head>
<body class="bg-dark text-white">

{{-- Header / Navigation --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#"><img style="width: 150px" src="/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            0509
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-3">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Aktuelles</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Interessenten</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Bewerten</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Referenzen</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.home') }}#contact">Kontakt</a></li>

            </ul>
            <a href="#" class="btn btn-info text-white">Immobilie anbieten</a>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

{{-- Footer --}}
<footer class="bg-black text-center py-4 mt-5">
    <div class="container d-flex justify-content-between">
        <div class="mt-5">
            <div>© MPB - Immobilien</div>
            <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white mx-2"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-white mx-2"><i class="bi bi-linkedin"></i></a>
        </div>
        <div class="align-content-center">
            <a href="#" class="text-white mx-2">Impressum</a>
            <a href="#" class="text-white mx-2">Datenschutz</a>
            <a href="#" class="text-white mx-2">AGB</a>
        </div>
    </div>
</footer>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 700,
        once: true,       // Animation nur einmal, nicht bei jedem Scroll
        offset: 150       // Abstand bis Animation startet
    });
</script>
</body>
</html>
