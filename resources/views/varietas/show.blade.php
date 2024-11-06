<!-- varietas/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $varietas->name }}</h1>
    <p>{{ $varietas->description }}</p>

    <h3>Produk Jadi</h3>
    @foreach ($varietas->posts as $post)
        <div class="card mb-3">
            <div class="card-header">
                <h4>{{ $post->title }}</h4>
            </div>
            <div class="card-body">
                <p>{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
            </div>
        </div>
    @endforeach

    <a href="{{ route('items.show', $varietas->item_id) }}" class="btn btn-secondary mt-3">Back to Item</a>
</div>
@endsection
