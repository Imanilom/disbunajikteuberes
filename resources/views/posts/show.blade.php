<!-- posts/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mt-3">
    @endif

    <a href="{{ route('varietas.show', $post->varietas_id) }}" class="btn btn-secondary mt-3">Back to Varietas</a>
</div>
@endsection
