<!-- komoditas/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $komoditi->name }}</h1>
    <p>{{ $komoditi->description }}</p>

    <h3>Items</h3>
    @foreach ($komoditi->items as $item)
        <div class="card mb-3">
            <div class="card-header">
                <h4>{{ $item->name }}</h4>
            </div>
            <div class="card-body">
                <p>{{ $item->description }}</p>
                <a href="{{ route('items.show', $item->id) }}" class="btn btn-primary btn-sm">Read More</a>
            </div>
        </div>
    @endforeach

    <a href="{{ url('/komoditas') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
