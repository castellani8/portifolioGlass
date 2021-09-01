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
                <label for="birth">Nome</label>
                <input type="text" class="form-control" disabled value="{{ auth()->user()->name }}">
                <br>
                <label for="birth">Email</label>
                <input type="email" class="form-control" disabled value="{{ auth()->user()->email }}">
                <br>
                <label for="birth">Data de nascimento</label>
                <input name="birth" id="birth" type="date" class="form-control">
                <br>
                <label for="birth">Celular</label>
                <input name="phone" id="phone" type="text" class="form-control" placeholder="">
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
                        <span class="input-group-text" id="github">https://github.com</span>
                    </div>
                    <input type="text" class="form-control" id="github" name="github" aria-describedby="github">
                </div>
            </div>
            <div class="col">
                <label for="basic-url">
                    <h5>Linkedin</h5>
                </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="linkedin">https://linkedin.com</span>
                    </div>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" aria-describedby="linkedin">
                </div>
            </div>
        </div>

        <div class="my-4">
            <h4>Resumo:</h4>
            <textarea name="resume" id="resume" class="form-control" rows="5" cols="75" value=""></textarea>
        </div>

        <button type="submit" class="btn btn-md btn-primary"> Salvar informações</button>
   
    </form>

@endsection
