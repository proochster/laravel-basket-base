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
{{-- 
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif --}}

    <div class="columns is-desktop">
        <div class="column">
            <figure class="image">
                <img src="{{ asset('img/products/'.$product->slug.'.jpg')}}" alt="{{ $product->name }}">
            </figure>
        </div>
        <div class="column">
            <h1 class="title is-3">{{ $product->name }}</h1>
            <div class="container">
                <h2 class="subtitle">{{ $product->details }}</h2>
                <p class="content">{{ $product->description }}</p>
                @if (session()->has('success_message'))
                    <article class="message is-success" role="alert">
                        <div class="message-body">
                            {{ session()->get('success_message') }}
                        </div>
                    </article>
                @endif
                @if (count($errors) > 0)
                    <article class="message is-danger" role="alert">
                        <div class="message-body">
                            <ul>
                                @foreach ($errors as $error)
                                <li>{{ $error }}</li> 
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endif
                <div class="level">
                    <div class="level-item level-right">
                        <form action="{{ route('basket.add')}}" method="POST" class="level is-mobile">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            {{-- <div class="level-item">
                                
                            </div>
                            <div class="level-item">
                                
                            </div> --}}

                            <div class="field is-horizontal is-mobile">
                                <div class="field-label is-normal">
                                    <label class="has-text-danger">{{ $product->money_format($product->price) }}</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                            <input name="quantity" type="number" class="input has-text-right" value="1" min="1">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="control">
                                            <button title="Add {{ $product->name}} to basket" type="submit" class="button is-info is-fullwidth">Add to basket</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>            
        </div>
    </div>

@endsection
