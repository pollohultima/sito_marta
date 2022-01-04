@extends('layouts.app')

@section('page-title', 'Home')

@section('content')

<main>

    <div class="jumbo">
        <div class="container">
            <img src="{{asset('img/134992809.jpg')}}" alt="">
        </div>
    </div>
    <div class="pubs text-center">
        <div class="container">
            <h2 class="py-4 mb-0">ARTICOLI ✦ PUBBLICAZIONI ✦ FUMETTI</h2>

            <div class="card_wrapper">
                <div class="row pb-3">
                    <div class="col-4">
                        <a href="https://touch.facebook.com/settecorriere/photos/a.1305948609490641/3956620921090050/?type=3&source=54"
                            class="text-decoration-none text-black" target="_blank">
                            <div class="card border-0">
                                <div class="img_wrap">

                                    <img src="{{asset('img/attesa-7corriere_orig.jpg')}}" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="card-body pt-3">
                                    <h5 class="card-title fw-bold">ATTESA SU 7 IL CORRIERE DELLA SERA - APRILE 2021</h5>
                                    <p class="card-text">Pubblicazione su la rivista 7 - SETTE
                                        Il Corriere della Sera</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-4">
                        <a href="https://open.spotify.com/artist/0ahCjVpsOEC5uYqMtpybCq"
                            class="text-decoration-none text-black" target="_blank">
                            <div class="card border-0">
                                <div class="img_wrap">

                                    <img src="{{asset('img/coverhalley-studio-legale-dentro.jpg')}}"
                                        class="card-img-top" alt="...">
                                </div>
                                <div class="card-body pt-3">
                                    <h5 class="card-title fw-bold">COVER ALBUM STUDIO ILLEGALE - SPOTIFY</h5>
                                    <p class="card-text">Illustrazioni per lo "Studio Illegale"
                                        prod. La Grande Onda</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-4">
                        <a href="https://coltellocomics.bigcartel.com/product/senza-fine"
                            class="text-decoration-none text-black" target="_blank">
                            <div class="card border-0">
                                <div class="img_wrap">
                                    <img src="{{asset('img/banner-cover.jpg')}}" class="card-img-top" alt="...">

                                </div>
                                <div class="card-body pt-3">
                                    <h5 class="card-title fw-bold">"SENZA FINE" DI COLTELLO COMICS</h5>
                                    <p class="card-text">Il mio fumetto <span class="fw-bold">"DESIDERIUM"</span>
                                        nell'antologico di <span class="fw-bold">Coltello Comics</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>




    </div>

    </div>

</main>

@endsection