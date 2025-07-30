@extends('admin.app')

@section('content')
<div class="container">
    <h2>Edit Project</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input name="title" class="form-control" value="{{ $project->title }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ $project->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="url">Project URL</label>
            <input type="text" name="url" class="form-control" value="{{ old('url', $project->url) }}">
           
        </div>
        <div class="mb-3">
            <label>Image (optional)</label>
            <input type="file" name="image" class="form-control">
            @if($project->image)
                <img src="{{ asset($project->image) }}" width="200" class="mt-2">
            @endif
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
