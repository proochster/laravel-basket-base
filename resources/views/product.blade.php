@extends('layouts.base')

@section('content')

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/shop">Shop</a></li>
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
            <figure class="image is-4by3">
                <img src="https://picsum.photos/800/600" alt="Placeholder image">
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
                        <button class="button is-info is-fullwidth">Add to basket</button>
                    </div>
                </div>
            </div>
            
        </div>
        {{-- @foreach ($chunk as $item)
        <div class="column">
            <div class="card">
                <div class="card-image">
                    
                </div>
                <div class="card-content">
                <h3 class="title is-4">{{ $item->name }}</h3>
                    <div class="content">{{ $item->details }}</div>
                    <span class="title has-text-weight-bold has-text-success has-text-right is-block">{{ $item->money_format($item->price) }}</span>
                    <div class="columns">
                        <div class="column">
                            <button class="button is-info is-outlined is-fullwidth">View</button>
                        </div>
                        <div class="column">
                            <button class="button is-info is-fullwidth">Add to basket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach --}}
    </div>

@endsection
