<?php
require __DIR__ . "/Source/autoload.php";
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Facebook Tags -->
        <meta property="og:type"               content="Glass Tecnologias" />
        <meta property="og:title"              content="Soluções em tecnologia para negócios" />
        <meta property="og:description"        content="A Glass traz diversas soluções para o aumento de produtividade no seu negócio, automatizando e desenvolvendo recursos tecnológicos." />
        <meta property="og:image"              content="https://www.etecpirassununga.com.br/wp-content/uploads/2018/05/ds.jpg" />
        <meta property="og:url"                content="https://www.glasstecnologias.com" />
        
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./Source/Template/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
       
        <meta name="keywords" content="PHP, HTML, CSS, JavaScript">
        <meta name="description" content="Criação de sites e sistemas para empresas">
        <meta name="author" content="Lucas Castellani">
        
        <title>Glass Tecnologias</title>
    </head>
    <body>
    <?php
      $navbar = new \Source\Template\Navbar();
      $navbar->getBootstrapNav();
    ?><br><br><br><br>
    <div class="container text-center">
        <div class="row">
            <h1 class="text-center my-3">Conheça um pouco dos nossos trabalhos:</h1>
        </div>
        <h3 class="text-primary mb-3 text-center">Sites:</h3>
        <div class="row">
            <div class="col-lg-4">
                <div class="card my-2">
                    <img class="card-img-top" src="/Source/img/portifolio1.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">OdontoDia</h5>
                        <p class="card-text">Site institucional feito para credibilização de clínica odontológica, Tecnologias usadas: PHP, HTML5, CSS3, JavaScript e Bootstrap.</p>
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
                    <img class="card-img-top" src="/Source/img/portifolio2.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Melhor Amigo</h5>
                        <p class="card-text">Blog Desenvolvido para o cuidado com o seu melhor amigo! aqui você encontra todas as informações para cuidar do seu pet da melhor maneira.</p>
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
                    <img class="card-img-top" src="/Source/img/portfolio3.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Imobiliária</h5>
                        <p class="card-text">Este é um sistema de mobiliária já pronto, desenvolvemos com o intuito de dar uma amostra para nossos amigos corretores de um site assim.</p>
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
                    <img class="card-img-top" src="/Source/img/land1200x780.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Claro</h5>
                        <p class="card-text">Landpage para captação de leads feita para claro, esse modelo tem uma alta taxa de conversão. E estamos dispostos a fazer para o seu negócio.</p>
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
                    <img class="card-img-top" src="/Source/img/landpage2.jpg" alt="" style="max-height:20%;">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Landpage para advocacia</h5>
                        <p class="card-text">Landpage voltada para firma de advocacia, a mesma se encontra na página inicial de um site institucional, feita para captação de leads.</p>
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
                    <img class="card-img-top" src="/Source/img/land13.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:orange">Landpage para jóias</h5>
                        <p class="card-text">Captação de leads para vendas, sistema de email marketing com promoções e api de vendas, essa landpage possuí um alto nível de conversão.</p>
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

    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row justify-content text-center ">
                <div class="col-lg-4">
                    <a href=""><i class="fas fa-map-marker-alt fa-3x my-3 text-light"></i></a>
                </div>
                <div class="col-lg-4">
                    <a href="mailto:admin@glasstecnologias.com"><i class="fas fa-envelope fa-3x my-3 text-light"></i></a>
                </div>
                <div class="col-lg-4">
                    <a href="tel:+55 (11) 97851-2654"><i class="fas fa-phone-alt fa-3x my-3 text-light"></i></a>
                </div>
            </div>
            <div class="row justify-content-center text-center text-light">
                <div class="col-lg-4 mb-3">
                    São Paulo - Brasil
                </div>
                <div class="col-lg-4 mb-3">
                    admin@glasstecnologias.com
                </div>
                <div class="col-lg-4 mb-3">
                    +55 (11) 97851-2654
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">2021 &copy Copyright - Todos os direitos reservados. Desenvolvido por GLASS</div>



     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="./Source/Template/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>