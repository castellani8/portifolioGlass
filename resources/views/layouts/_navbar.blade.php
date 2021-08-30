<nav class='navbar navbar-expand-lg navbar-dark sticky-top bg-dark navcolor p-2'>
    <div class='container-fluid justify-content-center'>
        <button class='mr-auto navbar-toggler' type='button' data-toggle='collapse'
            data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false'
            aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <a class='navbar-brand mr-auto text-center' href='#'>Lucas<b>Castellani</b></a>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav ml-auto mb-2 mb-lg-0 text-center'>
                <li class='nav-item'>
                    <a class='nav-link letter-g active' aria-current='page' href="{{ route('index') }}">Home</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                    <a class='nav-link letter-g' href="{{ route('quemSomos') }}">Quem Somos</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                    <a class='nav-link letter-g' href="{{ route('projetos') }}">Projetos</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                    <a class='nav-link letter-g' href="{{ route('faleConosco') }}">Fale Conosco</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
