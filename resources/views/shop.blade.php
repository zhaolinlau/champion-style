@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Our Products</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 text-right">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="favoritesDropdown" onclick="toggleDropdown()">
                        My Favorites
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" id="favoritesMenu" aria-labelledby="favoritesDropdown" style="display: none;">
                        @if(auth()->check() && auth()->user()->favoriteProducts->count() > 0)
                            @foreach(auth()->user()->favoriteProducts as $favorite)
                                <a class="dropdown-item" href="#">{{ $favorite->name }}</a>
                            @endforeach
                        @else
                            <a class="dropdown-item" href="#">No favorites yet</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 position-relative">
                        @if($product->status == 'out_of_stock')
                            <div class="out-of-stock-overlay">
                                <span class="out-of-stock-text">Out of Stock</span>
                            </div>
                        @endif
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top {{ $product->status == 'out_of_stock' ? 'grayscale' : '' }}" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Price: RM {{ $product->price }}</strong></p>
                            @if(auth()->check() && auth()->user()->favoriteProducts->contains($product->id))
                                <form action="{{ route('removeFavorite', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Remove from Favorites</button>
                                </form>
                            @else
                                <form action="{{ route('addFavorite', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Add to Favorites</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleDropdown() {
            var menu = document.getElementById('favoritesMenu');
            if (menu.style.display === 'none') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        }
    </script>
@endsection