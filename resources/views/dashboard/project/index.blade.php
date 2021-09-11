@extends('layouts._dashboard')
@section('dashboard')

<h1 class="display-3 text-center">Meus projetos</h1>
    <div class="border rounded p-3 row">
        @forelse ($projects as $project)
            <div class="card col-md-3 m-1" style="height: 25rem">
                <br>
                <img class="card-img-top" src="{{ asset('storage/img/projects/' . $project->image_url) }}" alt="Card image cap" style="max-height: 10rem">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">{{ $project->link }}</a>
                    <br>
                    <br>
                    <a href="{{ route('project.edit', ['project' => $project]) }}"  class="btn btn-primary">Editar</a>
                    <a href=""  class="btn btn-danger">Deletar</a>
                </div>
            </div>
        @empty
            <div class=" card d-flex col-md-3 m-1" style="height: 25rem">
                <div class="my-auto mx-auto">
                    Nenhum registro encontrado
                </div>
            </div>
        @endforelse
        <div class="card d-flex col-md-3 m-1" style="height: 25rem">
            <div class="my-auto mx-auto">
                <a href="{{ route('project.create') }}">
                    <i class="fas fa-5x fa-plus bg-dark text-light rounded-circle p-5"></i>
                </a>
            </div>
        </div>
    </div>



@endsection
