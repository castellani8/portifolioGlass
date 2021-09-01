@extends('layouts._dashboard')
@section('dashboard')

    <h1 class="text-center">Meu perfil</h1>
    <hr>
    <form method="POST" action="">
        @csrf

        <div class="row my-2">
            <div class="col-6 imgUp">
                <div class="text-center">
                    <div class="imagePreview" style="width:30vh;height:30vh"></div>
                    <label class="btn btn-primary w-75 display-none">
                        Upload<input type="file" class="uploadFile img justify-content-center content-center"
                            value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                    </label>
                </div>
            </div>
            <div class="col-6">
                <label for="birth">Primeiro nome</label>
                <input type="text" class="form-control" placeholder="Nome" value="{{ auth()->user()->name }}">
                <br>
                <label for="birth">Sobrenome</label>
                <input type="text" class="form-control" placeholder="Sobrenome">
                <br>
                <label for="birth">Data de nascimento</label>
                <input name="birth" id="birth" type="date" class="form-control">
                <br>
                <label for="birth">Celular</label>
                <input type="text" class="form-control" placeholder="">
            </div>
        </div>

        <hr>

        <div class="row my-2">
            <div class="col">
                <label for="basic-url">
                    <h4>Github</h4>
                </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://github.com</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="col">
                <label for="basic-url">
                    <h5>Linkedin</h5>
                </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://linkedin.com</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
        </div>

        <div class="my-4">
            <h4>Resumo:</h4>
            <textarea class="form-control" rows="5" cols="75" value=""></textarea>
        </div>
    </form>

@endsection
