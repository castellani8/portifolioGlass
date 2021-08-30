@extends('layouts._header')
@section('content')

    <div class="container-fluid header" style="background-image: url('{{ url('/img/background2.png') }}');">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h1-copy">Fale conosco:</h1>
                <hr class="fhr">
                <div class="text-center justify-content-center mt-5">
                    <h3 class="title">Vamos encontrar juntos a solução para seu negócio!</h3>
                    <i class="fas fa-hand-point-down text-success fa-3x title"></i><br />
                    <a href="https://api.whatsapp.com/send?phone=5511978512654"><button
                            class="title my-4 btn btn-success contatBtnIndex" style="border-radius:15px;"><i
                                class="fab fa-whatsapp"></i>&nbspQUERO ENTRAR EM CONTATO!</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-6">

        </div>
    </div>

@endsection
