@extends('layouts._dashboard')
@section('dashboard')

    <div class="border rounded row">
        @forelse ($projects as $project)
            <div class="card col-md-3" style="height: 20rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        @empty
            <div class=" card d-flex col-md-3 m-1" style="height: 20rem">
                <div class="my-auto mx-auto">
                    Nenhum registro encontrado
                </div>
            </div>
        @endforelse
        <div class="card d-flex col-md-3 m-1" style="height: 20rem;">
            <div class="my-auto mx-auto">
                <a href="{{ route('project.create') }}">
                    <i class="fas fa-5x fa-plus bg-dark text-light rounded-circle p-3"></i>
                </a>
            </div>
        </div>
    </div

@endsection
