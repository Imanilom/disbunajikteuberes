<!-- items/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $item->name }}</h1>
    <p>{{ $item->description }}</p>

    <h3>Varietas</h3>
    @foreach ($item->varietas as $varietas)
        <div class="card mb-3">
            <div class="card-header">
                <h4>{{ $varietas->name }}</h4>
            </div>
            <div class="card-body">
                <p>{{ $varietas->description }}</p>
                <a href="{{ route('varietas.show', $varietas->id) }}" class="btn btn-primary btn-sm">Read More</a>
            </div>
        </div>
    @endforeach

    <a href="{{ route('komoditas.show', $item->komoditas_id) }}" class="btn btn-secondary mt-3">Back to Komoditas</a>
</div>
@endsection
