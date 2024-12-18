<!-- resources/views/staff/shop.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Our Products</h1>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 position-relative">
                        @if($product->status === 'out_of_stock')
                            <div class="position-absolute top-0 start-0 bg-danger text-white p-2" style="z-index: 1;">Out of Stock</div>
                        @endif
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top {{ $product->status === 'out_of_stock' ? 'out-of-stock' : '' }}" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Price: RM {{ $product->price }}</strong></p>
                            <form action="{{ route('staff.deleteProduct', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <form action="{{ route('staff.updateProductStatus', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-warning">
                                    {{ $product->status === 'in_stock' ? 'Mark as Out of Stock' : 'Mark as In Stock' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Add New Product Button Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 d-flex align-items-center justify-content-center">
                    <div class="card-body text-center">
                        <a href="{{ route('staff.addProductPage') }}" class="btn btn-primary">Add New Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection