@extends('layouts.frontend')

@section('content')
    <header class="hero-banner position-relative"
            style="height: 100vh;
               background: url('{{ asset('images/733d5d2b-e39a-4538-bc5f-8691365b83ad.png') }}') center center/cover no-repeat;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"
             style="background: rgba(0,0,0,0.6);"></div>

        <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="fade-right">
            <h1 class="display-4 fw-bold">Ihr Zuhause. <br>Unsere Leidenschaft.</h1>
            <p class="lead text-info">Exklusive Immobilienangebote in Deutschland</p>

            <form class="row g-2 justify-content-center mt-4">
                <div class="col-md-4">
                    <x-shared.forms.floating-input-field name="location" id="location" label="Ort" type="text" :errors="$errors" required/>
                </div>
                <div class="col-md-4">
                    <x-shared.forms.floating-input-field name="category" id="category" label="Objektart" type="text" :errors="$errors" required/>
                </div>
                <div class="col-md-4">
                    <x-shared.forms.floating-select-field name="request" id="request" label="Objektart" :errors="$errors" required/>
                    <option></option>
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-info text-white btn-pill mt-3 fw-medium">Suchen<i class="fw-medium fa fa-arrow-right ms-1"></i></button>
                </div>
            </form>
        </div>
    </header>
    <section class="container py-5">
        <h2 class="text-center mb-5">Immobilien-Highlights</h2>
        <div  data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="row g-4">
            <div class="col-md-4">
                <div class="card bg-dark text-white h-100 shadow-lg border-0">
                    <img src="/images/733d5d2b-e39a-4538-bc5f-8691365b83ad.png" class="card-img-top" alt="Haus 1">
                    <div class="card-body">
                        <h3 class="text-info">450.000 €</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                        <a href="#" class="btn btn-info text-white">Details ansehen</a>
                    </div>
                </div>
            </div>
            <div  data-aos="fade-up"  data-aos-anchor-placement="top-bottom" class="col-md-4">
                <div class="card bg-dark text-white h-100 shadow-lg border-0">
                    <img src="/images/733d5d2b-e39a-4538-bc5f-8691365b83ad.png" class="card-img-top" alt="Haus 2">
                    <div class="card-body">
                        <h3 class="text-info">720.000 €</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                        <a href="#" class="btn btn-info text-white">Details ansehen</a>
                    </div>
                </div>
            </div>
            <div  data-aos="fade-up" class="col-md-4">
                <div class="card bg-dark text-white h-100 shadow-lg border-0">
                    <img src="/images/733d5d2b-e39a-4538-bc5f-8691365b83ad.png" class="card-img-top" alt="Haus 3">
                    <div class="card-body">
                        <h3 class="text-info">1.300.000 €</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                        <a href="#" class="btn btn-info text-white">Details ansehen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  data-aos="fade-right" class="container py-5">
        <h2 class="text-center mb-5">Über uns</h2>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="p-4 bg-dark rounded shadow h-100">
                    <i class="bi bi-shield-check display-4 text-info mb-3"></i>
                    <h5 class="fw-bold">Vertrauen</h5>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-dark rounded shadow h-100">
                    <i class="bi bi-house-gear display-4 text-info mb-3"></i>
                    <h5 class="fw-bold">Erfahrung</h5>
                    <p class="">Viele Jahre Expertise im Immobilienmarkt.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-dark rounded shadow h-100">
                    <i class="bi bi-heart-fill display-4 text-info mb-3"></i>
                    <h5 class="fw-bold">Kundennähe</h5>
                    <p class="">Individuelle Beratung und persönliche Betreuung.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 class="text-center mb-5">Kontakt</h2>
        <div class="container-fluid py-custom pt-0" data-aos="fade-left" id="contact">
            <div class="container text-black bg-white py-custom px-md-5" style="border-radius: 5px;">
                <div class="row">
                    <div class="col-12">
                        <form action="#contact" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                @csrf
                                @method('POST')
                            </fieldset>
                            <div class="win-form row">
                                <div class="col-12 col-lg-6 col-xl-6 justify-content-between">
                                    <h2 class="h3 fw-bold mb-2 mb-lg- pb-lg-3">Sie möchten Kontakt zu mir aufnehmen?</h2>
                                <p>Ich freue mich sehr, dass Sie den Weg zu mir gefunden haben! Egal, ob Sie eine Immobilie verkaufen, vermieten oder suchen – oder einfach allgemeine Informationen benötigen – ich stehe Ihnen gerne zur Verfügung.
<br><br>
                                    Füllen Sie einfach das untenstehende Formular aus, und ich werde mich so schnell wie möglich mit Ihnen in Verbindung setzen. Ihre Anfrage wird selbstverständlich vertraulich behandelt, und ich werde alles daran setzen, Ihnen bei Ihrem Anliegen bestmöglich zu helfen.
<br><br>
                                    Lassen Sie uns gemeinsam Ihre Immobilienziele verwirklichen – ich freue mich auf Ihre Nachricht!</p>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <!-- Show all Laravel Valiation Error -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>Bitte korrigieren Sie die folgenden Fehler:</strong>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div>
                                        <x-shared.forms.floating-input-field name="first_name" id="first_name" label="Vorname" type="text" :errors="$errors" required/>
                                        <x-shared.forms.floating-input-field name="last_name" id="last_name" label="Nachname" type="text" :errors="$errors" required/>
                                        <x-shared.forms.floating-input-field name="email" id="email" label="E-Mail" type="text" :errors="$errors" required/>
                                        <x-shared.forms.floating-input-field name="phone" id="phone" label="Telefon" type="text" :errors="$errors" required/>
                                        <div class="form-group form-floating">
                                            <select name="request" id="request" {{ @$multiple == 'true' ? 'multiple' : null }} data-live-search="true" data-selected-text-format="count > 2" class="form-select select-customized">
                                                <option value="" disabled selected>{{ $placeholder ?? 'Bitte wählen' }}</option>
                                                <option value="1">{{ $placeholder ?? 'Fragen zum angebotenen Objekt' }}</option>
                                                <option value="2">{{ $placeholder ?? 'Ich wünsche eine Beratung' }}</option>
                                                <option value="3">{{ $placeholder ?? 'Allgemeine Fragen' }}</option>
                                                <option value="4">{{ $placeholder ?? 'Ich suche eine Kauf Immobilie' }}</option>
                                                <option value="5">{{ $placeholder ?? 'Ich suche eine Miet Immobilie' }}</option>

                                                {{--        @foreach($primaryModel as $model)--}}
                                                {{--            @if($model instanceof UnitEnum)--}}
                                                {{--                <option value="{{ $model->value }}" {{ @$multiple == 'true' ? (in_array($model->value, @old($name) ?? []) ? 'selected' : null) : (@old($name) == $model->value ? 'selected' : null) }}>{{ $model->label() }}</option>--}}
                                                {{--            @else--}}
                                                {{--                <option value="{{ $model->id }}" {{ @$multiple == 'true' ? (in_array($model->id, @old($name) ?? []) ? 'selected' : null) : (@old($name) == $model->id ? 'selected' : null) }}>{{ $model->$fieldname }}</option>--}}
                                                {{--            @endif--}}
                                                {{--        @endforeach--}}
                                            </select>
                                            <label for="request">Ihr Anliegen</label>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="form-check mt-2">
                                            <input type="checkbox" class="form-check-input" id="privacy" name="privacy" required>
                                            <label class="form-check-label fw-light" for="privacy">
                                                Ich willige ein, dass diese Website meine übermittelten Informationen speichert, sodass meine Anfrage beantwortet werden kann und akzeptiere hiermit die <a href="{{ route('frontend.privacy') }}" target="_blank"> Datenschutzbestimmungen</a>.
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-info text-white btn-pill mt-3 fw-medium border-white border-1" style="border:1px white solid!important;">Teilnehmen<i class="fw-medium fa fa-arrow-right ms-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

