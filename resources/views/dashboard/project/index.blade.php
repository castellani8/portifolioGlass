@extends('layouts._dashboard')
@section('dashboard')

    <h1 class="display-3 text-center">Meus projetos</h1>
    <div class="border rounded p-3 row">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @forelse ($projects as $project)
            <div class="card col-md-3 m-1" style="height: 25rem">
                <br>
                <img class="card-img-top" src="{{ asset('storage/img/projects/' . $project->image_url) }}"
                    alt="Card image cap" style="max-height: 10rem">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">{{ $project->link }}</a>
                    <br>
                    <br>
                    <a href="{{ route('project.edit', ['project' => $project]) }}" class="btn btn-primary">Editar</a>
                    <a data-toggle="modal" data-target="#projectDelete" class="btn btn-danger">Deletar</a>

                    {{-- MODAL DELETE --}}
                    <div class="modal fade" id="projectDelete" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Deseja realmente deletar este projeto?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('project.destroy', ['project' => $project]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Deletar</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Fim Modal --}}

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
