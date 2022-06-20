@extends('layouts._main')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark text-light">
                <div class="my-5 text-center">
                    <img src="{{ asset('storage/img/profiles/' . auth()->user()->image_url) }}" class="w-50 rounded-circle my-3" alt="">
                    <h5> Olá <br /> {{ auth()->user()->name }}</h5>
                    <br />

                    <a href="{{ route('painel.index') }}">
                        <button type="button" class="btn btn-secondary btn-block">Painel</button>
                    </a><br />

                    <a href="{{ route('painel.profile') }}">
                        <button type="button" class="btn btn-secondary btn-block">Perfil</button>
                    </a><br />

                        <button type="button" class="btn btn-secondary btn-block">Mensagens</button>
                    </a><br />

                    <a href="{{ route('painel.project') }}">
                        <button type="button" class="btn btn-secondary btn-block">Projetos</button>
                    </a><br />

                    <button type="button" class="btn btn-secondary btn-block">Configurações</button><br />

                    <a href="{{ route('logout') }}">
                        <button type="button" class="btn btn-secondary btn-block">Logout</button>
                    </a><br />
                </div>
            </div>
            <div class="col-md-9 bg-light">
                <div>
                    @yield('dashboard')
                </div>
            </div>
        </div>
    </div>


@endsection
