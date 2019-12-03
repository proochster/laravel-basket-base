<article class="product" id="{{ $basketItem->slug }}">
  <div class="columns is-mobile">
    <figure class="column is-one-quarter image">
      <img src="{{ asset('img/products/'.$basketItem->slug.'.jpg')}}">
    </figure>
    <div class="column is-mobile is-three-quarters">
      <div class="content">
        <h5>{{ $basketItem->name }}</h5>
        <p>{{ $basketItem->details }}</p>
      </div>
    </div>
  </div>
  <div class="level is-mobile">
    <div class="level-left">
        <form action="{{ route('basket.remove', $basketItem->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button title="Remove {{ $basketItem->name }} from the basket" type="submit" class="button is-small">Remove</button>
        </form>
    </div>
    <div class="level-right control">
    <form action="{{ route('basket.update', $basketItem->id) }}#{{ $basketItem->slug }}" method="POST" class="level-item">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            
            <div class="field has-addons">
              <div class="control">
                <input name="quantity" type="number" class="input is-small is-inline has-text-right" value="{{ $basketItem->quantity }}">
              </div>
              <div class="control">
                  <button title="Update number of items" type="submit" class="button is-small is-outlined is-info">Update</button>
              </div>
            </div>
        </form>
    </div>
  </div>
</article>
<hr>
  