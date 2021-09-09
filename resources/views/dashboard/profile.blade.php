@extends('layouts._dashboard')
@section('dashboard')

    <h1 class="text-center">Meu perfil</h1>
    <hr>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form method="POST" action="{{ route('user.update', ['user' => auth()->user() ]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row my-2">
            <div class="col-md-6 imgUp">
                <div class="text-center">
                    <div class="imagePreview" style="width:30vh;height:30vh"></div>
                    <label class="btn btn-primary w-75 display-none">
                        Upload<input type="file" name="photo" id="photo" class="uploadFile img justify-content-center content-center"
                            value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                    </label>
                </div>
            </div>
            @error('photo')
                    <span class="">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <div class="col-md-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" disabled value="{{ auth()->user()->name }}">
                <br>
                <label for="email">Email</label>
                <input type="email" class="form-control" disabled value="{{ auth()->user()->email }}">
                <br>

                
                <label for="birth_date">Data de nascimento</label>
                <input name="birth_date" id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ auth()->user()->birth_date }}">
                @error('birth_date')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br>
                <label for="phone">Celular</label>
                <input name="phone" id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" placeholder="(11)99999-9999" value="{{ isset(auth()->user()->phone) ? auth()->user()->phone : old('phone') }}">
                @error('phone')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
        </div>

        <hr>

        <div class="row my-2">
            <div class="col-md-6">
                <label for="basic-url">
                    <h4>Github</h4>
                </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="https://github.com/" id="github" name="github" 
                        value="{{ isset(auth()->user()->github) ? auth()->user()->github : old('github') }}">
                </div>
            </div>
            @error('github')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="col-md-6">
                <label for="basic-url">
                    <h5>Linkedin</h5>
                </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="https://linkedin.com/" id="linkedin" name="linkedin" 
                        value="{{ isset(auth()->user()->linkedin) ? auth()->user()->linkedin : old('linkedin') }}">
                </div>
            </div>
            @error('linkedin')
                <span class="">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="my-4">
            <h4>Resumo:</h4>
            <textarea name="resume" id="resume" class="form-control" rows="5" cols="75">{{ isset(auth()->user()->resume) ? auth()->user()->resume : old('resume') }}</textarea>
        </div>

        <button type="submit" class="btn btn-md btn-primary"> Salvar informações</button>
   
    </form>

@endsection
