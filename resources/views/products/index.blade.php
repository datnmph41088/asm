@extends('layouts')

@section('title', 'Danh sách sản phẩm')

@section('content')
<div class="container">
    <div class="col-md-12">
        <h1 class="my-4">Danh sách sản phẩm</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm book-card">
                        <img src="{{ $product->thumbnail }}" class="card-img-top" alt="{{ $product->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ number_format($product->price, 0, ',', '.') }} VND</p>
                            <a href="{{ url('/detail', ['id' => $product->id]) }}" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
