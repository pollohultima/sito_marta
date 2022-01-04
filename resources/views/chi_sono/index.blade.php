@extends('layouts.app')

@section('page-title', 'About Me')

@section('content')

<main>

    <div class="container">
        <h1 class="text-center fw-bold py-4 mb-0">ABOUT ME</h1>

        <div class="about_wrapper d-flex px-4 pb-5 justify-content-between">

            <img class="rounded" src="{{asset('img/img-3863.jpg')}}" alt="">

            <div class="col-7">
                <p>
                    <span>Marta Goldin</span> (Noventa Vicentina, 1994) vive ad Este, dove si diploma in Grafica
                    Pubblicitaria
                    presso
                    l’Istituto d’Arte Antonio Corradini. Studia Disegno e Illustrazione da autodidatta ed inizia a
                    lavorare come artista freelance. Risulta finalista nel premio <span>Il Battello a Vapore</span>,
                    edizione
                    2016/2017, nella sezione “Illustratori”. Dall’inizio del suo percorso artistico, lavora con alcune
                    riviste indipendenti, webzine e lit-blog, tra cui: “Settepagine Rivista”, “Radiceposterzine”,
                    “Vocedelverbo Rivista”, “Indiemagazine Italia”. Collabora con l’etichetta discografica <span>La
                        Grande
                        Onda</span> di Tommaso Zanello alias "Piotta" e ha realizzato le cover dell’album del gruppo
                    Studio Illegale.
                    Ha pubblicato su <span>Il Corriere della Sera</span> nell’Aprile 2021 ed è edito il suo primo
                    fumetto
                    “DESIDERIUM” nell’antologia <span>Senza Fine</span> di ColtelloComics di Settembre 2021.
                </p>

                <p class="cit text-center mt-5 pt-3">
                    <em>
                        "Le mie illustrazioni sono quello che osservo, quello che sento e ascolto. Non parlo solo di me,
                        ma
                        anche di ciò e di chi mi circonda. Sono lo specchio della mia quotidianità che s’intreccia alla
                        fantasia. Ritagliano per me uno spazio che non rimane solo mio, ma diventa anche
                        dell’osservatore,
                        per ritrovarsi in un mondo immaginario.
                        Linee e forme si aggrovigliano, parlano con tratti imperfetti di ciò che vedo e di come lo
                        percepisco."
                    </em>
                </p>
            </div>
        </div>


    </div>
</main>

@endsection