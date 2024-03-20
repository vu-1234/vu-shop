<style>
    .category {
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        background: #7ac400;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        padding: 5px 0;
    }

    .category-nav-link:hover h4 {
        background: #7ac400;
    }

    .category-nav-link:hover h4 {
        color: #fff !important;
    }

    .category-active h4 {
        color: #fff !important;
        background: #7ac400 !important;
    }
    .category-nav-link:active h4 {
        background-color: #598e03 !important;
    }
    .select-category,
    .btn-search-category {
        background: #7ac400;
    }
    .btn-search-category:hover {
        background-color: #7ac400;
    }
    .btn-search-category:active {
        background-color: #598e03 !important;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .card {
        background: #fff;
        border-radius: 15px;
        text-align: center;
        position: relative;
        box-shadow: 1px 6px 23px -9px rgba(0, 0, 0, 0.75);
    }

    .card .btn {
        color: #7ac400;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #7ac400;
        padding: 10px 35px;
        margin-top: 5px;
        line-height: 16px;
        border-radius: 20px;
    }

    .card .btn:hover {
        color: #fff;
        background: #7ac400;
    }

    .card .btn:active {
        color: #fff;
        background: #598e03;
    }

    .img-box img {
        height: 250px;
    }
</style>

@php
    // Get the category ID from the URL
    $url = explode('/', request()->path());
    $categoryId = end($url);
@endphp

<div class="pt-5 row">
    <div class="col-3 d-flex flex-column">
        <nav class="nav flex-column ">
            <li>
                <a href="/" class="nav-link category text-center fw-bold text-decoration-none text-white">
                    <h4 class="mb-0">
                        ALL PRODUCT
                    </h4>
                </a>
            </li>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('web.category', ['id' => $category->id]) }}"
                        class="text-decoration-none category-nav-link {{ $categoryId == $category->id ? ' category-active' : '' }}">
                        <h4 class="nav-link mb-0 text-dark">
                            {{ strtoupper($category->name) }}
                        </h4>
                    </a>
                </li>
            @endforeach
        </nav>
    </div>
    <div class="col-9">
        <div class="d-flex justify-content-between">
            <h3 class="fw-bold mb-0 d-flex align-items-center">( {{ $category->name }} ) PRODUCT</h3>
            <form action="{{ route('web.search') }}" method="GET" style="width: 60%">
                <div class="input-group" style="width: 100%;">
                    <select class="form-select select-category text-white p-2" name="category" style="width: 25%;">
                        <option value="" selected>Chọn danh mục</option>
                        <!-- Add options for each category -->
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="search_product" style="width: 55%;">
                    <button class="btn btn-search-category text-white" type="submit" style="width: 17%;">Tìm kiếm</button>
                </div>
            </form>
        </div>
        <div class="row row-cols-3 mt-4">
            @foreach ($products as $product)
                <form action="{{ route('web.addProductToCart', ['id' => $product->id]) }}" method="post">
                    @csrf
                    <a href=" {{ route('web.productDetail', ['id' => $product->id]) }}"
                        class="text-decoration-none">
                        <div class="card mb-4 border-0" style="box-shadow: 1px 6px 23px -9px rgba(0, 0, 0, 0.75);">
                            <div class="card-body text-center">
                                <img src="{{ asset('/uploads/product/' . $product->image) }}" class="card-img-top"
                                    style="height: 200px" alt="...">
                                <h5 class="my-3 fw-bold">
                                    {{ $product->name }}
                                </h5>
                                <div class="text-decoration-line-through">
                                    {{ number_format($product->price) }} VND
                                </div>
                                <div>
                                    {{ number_format($product->price_sale) }} VND
                                </div>
                                <button type="submit" class="btn btn-secondary mt-3">Add to Cart</button>
                            </div>
                        </div>
                    </a>
                </form>
            @endforeach
        </div>
    </div>
</div>
