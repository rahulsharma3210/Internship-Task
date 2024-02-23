@extends('layouts.app')
@section('main-section')

<div class="container mt-3">
    <div class="row d-flex">
        <div class="col-sm-6 text-left">
            <a href="/">
                <button class="btn btn-dark btn-sm"><--Back</button>
            </a>
        </div>

        <div class="col-sm-6 text-right">
            <a href="{{ route('create_project', ['userId' => $userId]) }}" class="btn btn-primary btn-sm">Project+</a>
        </div>
    </div>
</div>

@foreach($projects as $project)

<div class="container">
    <div class="row  justify-content-center">
        <div class="col-sm-8 mt-4 ">
            <div class="card p-4 bg-blue-100" style="border: solid black 5px;">
                <h3>Project Info:</h3>
                <p>User Id : <b>{{ $project->user_id }}</b></p>
                <p>Project Name : <b>{{ $project->name }}</b></p>
                <p>Description : <b>{{ $project->description }}</b></p>
                <div>
                    <a href="/{{ $project->id }}/editprojects" class="btn btn-success btn-sm"
                        style="font-size: 14px; width: 80px ">Edit</a>
                    <form class="d-inline" action="/{{ $project->id }}/delete" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection