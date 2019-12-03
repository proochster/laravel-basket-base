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

    <h1 class="title is-3">Your basket</h1>

    <div class="columns">
        <div class="column is-half-tablet is-two-thirds-desktop">
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
                @include('components.basketProduct')
            @endforeach

            
            @endif
        </div>
        <div class="column is-half-tablet is-one-third-desktop">
            <article class="message">
                <div class="message-header">
                    <h3>Basket summary</h3>
                </div>
                <div class="message-body">
                    Number of items in the basket: {{ \Cart::getContent()->count() }}<br>
                    Total: {{ \Cart::getTotal() }}<br>
                    Sub Total: {{ \Cart::getSubTotal() }}<br>
                    Quantity: {{\Cart::getTotalQuantity()}}
                </div>
            </article>
            <div class="columns">
                <div class="column">
                    <a title="Back to shop" href="{{ route('shop.index')}}" class="button is-outlined is-fullwidth">Continue shopping</a>
                </div>
                <div class="column">
                    <a title="Checkout" class="button is-info is-fullwidth">Checkout</a>
                </div>
            </div>
        </div>

        
    </div>

@endsection
