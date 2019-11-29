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

    @if ( \Cart::isEmpty() )

    <article class="message" role="alert">
        <div class="message-body">
            Basket is empty. 
        </div>
    </article>
               
    @else
    <div class="columns">
        <div class="column is-half">
            @foreach (\Cart::getContent() as $record)
                <ul>
                    {{-- {{dd($record)}} --}}
                    {{-- @include('components.basketProduct') --}}
                    <li>id: {{$record->id}}</li>
                    <li>Name: {{$record->name}}</li>
                    <li>Qty: {{$record->quantity}}</li>
                    <li>Price: {{$record->price}}</li>
                    <li>Model: {{$record->model}}</li>
                </ul>
                <hr>
                @endforeach



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
                Number of items in the basket: {{ \Cart::getContent()->count() }}<br>
                Total: {{ \Cart::getTotal() }}<br>
        </div>
    </div>
    @endif

@endsection
