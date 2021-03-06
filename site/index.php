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
    ?>

    <div class="container-fluid header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h1-copy">Quer ter um percentual de ganhos maiores na sua empresa?</h1>
                <hr class="fhr">
                <h2 class="title">Conheça a GLASS Soluções em Tecnologias!</h2>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid p-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img class="mt-3" src="{{ url('/img/navbarclaro.png') }}" alt="" style="width:250px">
                </div>
                <div class="col-lg-9">
                    <h3>O QUE FAZEMOS?</h1>
                    <p class="lead">Especializados em soluções de tecnologia para qualquer tipo de negócio, a GLASS tem como objetivo solucionar qualquer tipo de necessidade que a sua empresa possua. Nosso foco é o desenvolvimento de sistemas com a melhor produtividade e facilidade para o usuário, sem abrir mão da qualidade, para que você consiga aumentar o desempenho do seu negócio.</p>
                </div>
            </div>
        </div>
    </div>
    <h2 class="text-center text-dark">Promoção sites institucionais por apenas R$ 600!!
    <p class="text-center text-primary">Promoção se encerra em:</p></h2>
    <p class="bg-dark" id="demo"></p>
    <script>
// Set the date we're counting down to
var countDownDate = new Date("May 31, 2021 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
    <div class="container-fluid mt-3">
        <div class="row justify-content-center text-center">
                <h2>Tecnologias mais usadas:</h2>
            </div>
        <div class="row text-center">
                <div class="col-md-4 my-4">
                    <i class="fab fa-php fa-5x" style="color:#474A8A"></i>
                    <i class="fab fa-laravel fa-5x" style="color:red"></i><br>
                    <h6 style="font-weight:bold;">PHP/Laravel</h6>
                    <h6 class="mt-1">Ultilizamos a linguagem de programação mais usada pelos gigantes da internet: o PHP, que juntamente com seu framework mais usado, o Laravel, se tornam a melhor opção em tecnologia para desenvolvimento back-end em geral, atendendo a qualquer requisito.</h6>
                </div>
                <div class="col-md-4 my-4">
                    <i class="fab fa-js fa-4x" style="color:yellow"></i>
                    <i class="fab fa-html5 fa-5x" style="color:orange"></i>
                    <i class="fab fa-css3-alt fa-4x" style="color:blue"></i><br>
                    <h6 style="font-weight:bold;">JavaScript/HTML5/CSS3</h6>
                    <h6 class="mt-1">As tecnologias mais requisitadas no mercado hoje são: HTML5, JavaScript e Css. Tais tecnologias tem um uso imprescindível na criação de sites e programas, pois são eles os responsáveis por toda estruturação de como o seu usuário interage com o seu ambiente.</h6>
                </div>
                <div class="col-md-4 my-4">
                    <i class="fas fa-palette fa-5x" style="color:orange"></i><br>
                    <h6 style="font-weight:bold;">Web Design UI/UX </h6>
                    <h6 class="mt-1">A parte que usamos para encontrar o melhor visual para seu site/sistema. É usado para deixar seu usuário confortável e para criar uma comunicação que cative o cliente, dando credibilidade, atraindo novos clientes para seu ambiente e o mais importante, deixando mais bonito!</h6>
                </div>
            
        </div>
        <div class="row text-center">
            <div class="col-md-4 my-4">
                <i class="fab fa-bootstrap fa-4x" style="color:#7a257a "></i><br>
                    <h6 style="font-weight:bold;">Bootstrap</h6>
                    <h6 class="mt-1">Um framework que facilita muito o trabalho front-end, e nos possibilita trabalhar com padrões de grid.</h6>
            </div>  
            <div class="col-md-4 my-4">
                <img class="w-20" src="./Source/img/mysql.png">
                    <h6 class="mt-1">O MySQL é simplesmente o sistema mais popular para armazenar e gerenciar dados com segurança.</h6>
            </div>  
            <div class="col-md-4 my-4">
                <i class="fab fa-digital-ocean fa-4x" style="color:blue"></i><br>
                <h6 style="font-weight:bold;">Digital Ocean</h6>
                    <h6 class="mt-1">A Digital Ocean é a plataforma de servidores da Amazon, atualmente é a mais avançada disponível no mercado em quesito de tecnologia e segurança, podendo ser ultilizada juntamente com sistema Ubuntu.</h6>
            </div>  
        </div>
        <hr>
    </div>
    
    
    
    <div class="container-fluid mt-1">
        
        <div class="row bg-dark">
            <div class="col-md-6 bordado my-auto text-light">
                <h2 class="text-center my-2 text-light">Como podemos te ajudar?</h2>
                <h5 id="text-center-mobile">Nós criamos sites e sistemas de maneira 100% profissional para seu negócio, indepentende do ramo. Temos alta experiência com solucionamento de quaisquer problemas que sua empresa esteja enfrentando, além de estudar e implantar novas oportunidades, criando e desenvolvendo soluções em tecnologia planejadas baseadas em anos de estudo.</h5>
                <br>
                <h5 class="text-center">Veja alguns exemplos de tecnologias desenvolvidas:</h5>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <video id="video" class="d-block w-100" src="Source/video/video1.mp4" muted autoplay playsinline />
                        </div>
                        <div class="carousel-item">
                        <video id="video" class="d-block w-100" src="Source/video/video2.mp4" muted autoplay playsinline />
                        </div>
                        <div class="carousel-item">
                        <video id="video" class="d-block w-100" src="Source/video/video3.mp4" muted="" autoplay="" playsinline/>
                        </video>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <br>
            <h4 class="text-center pilares-title">Saiba quais são os 8 pilares que usamos para um briefing assertivo e um plano de execução para desenvolver um projeto de valor e <u class="text-primary">RESULTADOS:</u></h4>
            <div class="col-md-4">
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspDetalhes do projeto;</h5>
                <p id="m-a">Entendemos totos os aspectos do seu projeto para um desenvolvimento otimizado.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspDomínios registrados;</h5>
                <p id="m-a">Recomendamos sempre mais de um domínio e nomes que tenham a ver com o nicho: .com e .br</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspPlanejamento de tráfego;</h5>
                <p id="m-a">Devemos ter em mente que precisamos desenvolver meios de tráfego para que seu site tenha acesso, podendo ser por meio de SEO, redes sociais ou tráfego pago.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbsp5 principais problemas para resolver;</h5>
                <p id="m-a">Analisamos suas maiores necessidades, com nossa experiência a maioria deles são quase sempre atrair mais clientes, melhorar o atendimento, investir e obter resultado, vender mais, ficar a frente dos concorrentes.</p>
            </div>
            <div class="col-md-4">
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbsp3 principais concorrentes;</h5>
                <p id="m-a">Analisamos os concorrentes do seu nicho, para o desenvolvimento de um projeto que seja único e não saia atrás no mercado.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspReferência de mercado;</h5>
                <p id="m-a">Criamos uma estratégia de briefing para que desenvolvamos um projeto não só que solucione seus problemas, mas que vire referência no mercado.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspLista de email marketing;</h5>
                <p id="m-a">Analisamos que frequência seria ideal para sua lista de emails, e que ferramentas usar.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspLogo e padrão de cores;</h5>
                <p id="m-a">E por fim, mas não menos importante, a identidade visual do projeto baseado em psicologia das cores e formas que tenham conexão com o nicho.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
            <h2 class="text-center text-light">Veja os depoimentos dos nossos clientes:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daniela Martins</h5>
                        <p>"Precisava de um site de roupas para expandir o meu negócio e a GLASS me ajudou muito criando um site com sistemas excepcionais integrados, já fechei mais de 2 negócios com eles e estou ansiosa para ver até aonde vai essa parceria"</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Leonardo Castellani</h5>
                        <p>"Sou Youtuber e precisava de um sistema para otimização dos meus roteiros, e a GLASS me ajudou muito nisso, criando um programa em que eu consigo definir toda trama dos meus textos de forma automatizada"</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">João Victor</h5>
                        <p>"Contratei a GLASS no intuito de que assumissem parte da minha equipe de TI, atualmente sou CTO de uma empresa de desenvolvimento e fiquei impressionado com o que foi entregue, muito mais do que o esperado, recomendo"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container text-center justify-content-center my-4">
            <h3>Vamos encontrar juntos a solução para seu negócio!</h3>
            <i class="fas fa-hand-point-down text-primary fa-3x"></i><br/>
            <a href="https://api.whatsapp.com/send?phone=5511978512654"><button class="my-2 btn btn-primary contatBtnIndex">QUERO ENTRAR EM CONTATO!</button></a>
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





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="./Source/Template/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>