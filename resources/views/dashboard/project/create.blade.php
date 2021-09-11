@extends('layouts._dashboard')
@section('dashboard')


    <h1 class="text-center my-4 display-3">Adicionar novo projeto</h1>
    <hr class="my-4">
    <form action="{{ route('project.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 imgUp justify-content-center">
                    <div class="text-center">
                        <div class="imagePreview" style="width:30vh;height:30vh"></div>
                        <label class="btn btn-primary w-75 display-none">
                            Upload<input type="file" name="photo" id="photo"
                                class="uploadFile img justify-content-center content-center" value="Upload Photo"
                                style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="title">Título</span>
                        </div>
                        <input type="text" class="form-control px-1" id="title" placeholder="Titulo"
                            aria-describedby="title" required>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="link">Link</span>
                        </div>
                        <input type="text" class="form-control px-1" id="link" placeholder="Link" required>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="description">Descrição</span>
                        </div>
                        <textarea cols="30" rows="6" type="text" class="form-control" id="description"
                            placeholder="Descrição" required></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <br>
        </div>
    </form>

@endsection
