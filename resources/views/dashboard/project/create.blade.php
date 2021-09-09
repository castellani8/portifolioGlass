@extends('layouts._dashboard')
@section('dashboard')

<form action="">
    @csrf

    <div class="form-group">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="title">Título</span>
              </div>
            <input type="text" class="form-control" id="title" placeholder="Titulo" aria-describedby="title" required>
        </div>
        <br>
        <br>
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="description">Descrição</span>
            </div>
            <input type="text" class="form-control" id="description" placeholder="Descrição" required>
        </div>
        <br>
        <br>
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="link">Link</span>
            </div>
            <input type="text" class="form-control" id="link" placeholder="Descrição" required>
        </div>
    </div>

</form>

@endsection