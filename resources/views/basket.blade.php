@extends('layouts.base')

@section('title', 'Basket')

@section('content')

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('home')}}" title="{{ env('APP_NAME') }}">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page">Basket</a></li>
        </ul>
    </nav>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="title is-1">Your basket</h1>

    
    <div class="columns">
        <div class="column is-half">
            @include('components.basketProduct')
            @include('components.basketProduct')
            <div class="columns">
                <div class="column">
                    <a title="Back to shop" href="{{ route('shop.index')}}" class="button is-info is-outlined is-fullwidth">Continue shopping</a>
                </div>
                <div class="column">
                    <a title="Checkout" class="button is-info is-fullwidth">Checkout</a>
                </div>
            </div>
        </div>
        <div class="column is-half">
        </div>
    </div>

@endsection
