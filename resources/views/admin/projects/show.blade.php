@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>{{ $project->title }}</h1>
            </div>
            <div class="col-12 mt-5">
                <div class="card w-100">
                    <div class="card-body text-center">
                        <p class="card-text my-5">{{ $project->description }}</p>
                        <h6 class="card-subtitle my-5 text-body-secondary">{{ $project->date_of_creation }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-5">
                <a href="{{ Route('admin.projects.index') }}" class="btn btn-primary">Lista Progetti</a>
            </div>
        </div>
    </div>
@endsection