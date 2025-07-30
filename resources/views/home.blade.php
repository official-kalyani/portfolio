@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
    <h1>Welcome to My Portfolio</h1>
    <p>This is the homepage of my personal portfolio. Learn more about me and see my work below.</p>

    <hr>

    <h2>Contact Me</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control" required></textarea>
        </div>
        <button class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection
