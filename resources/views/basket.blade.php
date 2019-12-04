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

            <a title="Back to shop" href="{{ route('shop.index')}}" class=""><  Continue shopping</a>
            
        @endif
        </div>
        <div class="column is-half-tablet is-one-third-desktop">

            <article class="panel is-sticky">
                <p class="panel-heading">
                    Basket summary
                </p>
                <span class="panel-block">
                    Number of items: <strong>{{\Cart::getTotalQuantity()}}</strong>
                </span>
                <span class="panel-block">
                    Sub Total: <strong>{{ \Cart::getSubTotal() }}</strong>
                </span>
                <span class="panel-block">
                    Total: <strong>{{ \Cart::getTotal() }}</strong>
                </span>
                <span class="panel-block">
                    <a title="Checkout" class="button is-info is-fullwidth">Checkout</a>
                </span>
            </article>
        </div>
    </div>

@endsection
