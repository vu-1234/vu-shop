@extends('layouts.web')

@section('main')
    <style>
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .thumb-wrapper {
            padding: 25px 15px;
            background: #fff;
            border-radius: 15px;
            text-align: center;
            position: relative;
            box-shadow: 1px 6px 23px -9px rgba(0, 0, 0, 0.75);
        }

        .thumb-content .btn {
            color: #7ac400;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
            background: none;
            border: 1px solid #7ac400;
            padding: 6px 14px;
            margin-top: 5px;
            line-height: 16px;
            border-radius: 20px;
        }

        .thumb-content .btn:hover {
            color: #fff;
            background: #7ac400;
        }

        .thumb-content .btn:active {
            color: #fff;
            background: #7ac400;
        }

        .img-box img {
            height: 250px;
        }
    </style>
    <div class="py-5">
        <h5 class="fw-bold">PRODUCT ORVERVIEW</h5>
        <div class="d-flex">
            @foreach ($categories as $category)
                <h6 class="me-3">{{ strtoupper($category->name) }}</h6>
            @endforeach
        </div>
        <div class="d-flex mt-4">
            {{-- card product --}}
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-4 mb-4">
                        <div class="thumb-wrapper">
                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                                <img src="{{ asset('uploads/Product/' . $product->image) }}" class="img-fluid"
                                    alt="{{ $product->name }}">
                            </div>
                            <div class="thumb-content mt-3">
                                <h4 class="text-center">{{ $product->name }}</h4>
                                <p class="text-center">
                                    <strike>{{ number_format($product->price) }}</strike> VND
                                    <span>{{ number_format($product->price_sale) }} VND</span>
                                </p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
