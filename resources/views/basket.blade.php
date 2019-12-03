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
        @if ($basket_empty ?? '')

            <article class="message" role="alert">
                <div class="message-body">
                    <div class="level">
                        <div class="level-left">
                            {{ $basket_empty ?? '' }}
                        </div>
                        <div class="level-right">
                            <a href="{{ route('shop.index') }}" title="Back to shop" class="button is-outlined">Continue shopping ></a>
                        </div>
                    </div>
                </div>
            </article>   

        @else    

            @foreach ($basket as $basketItem)
                <ul>
                    <li>id: {{$basketItem->id}}</li>
                    <li>Name: {{$basketItem->name}}</li>
                    <li>Qty: {{$basketItem->quantity}}</li>
                    <li>Price: {{$basketItem->price}}</li>
                    <li>Slug: {{$basketItem->slug}}</li>
                </ul>
                <hr>
            @endforeach

            <div class="columns">
                <div class="column">
                    <a title="Back to shop" href="{{ route('shop.index')}}" class="button is-outlined is-fullwidth">Continue shopping</a>
                </div>
                <div class="column">
                    <a title="Checkout" class="button is-info is-fullwidth">Checkout</a>
                </div>
            </div>

        @endif
        </div>
        <div class="column is-half">
                Number of items in the basket: {{ \Cart::getContent()->count() }}<br>
                Total: {{ \Cart::getTotal() }}<br>
        </div>
    </div>

@endsection
