@extends('layouts.frontend')

@section('content')
    <header class="hero d-flex" >
        <div class="container hero-content" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Logo -->
                    <img src="/images/logo.svg" alt="BRO Light & Sound Logo" class="hero-logo img-fluid">

                    <!-- Claim -->
                    <h2>Unvergessliche Events mit<br>Licht, Sound &amp; DJ-Service</h2>

                    <!-- CTA Button -->
                    <a href="#kontakt" class="btn btn-hero">JETZT ANFRAGEN</a>
                </div>
            </div>
        </div>
    </header>

    <section data-aos="fade-right" class="py-5">
        <div class="container">
            <h3 class="section-title">Über uns</h3>
            <div class="underline"></div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>Wir bringen Licht, Sound und Stimmung auf dein Event – egal ob Hochzeit, Firmenfeier oder Festival. Mit moderner Technik, kreativen Showkonzepten und dem Gespür für den richtigen Moment sorgen wir dafür, dass jede Veranstaltung zu einem unvergesslichen Erlebnis wird. Von der dezenten Hintergrundmusik beim Empfang bis zur vollen Party-Atmosphäre auf der Tanzfläche: Wir passen uns flexibel an deine Wünsche an und setzen dein Event perfekt in Szene.</p>
                </div>
                <div class="col-md-4">
                    <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80" class="img-fluid rounded" alt="DJ">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark">
        <div class="container" data-aos="fade-left">
            <h3 class="section-title">Unsere Leistungen</h3>
            <div class="underline"></div>
            <div class="row text-center">
                <div class="col-md-4 feature">
                    <i class="fas fa-headphones mb-3" style="font-size: 30px; color: #00bfda"></i>
                    <h4>DJ & Musik</h4>
                    <p></p>
                </div>
                <div class="col-md-4 feature">
                    <i class="fa-solid fa-volume-up mb-3" style="font-size: 30px; color: #00bfda"></i>
                    <h4>Soundtechnik</h4>
                    <p></p>
                </div>
                <div class="col-md-4 feature">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 20l4-12 4 12 4-12 4 12"/></svg>
                    <h4>Lichttechnik</h4>
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container" data-aos="fade-right">
            <h3 class="section-title">Galerie</h3>
            <div class="underline"></div>
            <div class="row g-3">
                <div class="col-md-4"><img src="https://images.unsplash.com/photo-1518972559570-7cc1309f3229?q=80" class="img-fluid" alt="Event"></div>
                <div class="col-md-4"><img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?q=80" class="img-fluid" alt="Event"></div>
                <div class="col-md-4"><img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?q=80" class="img-fluid" alt="Event"></div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark" id="kontakt">
        <div class="container" data-aos="fade-left">
            <h3 class="section-title">Kontakt</h3>
            <div class="underline"></div>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-Mail</label>
                            <input type="email" class="form-control" placeholder="deine@mail.de">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nachricht</label>
                            <textarea class="form-control" rows="4" placeholder="Sag uns kurz, worum es geht …"></textarea>
                        </div>
                        <button type="submit" class="btn btn-accent">Anfrage senden</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="p-4">
                        <h4 class="mb-3">Kontaktieren Sie uns gerne:</h4>
                        <p class="d-flex align-content-center"><i class="fa-brands fa-whatsapp me-3" style="font-size: 30px"></i> +49 170 1234567</p>
                        <p class="d-flex align-content-center"><i class="fa-regular fa-envelope me-3" style="font-size: 30px"></i> E-Mail</p>
                        {{--                        <p class="text-muted">Wir antworten in der Regel innerhalb von 24 Stunden.</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

