@extends('admin.app')

@section('content')
<div class="container">
    <h2>All Projects</h2>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">+ Add New</a>

    @foreach ($projects as $project)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $project->title }}</h5>
                <p>{{ $project->description }}</p>
                @if($project->image)
                    <img src="{{ asset($project->image) }}" width="200">
                @endif
                <div class="mt-2">
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
