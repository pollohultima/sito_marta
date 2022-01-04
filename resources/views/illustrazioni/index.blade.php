@extends('layouts.app')

@section('page-title', 'Illustrazioni')

@section('content')

<main>

    <div class="container">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
                    aria-label="Slide 8"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/3f83a848-5098-45a1-b11a-ca4dbbe2a1db_orig.jpeg')}}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5 class="text-black fw-bold">Il pastore, 2021 - illustrazione digitale</h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/730cc3d2-9c4c-4612-b277-82c4a2adbcca_orig.png')}}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5 class="text-black fw-bold">“L’uovo ha una forma perfetta benché sia fatto col culo.” Omaggio
                            a Bruno
                            Munari, 2021 -
                            illustrazione digitale</h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/4eee3761-d5f2-4e97-8756-8fdf09055c89.jpeg')}}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5 class="text-black fw-bold">Il lemure, 2021 - illustrazione digitale</h5>

                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/38571dff-65f6-4b69-9358-477aba1069a6.jpeg')}}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5 class="text-black fw-bold">L’omino delle stelle, 2021 - illustrazione digitale</h5>

                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/34afc2bb-5ac7-4a2d-a57e-bec75f091608_orig.png')}}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5 class="text-black fw-bold">Il coniglio Sandro e il mistero del fiore appassito, 2021 -
                            illustrazione digitale
                        </h5>

                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/544c2930-2f57-4aa1-8255-980922d2c3a9.jpeg')}}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5 class="text-black fw-bold">Il limone, 2021 - illustrazione digitale

                        </h5>

                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/5d68bb9f-05f0-4180-b9eb-cd10ceb3884b.jpeg')}}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5 class="text-black fw-bold">Sabato stressss, 2021 - illustrazione digitale

                        </h5>

                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/69d15a3c-7aa1-43cb-80cf-9c91822ce09c.jpeg')}}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5 class="text-black fw-bold">Il diavoletto dei limoni, 2021 - illustrazione digitale

                        </h5>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>



</main>

@endsection