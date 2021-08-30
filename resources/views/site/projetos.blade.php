@extends('layouts._header')
@section('content')

    <div class="container text-center">
        <div class="row">
            <h1 class="text-center my-3">Conheça um pouco dos nossos trabalhos:</h1>
        </div>
        <h3 class="text-primary mb-3 text-center">Sites:</h3>
        <div class="row">
            <div class="col-lg-4">
                <div class="card my-2">
                    <img class="card-img-top" src="{{ asset('/img/portifolio1.png') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">OdontoDia</h5>
                        <p class="card-text">Site institucional feito para credibilização de clínica odontológica,
                            Tecnologias usadas: PHP, HTML5, CSS3, JavaScript e Bootstrap.</p>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star-half-alt text-warning">(18)</i>
                        &nbsp&nbsp&nbsp

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card my-2">
                    <img class="card-img-top" src="{{ asset('/img/portifolio2.png') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Melhor Amigo</h5>
                        <p class="card-text">Blog Desenvolvido para o cuidado com o seu melhor amigo! aqui você
                            encontra todas as informações para cuidar do seu pet da melhor maneira.</p>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <i class="far fa-star text-warning">(26)</i>
                        &nbsp&nbsp&nbsp

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card my-2">
                    <img class="card-img-top" src="{{ asset('/img/portfolio3.png') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Imobiliária</h5>
                        <p class="card-text">Este é um sistema de mobiliária já pronto, desenvolvemos com o intuito de
                            dar uma amostra para nossos amigos corretores de um site assim.</p>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <i class="far fa-star text-warning">(33)</i>
                        &nbsp&nbsp&nbsp

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <h3 class="text-primary text-center mt-3">Landpages:</h3>
        <div class="row text-center">
            <div class="col-lg-4">
                <div class="card my-2">
                    <img class="card-img-top" src="{{ asset('/img/land1200x780.jpg') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Claro</h5>
                        <p class="card-text">Landpage para captação de leads feita para claro, esse modelo tem uma alta
                            taxa de conversão. E estamos dispostos a fazer para o seu negócio.</p>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star-half-alt text-warning">(58)</i>
                        &nbsp&nbsp&nbsp

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card my-2">
                    <img class="card-img-top" src="{{ asset('/img/landpage2.jpg') }}" alt="" style="max-height:20%;">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Landpage para advocacia</h5>
                        <p class="card-text">Landpage voltada para firma de advocacia, a mesma se encontra na página
                            inicial de um site institucional, feita para captação de leads.</p>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <i class="far fa-star text-warning">(49)</i>
                        &nbsp&nbsp&nbsp

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card my-2">
                    <img class="card-img-top" src="{{ asset('/img/land13.jpg') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Landpage para jóias</h5>
                        <p class="card-text">Captação de leads para vendas, sistema de email marketing com promoções e
                            api de vendas, essa landpage possuí um alto nível de conversão.</p>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star text-warning "></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <i class="far fa-star text-warning">(13)</i>
                        &nbsp&nbsp&nbsp

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
