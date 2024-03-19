<style>
    .btn-submit {
        color: #7ac400;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #7ac400;
        padding: 6px 14px;
        margin-top: 5px;
        line-height: 16px;
        border-radius: 0.375rem;
    }

    .btn-submit:hover {
        color: #fff;
        background: #7ac400;
    }

    .btn-submit:active {
        color: #fff;
        background: #598e03;
    }

    .description {
        word-wrap: break-word;
        height: 370px
    }
</style>

<button class="btn btn-light" style="box-shadow: 0px 0px 40px -10px rgba(0,0,0,0.85);">
    <a href="/" class="text-decoration-none text-dark">
        Go Home Page
    </a>
</button>

<div class="mt-4">
    <form action="{{ route('web.addProductToCart', ['id' => $product->id]) }}" method="post">
        <h3 class="fw-bold">{{ $product->name }} Detail</h3>
        <div class="row mt-4">
            <div class="col-8">
                <div class="d-flex flex-column">
                    <img src="{{ asset('uploads/Product/' . $product->image) }}" alt="{{ $product->name }}" height="400px">
                    <div class="mt-3 d-flex w-100 overflow-scroll bg-transparent">
                        @foreach ($product->productImages as $image)
                            <img class="me-4" src="{{ asset('uploads/Product_image/' . $image->image) }}"
                                alt="{{ $image->name }}" height="100px" width="100px">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h4 class="fw-bold">{{ $product->name }}</h4>
                <div class="mt-2 d-flex fw-bold">
                    Price:&nbsp;
                    <p class="text-decoration-line-through mb-0">
                        {{ number_format($product->price_sale) }} VND
                    </p>
                </div>
                <div>
                    <p class="mb-0 fw-bold">
                        Price Sale: {{ number_format($product->price_sale) }} VND
                    </p>
                </div>
                <div class="mt-3 description overflow-auto">
                    {{ $product->description }}
                </div>
                <button type="submit" class="btn-submit mt-3 w-100">Add to Cart</button>
            </div>
        </div>
    </form>
</div>
