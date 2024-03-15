@extends('layouts.admin')

@section('content')
    <div>
        <h3 class="fw-bold">CREATE ADMIN</h3>
    </div>
    <form action="{{ route('admin.admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group ">
            <label for="" class="fw-semibold">Tên:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Mật Khẩu:</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Số Điện Thoại:</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Địa Chỉ:</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="card-footer mt-3">
            <a href="{{ route('admin.admin.index') }}" class="btn btn-secondary me-5">Trỏ lại</a>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        @csrf
    </form>
@endsection
