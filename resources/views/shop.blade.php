@extends('layouts.base')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="title is-4">Shop</h1>

    @foreach ($products->chunk(4) as $chunk)
    <div class="columns is-desktop">
        @foreach ($chunk as $item)
        <div class="column">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                    <img src="https://picsum.photos/800/600" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                <h3 class="title is-4">{{ $item->name }}</h3>
                    <div class="content">{{ $item->details }}</div>
                    <span class="title has-text-weight-bold has-text-success has-text-right is-block">{{ $item->money_format($item->price) }}</span>
                    <div class="columns">
                        <div class="column">
                            <a title="View {{ $item->name }}" href="/shop/{{ $item->slug }}" class="button is-info is-outlined is-fullwidth">View</a>
                        </div>
                        <div class="column">
                            <button class="button is-info is-fullwidth">Add to basket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

@endsection
