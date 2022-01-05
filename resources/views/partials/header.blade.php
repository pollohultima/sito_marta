<header id="site_header">


    <nav class="navbar navbar-light navbar-expand-lg  py-0">
        <div class="container justify-content-end py-4">
            <button class="navbar-toggler tog" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="navbar-toggler-icon">

                </div>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-end">
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page"
                            href="{{route('home')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'illustrazioni' ? 'active' : ''}}"
                            href="{{route('illustrazioni')}}">ILLUSTRATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://martagoldin.bigcartel.com/products">SHOP</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{Route::currentRouteName() === 'chi_sono' ? 'active' : ''}}"
                            href="{{route('chi_sono')}}">ABOUT ME</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{Route::currentRouteName() === 'contatti' ? 'active' : ''}}"
                            href="{{route('contatti')}}">CONTACTS</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>




</header>