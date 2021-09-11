@extends('layouts._dashboard')
@section('dashboard')


    <h1 class="text-center my-4 display-3">Adicionar novo projeto</h1>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <hr class="my-4">
    <form action="{{ isset($project) ? route('project.update', ['project' => $project]) : route('project.store', ['project' => $project]) }}" method="POST" enctype="multipart/form-data">
        @if(isset($project)) @method('PUT') @endif     
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 imgUp justify-content-center">
                    <div class="text-center">
                        <div class="imagePreview w-75" style="width:30vh;height:30vh;background-image:url('{{ isset($project) ? asset('storage/img/projects/' . $project->image_url) : '' }}')"></div>
                        <label class="btn btn-primary w-75 display-none">
                            Upload<input type="file" name="photo" id="photo"
                                class="uploadFile img justify-content-center content-center" value="Upload Photo"
                                style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                        @error('photo')
                            <span class="invalid">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="title">Título</span>
                        </div>
                        <input type="text" class="form-control px-1" id="title" name="title" placeholder="Titulo"
                            aria-describedby="title" value="{{ isset($project) ? $project->title : old('title') }}" required>
                        @error('title')
                            <span class=" ">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="link">Link</span>
                        </div>
                        <input type="text" class="form-control px-1" id="link" name="link" placeholder="Link" 
                            value="{{ isset($project) ? $project->link : old('link') }}" required>
                        @error('link')
                            <span class="invalid">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="description">Descrição</span>
                        </div>
                        <textarea cols="30" rows="6" type="text" class="form-control" id="description" name="description"
                            placeholder="Descrição" required>{{ isset($project) ? $project->description : old('description') }}</textarea>
                    </div>
                    @error('description')
                        <span class="invalid text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <hr>
            <a href="{{ url()->previous() }}" class="text-center btn btn-warning btn-lg">Voltar</a>
            <button type="submit" class="text-center btn btn-success btn-lg">salvar</button>
            <br>
        </div>
    </form>

@endsection
