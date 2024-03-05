@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group ">
            <label for="">Title</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group ">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group ">
            <label for="">Link</label>
            <input type="text" name="url" class="form-control">
        </div>
        <div class="form-group ">
            <label for="">Banner Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="menu">Sắp Xếp</label>
            <input type="number" name="sort_by" value="1" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                    checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

        <div class="card-footer mt-3">
            <a href="{{ route('admin.banner.index') }}" class="btn btn-secondary me-5">Trỏ lại</a>
            <button type="submit" class="btn btn-primary">Thêm Banner</button>
        </div>
        @csrf
    </form>
@endsection
