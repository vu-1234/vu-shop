@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.category.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group ">
            <label for="">Title</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                    name="active" {{ $category->active == 1 ? 'checked' : '' }}>
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                    name="active" {{ $category->active == 0 ? 'checked' : '' }}>
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

        <div class="card-footer mt-3">
            <a href="{{ route('admin.category.index') }}" class="btn btn-secondary me-5">Trỏ lại</a>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        @csrf
    </form>
@endsection
