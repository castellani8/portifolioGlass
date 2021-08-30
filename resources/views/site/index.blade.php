@extends('layouts._header')
@section('content')


    <div class="container-fluid header" style="background-image: url('{{ url('/img/background2.png') }}');">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h1-copy">Procura por um desenvolvedor web backend profissional? </h1>
                <hr class="fhr">
                <h2 class="title">Conheça a GLASS Soluções em Tecnologias, fundada por Lucas S. Castellani!</h2>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid p-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img class="mt-3" src="{{ asset('/img/navbarclaro.png') }}" alt="" style="width:250px">
                </div>
                <div class="col-lg-9">
                    <h3>O QUE EU FAÇO?</h1>
                        <p class="lead">Especializado em soluções de tecnologia para qualquer tipo de negócio,
                            meu objetivo é prestar o melhor serviço para sua empresa como funcionário PJ, sou especializado
                            em desenvolver soluções com boas práticas e que sejam agradáveis para seu usuário! Seja por
                            demanda de documentações ou para criação de novos sistemas.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-3">
        <div class="row justify-content-center text-center">
            <h2>Tecnologias mais usadas por mim:</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-4 my-4">
                <i class="fab fa-php fa-5x" style="color:#474A8A"></i>
                <i class="fab fa-laravel fa-5x" style="color:red"></i><br>
                <h6 style="font-weight:bold;">PHP/Laravel</h6>
                <h6 class="mt-1">Ultilizamos a linguagem de programação mais usada pelos gigantes da internet: o
                    PHP, que juntamente com seu framework mais usado, o Laravel, se tornam a melhor opção em tecnologia para
                    desenvolvimento back-end em geral, atendendo a qualquer requisito.</h6>
            </div>
            <div class="col-md-4 my-4">
                <i class="fab fa-js fa-4x" style="color:yellow"></i>
                <i class="fab fa-html5 fa-5x" style="color:orange"></i>
                <i class="fab fa-css3-alt fa-4x" style="color:blue"></i><br>
                <h6 style="font-weight:bold;">JavaScript/HTML5/CSS3</h6>
                <h6 class="mt-1">As tecnologias mais requisitadas no mercado hoje são: HTML5, JavaScript e Css.
                    Tais tecnologias tem um uso imprescindível na criação de sites e programas, pois são eles os
                    responsáveis por toda estruturação de como o seu usuário interage com o seu ambiente.</h6>
            </div>
            <div class="col-md-4 my-4">
                <i class="fas fa-palette fa-5x" style="color:orange"></i><br>
                <h6 style="font-weight:bold;">Web Design UI/UX </h6>
                <h6 class="mt-1">A parte que uso para encontrar o melhor visual para seu site/sistema. É usado
                    para deixar seu usuário confortável e para criar uma comunicação que cative o cliente, dando
                    credibilidade e atraindo novos clientes.</h6>
            </div>

        </div>
        <div class="row text-center">
            <div class="col-md-4 my-4">
                <i class="fab fa-bootstrap fa-4x" style="color:#7a257a "></i><br>
                <h6 style="font-weight:bold;">Bootstrap</h6>
                <h6 class="mt-1">Um framework que facilita muito o trabalho front-end, e nos possibilita trabalhar
                    com padrões de grid, também trabalho com outros frameworks como Tailwind.</h6>
            </div>
            <div class="col-md-4 my-4">
                <img src="{{ asset('/img/mysql.png') }}" style="width: 20%">
                <h6 class="mt-1">O MySQL é simplesmente o sistema mais popular para armazenar e gerenciar dados
                    com segurança, sempre que começo uma aplicação do zero opto por utilizá-lo, mas já trabalhei com
                    diversos outros.</h6>
            </div>
            <div class="col-md-4 my-4">
                <i class="fab fa-digital-ocean fa-4x" style="color:blue"></i><br>
                <h6 style="font-weight:bold;">Digital Ocean</h6>
                <h6 class="mt-1">A Digital Ocean é a plataforma de servidores da Amazon, atualmente é a mais
                    avançada disponível no mercado em quesito de tecnologia e segurança, podendo ser ultilizada juntamente
                    com sistema Ubuntu.</h6>
            </div>
        </div>
        <hr>
    </div>



    <div class="container-fluid mt-1">

        <div class="row bg-dark">
            <div class="col-md-6 bordado my-auto text-light">
                <h2 class="text-center my-2 text-light">Como posso te ajudar?</h2>
                <h5 id="text-center-mobile">Eu crio sites e sistemas de maneira 100% profissional para seu negócio,
                    indepentende do ramo. Tenho alta experiência com solucionamento de quaisquer problemas que sua empresa
                    esteja enfrentando, além de estudar e implantar novas funcionalidades, criando e desenvolvendo soluções
                    em tecnologia planejadas baseada em documentações ou sprints.</h5>
                <br>
                <h5 class="text-center">Veja alguns exemplos de tecnologias desenvolvidas:</h5>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <video id="video" class="d-block w-100" src="{{ asset('video/video1.mp4') }}" muted autoplay
                                playsinline />
                        </div>
                        <div class="carousel-item">
                            <video id="video" class="d-block w-100" src="{{ asset('video/video2.mp4') }}" muted autoplay
                                playsinline />
                        </div>
                        <div class="carousel-item">
                            <video id="video" class="d-block w-100" src="{{ asset('video/video3.mp4') }}" muted=""
                                autoplay="" playsinline />
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
            <h4 class="text-center pilares-title">Saiba quais são os 8 pilares que uso para um briefing assertivo e um plano
                de execução para desenvolver um projeto de valor e <u class="text-primary">RESULTADOS:</u></h4>
            <div class="col-md-4">
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspDetalhes do projeto;</h5>
                <p id="m-a">Procuro entender todos os aspectos do seu projeto para um desenvolvimento otimizado.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspDomínios registrados;</h5>
                <p id="m-a">Recomendo sempre mais de um domínio e nomes que tenham a ver com o nicho: .com e .br (caso seja
                    um novo sistema)</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspPlanejamento de tráfego;
                </h5>
                <p id="m-a">Devemos ter em mente que precisamos desenvolver meios de tráfego para que seu site tenha acesso,
                    podendo ser por meio de SEO, redes sociais ou tráfego pago.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbsp5 principais problemas
                    para resolver;</h5>
                <p id="m-a">Analiso suas maiores necessidades, com nossa experiência a maioria deles são quase sempre atrair
                    mais clientes, melhorar o atendimento, investir e obter resultado, vender mais, ficar a frente dos
                    concorrentes.</p>
            </div>
            <div class="col-md-4">
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbsp3 principais concorrentes;
                </h5>
                <p id="m-a">Procuro os principais concorrentes do seu nicho, para o desenvolvimento de um projeto que seja
                    único e não saia atrás no mercado.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspReferência de mercado;
                </h5>
                <p id="m-a">Desenvolvo uma estratégia de briefing para que desenvolvamos um projeto não só que solucione
                    seus problemas, mas que vire referência no mercado.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspLista de email marketing;
                </h5>
                <p id="m-a">Analiso que frequência seria ideal para sua lista de emails, e que ferramentas usar, tendo como
                    referência os concorrentes.</p>
                <h5 class="pilares-subtitle"><i class="fas fa-check-circle text-primary"></i>&nbspLogo e padrão de cores;
                </h5>
                <p id="m-a">E por fim, mas não menos importante, a identidade visual do projeto baseado em psicologia das
                    cores e formas que tenham conexão com o nicho.</p>
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
                            <p>"Precisava de um site de roupas para expandir o meu negócio e o Lucas me ajudou muito criando
                                um site com sistemas excepcionais integrados, já fechei mais de 2 negócios com ele"</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Leonardo Castellani</h5>
                            <p>"Sou Youtuber e precisava de um sistema para otimização dos meus roteiros, e o Lucas me
                                ajudou muito nisso, criando um programa em que eu consigo definir toda trama dos meus textos
                                de forma automatizada"</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">João Victor</h5>
                            <p>"Contratei o Lucas no intuito de que assumissem um cargo da minha equipe de TI, atualmente
                                sou CTO de uma empresa de desenvolvimento e fiquei impressionado com o que foi entregue,
                                muito mais do que o esperado, recomendo"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center justify-content-center my-4">
        <h3>Vamos encontrar juntos a solução para seu negócio!</h3>
        <i class="fas fa-hand-point-down text-primary fa-3x"></i><br />
        <a href="https://api.whatsapp.com/send?phone=5511978512654"><button
                class="my-2 btn btn-primary contatBtnIndex">QUERO SABER MAIS!</button></a>
    </div>

@endsection
