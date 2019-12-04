@extends('layouts.base')

@section('title', 'Shop')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="title is-3">Shop</h1>

    @foreach ($products->chunk(4) as $chunk)
    <div class="columns">
        @foreach ($chunk as $item)
        <div class="column is-half-tablet is-one-quarter-desktop">
            @include('components.shopProduct')
        </div>
        @endforeach
    </div>
    @endforeach

@endsection
