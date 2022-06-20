<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Facebook Tags -->
    <meta property="og:type"               content="Glass Tecnologias" />
    <meta property="og:title"              content="Soluções em tecnologia para negócios" />
    <meta property="og:description"        content="A Glass traz diversas soluções para o aumento de produtividade no seu negócio, automatizando e desenvolvendo recursos tecnológicos." />
    <meta property="og:image"              content="https://www.etecpirassununga.com.br/wp-content/uploads/2018/05/ds.jpg" />
    <meta property="og:url"                content="https://www.glasstecnologias.com" />
    
    <meta name="keywords" content="PHP, HTML, CSS, JavaScript">
    <meta name="description" content="Criação de sites e sistemas para empresas">
    <meta name="author" content="Lucas Castellani">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site/styles.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dashboard/styles.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        @include('layouts._navbar')
    </header>

    @yield('content')

    <div>
        @include('layouts._footer')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/site/scripts.js') }}"></script>
    <script src="{{ asset('js/dashboard/imagePreview.js') }}"></script>

</body>
</html>





