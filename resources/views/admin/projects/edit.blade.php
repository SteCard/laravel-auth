@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 d-flex justify-content-start align-items-end mt-5">
                <h1>Modifica il Progetto "{{ $project->title }}"</h1>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-end mt-5">
                <a href="{{ Route('admin.projects.index') }}" class="btn btn-primary">Lista Progetti</a>
            </div>
            <div class="col-12 my-5">
                <form action="{{ route('admin.projects.update', $project)}}" method="POST" class="border p-3 w-100">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-4">
                        <label class="control-label my-2">Titolo:</label>
                        <input type="text" name="title" id="title" placeholder="Modifica il Titolo del Progetto" class="form-control" value="{{ old('title') ?? $project->title }}" required>
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label my-2">Descrizione:</label>
                        <textarea name="description" id="description" placeholder="Modifica la Descrizione del Progetto" class="form-control" cols="30" rows="10" required>{{ old('description') ?? $project->description }}</textarea>
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label my-2">Data di Creazione:</label>
                        <input type="date" name="date_of_creation" id="date_of_creation" class="form-control" value="{{ old('date_of_creation') ?? $project->date_of_creation }}" required>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button class="btn btn-warning fw-bold px-5" type="submit">MODIFICA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection