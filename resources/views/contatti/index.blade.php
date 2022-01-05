@extends('layouts.app')

@section('page-title', 'Contatti')

@section('content')

<main>

    <div class="container">
        <h1></h1>

        <form action="https://formsubmit.co/matteo.polonio@gmail.com" method="POST">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_subject" value="Qualcuno ti ha contattata!">
            <input type="hidden" name="_next" value="{{route('home')}}">
            <div class="form-group">

                <input type="email" class="form-control" name="email" placeholder="Inserisci Email" required>
                <input type="text" class="form-control" name="name" placeholder="Inserisci il tuo nome" required>
                <input type="text" class="form-control" name="lastname" placeholder="Inserisci il tuo cognome" required>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Scrivi un messaggio"></textarea>

                <input class="btn btn-primary" type="submit" value="Submit">
            </div>

        </form>
    </div>
</main>

@endsection