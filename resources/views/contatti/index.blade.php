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
            <input type="text" name="name" placeholder="Inserisci il tuo nome" required>
            <input type="email" name="email" placeholder="Inserisci il tuo indirizzo Email" required>
            <input type="text" name="message" placeholder="Scrivi un messaggio" required>

            <button type="submit">Send</button>
        </form>


    </div>
</main>

@endsection