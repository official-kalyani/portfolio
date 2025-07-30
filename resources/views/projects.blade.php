@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container mt-5">
    <h1>My Projects</h1>
    <p>Here are some of the projects I've worked on.</p>

    <div class="row">
        @foreach($projects as $project)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($project->image)
                    <img src="{{ asset($project->image) }}" width="100">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                    @if($project->url)
                        <a href="{{ $project->url }}" target="_blank" class="btn btn-sm btn-outline-primary">View Project</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
