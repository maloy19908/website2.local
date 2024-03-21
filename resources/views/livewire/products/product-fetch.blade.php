<div class="container">
    <div class="my-3">
        <form wire:submit.pravent="fetchAndStore">
            <input class="form-control" type="text" wire:model="query">
            <button class="btn btn-danger m-2">в базу</button>
        </form>
        <button wire:click="fetchShow">Посмотреть</button>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($products as $product)
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="{{$product->thumbnail}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$product->title}}</text></svg>
            <div class="card-body">
              <p class="card-text">{{$product->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" wire:click="deleteItem({{$product->id}})">Удалить</button>
                </div>
                <div class="post-rating">
                </div>
                <span class="rating-value">{{ $product->rating }}</span>
                <small class="text-body-secondary">{{$product->created_at}}</small>
              </div>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
</div>

