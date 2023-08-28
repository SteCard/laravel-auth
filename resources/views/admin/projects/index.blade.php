@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>I nostri Progetti</h1>
            </div>
            <div class="col-12 mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date of Creation</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr class="text-center">
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->date_of_creation }}</td>
                                <td>
                                    <a href="" class="btn btn-info mx-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="" class="btn btn-warning mx-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="d-inline-block mx-1" action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12 text-center mt-5">
                <a href="{{ Route('admin.dashboard') }}" class="btn btn-primary">Dashboard</a>
            </div>
        </div>
    </div>
@endsection