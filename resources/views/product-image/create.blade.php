@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.product-image.store', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image[]" class="form-control" multiple>
        </div>

        <div class="card-footer mt-3">
            <a href="{{ route('admin.product-image.index', ['id' => $id]) }}" class="btn btn-secondary me-5">Trỏ lại</a>
            <button type="submit" class="btn btn-primary">Thêm Ảnh Sản Phẩm</button>
        </div>
    </form>
@endsection
