@extends('layouts.admin')
@section('content')
    <div>
        <h3 class="fw-bold">CREATE PRODUCT</h3>
    </div>
    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group ">
            <label for="" class="fw-semibold">Tên:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Mô tả:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Ảnh:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Giá:</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Giá đã giảm:</label>
            <input type="number" name="price_sale" class="form-control">
        </div>

        <div class="form-group ">
            <label for="" class="fw-semibold">Số lượng:</label>
            <input type="number" name="quantity" class="form-control">
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="fw-semibold">Danh Mục:</label>
                <select class="form-control" name="category_id">
                    @foreach ($category as $key => $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group mt-2">
            <label class="fw-semibold">Kích Hoạt:</label>
            <div class="custom-control custom-radio ms-3">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                    checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio ms-3">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

        <div class="card-footer mt-3">
            <a href="{{ route('admin.product.index') }}" class="btn btn-secondary me-5">Trỏ lại</a>
            <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
        </div>
        @csrf
    </form>
@endsection
