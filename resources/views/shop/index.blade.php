@extends('layouts.app')

@section('page-title', 'Shop')

@section('content')

<main>

    <div class="container">

        <h1 class="text-center py-3">✦ IL MIO NEGOZIO ONLINE ✦</h1>

        <h3 class="text-center mb-5">Potete trovare tutti i miei lavori su Bigcartel! <a target="_blank"
                href="https://martagoldin.bigcartel.com/product/monkey-magnet">Clicca qui</a> </h3>

        <div class="shop_wrapper">
            <div class="row pb-5">
                <div class="col-6 ps-5">
                    <a target="_blank" href="https://martagoldin.bigcartel.com/product/monkey-magnet">

                        <img class="rounded" src="{{asset('img/cf46e8ff-b36c-438b-9d73-160df0650a6a.jpeg')}}" alt="">
                    </a>
                </div>
                <div class="col-6 text-start">
                    <h4 class="fw-bold"><a target="_blank"
                            href="https://martagoldin.bigcartel.com/product/monkey-magnet">CALAMITA MONKEY</a></h4>
                    <p>CALAMITA CON STAMPA (NON RIGIDA) 7.5CMX7.5CM
                        PRINTED MAGNET (NOT RIGID) 7.5CMX7.5CM</p>
                </div>
            </div>
        </div>



    </div>
</main>

@endsection