<div class="card">
    <div class="card-image">
        <figure class="image">
            <a href="{{ route('shop.product', $item->slug)}}" title="{{ $item->name }}" id="{{ $item->slug }}">
                <img src="{{ asset('img/products/'.$item->slug.'.jpg')}}" alt="{{ $item->name }}">
            </a>
        </figure>
    </div>
    <div class="card-content">
    <h2 class="title is-4">{{ $item->name }}</h2>
        <div class="content">{{ $item->details }}</div>
        <span class="title has-text-weight-bold has-text-success has-text-right is-block">{{ $item->money_format($item->price) }}</span>

        <div class="columns">
            <div class="column">
                <a title="View {{ $item->name }}" href="{{ route('shop.product', $item->slug)}}" class="button is-info is-outlined is-fullwidth">View</a>
            </div>
            <div class="column">
                <form action="{{ route('basket.add')}}#{{ $item->slug }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <input type="hidden" name="name" value="{{ $item->name }}">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="price" value="{{ $item->price }}">
                        <button title="Add {{ $item->name}} to basket" type="submit" class="button is-info is-fullwidth">Add to basket</button>
                </form>
            </div>
        </div>
    </div>
</div>