<div class="">
  <div class="columns is-mobile">
    <figure class="column is-one-quarter image">
      <img src="{{ asset('img/products/'.$basketItem->slug.'.jpg')}}">
    </figure>
    <div class="column is-mobile is-three-quarters">
      <div class="content">
        <h5>{{ $basketItem->name }}</h5>
        <p>{{ $basketItem->details }}</p>
      <p>slug: {{$basketItem->slug}}</p>
      </div>
    </div>
  </div>
  <div class="level">
    <div class="level-left">
        <form action="{{ route('basket.remove', $basketItem->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button title="Remove {{ $basketItem->name }} from the basket" type="submit" class="button is-small">Remove</button>
        </form>
    </div>
    <div class="level-right control">
        <form action="{{ route('basket.update', $basketItem->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <input name="quantity" type="number" class="level-item input is-small" value="{{ $basketItem->quantity }}">
            <button title="Update number of items" type="submit" class="level-item button is-small is-outlined is-info">Update</button>
        </form>
    </div>
  </div>
  <hr>
</div>
  