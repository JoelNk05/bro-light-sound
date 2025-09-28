<!DOCTYPE html>
<!doctype html>
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BRO Light & Sound – Events mit Licht, Sound & DJ-Service</title>
    <meta name="description" content="Unvergessliche Events mit Licht, Sound & DJ-Service – BRO Light & Sound" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b041487a72.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <style>

        header {
            background: linear-gradient(180deg, rgba(5,9,20,.3), transparent 70%);
            padding: 60px 0;
            text-align: center;
        }
        header h1 { font-weight: 800; }
        header small { color: #a5b1c2; }
        .btn-accent {
            background: linear-gradient(90deg, #09d5ff, #47f3ff);
            color: #00121e;
            font-weight: 600;
        }
        .section-title {
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .underline {
            width:80px; height:3px;
            background: linear-gradient(90deg,#09d5ff,#8b5cf6);
            margin-bottom:2rem;
        }
        .feature svg { width:40px; height:40px; margin-bottom:.5rem; color:#09d5ff; }
        .gallery img { border-radius: .5rem; }
        footer { color: #a5b1c2; padding: 2rem 0; text-align:center; }

         body {
             margin: 0;
             font-family: "Poppins", sans-serif;
             background: #0b0f1a;
             color: #fff;
         }

        :root {
            --bs-primary: #00bfda;
        }

        .hero {
            position: relative;
            min-height: 40vh;
            background: url('/images/hero.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-logo {
            max-width: 250px;
            margin-bottom: 25px;
        }

        .hero h2 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .btn-hero {
            background: #09d5ff;
            color: #00121e;
            font-weight: 600;
            padding: 12px 28px;
            border-radius: 8px;
            border: none;
            transition: background 0.2s;
        }
        .btn-hero:hover {
            background: #47f3ff;
        }
    </style>
</head>
<body>
<main>
    @yield('content')
</main>

<footer>
    <div class="container">© <span id="y"></span> BRO Light & Sound · Datenschutz · Impressum</div>
</footer>

<script>
    document.getElementById('y').textContent = new Date().getFullYear();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 800,   // Dauer in ms
        once: true        // Animation nur einmal abspielen
    });
</script>
</body>
</html>

{{-- Footer --}}
{{--<footer class="bg-black text-center py-4 mt-5">--}}
{{--    <div class="container d-flex justify-content-between">--}}
{{--        <div class="mt-5">--}}
{{--            <div>© MPB - Immobilien</div>--}}
{{--            <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i></a>--}}
{{--            <a href="#" class="text-white mx-2"><i class="bi bi-twitter"></i></a>--}}
{{--            <a href="#" class="text-white mx-2"><i class="bi bi-linkedin"></i></a>--}}
{{--        </div>--}}
{{--        <div class="align-content-center">--}}
{{--            <a href="#" class="text-white mx-2">Impressum</a>--}}
{{--            <a href="{{route("frontend.privacy")}}" class="text-white mx-2">Datenschutz</a>--}}
{{--            <a href="#" class="text-white mx-2">AGB</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
