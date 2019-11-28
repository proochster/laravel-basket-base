@extends('layouts.base')

@section('title', $product->name)

@section('content')

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('home')}}" title="{{ env('APP_NAME') }}">Home</a></li>
            <li><a href="{{ route('shop.index')}}" title="Shop">Shop</a></li>
            <li class="is-active"><a href="#" aria-current="page">{{ $product->name }}</a></li>
        </ul>
    </nav>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="columns is-desktop">
        <div class="column">
            <figure class="image">
                <img src="{{ asset('img/products/'.$product->slug.'.jpg')}}" alt="{{ $product->name }}">
            </figure>
        </div>
        <div class="column">
            <h1 class="title is-1">{{ $product->name }}</h1>
            <div class="container">
                <div class="notification">
                    <h2 class="subtitle">{{ $product->details }}</h2>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="columns">
                    <div class="column">
                        <span class="title has-text-weight-bold has-text-success has-text-right is-block">{{ $product->money_format($product->price) }}</span>
                    </div>
                    <div class="column">
                        <a title="Add {{ $product->name}} to basket" href="{{ route('basket.index')}}" class="button is-info is-fullwidth">Add to basket</a>
                    </div>
                </div>
            </div>            
        </div>
    </div>

@endsection
