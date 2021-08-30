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

    <div class="container-fluid header">    
        <div class="row align-items-center">
            <div class="col-md-6">
            <h1 class="h1-copy">Fale conosco:</h1>
            <hr class="fhr">
            <div class="text-center justify-content-center mt-5">
                <h3 class="title">Vamos encontrar juntos a solução para seu negócio!</h3>
                <i class="fas fa-hand-point-down text-success fa-3x title"></i><br/>
                <a href="https://api.whatsapp.com/send?phone=5511978512654"><button class="title my-4 btn btn-success contatBtnIndex" style="border-radius:15px;"><i class="fab fa-whatsapp"></i>&nbspQUERO ENTRAR EM CONTATO!</button></a>
            </div>
        </div>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
   


<div class="">
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
    </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="./Source/Template/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>