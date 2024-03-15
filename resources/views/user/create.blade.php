@extends('layouts.admin')

@section('content')
    <div>
        <h3 class="fw-bold">CREATE USER</h3>
    </div>
    <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
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
            <label class="fw-semibold">Giới tính:</label>
            <div class="custom-control custom-radio ms-3">
                <input class="custom-control-input" value="1" type="radio" id="gender" name="gender">
                <label for="gender" class="custom-control-label">Nam</label>
            </div>
            <div class="custom-control custom-radio ms-3">
                <input class="custom-control-input" value="0" type="radio" id="gender" name="gender">
                <label for="gender" class="custom-control-label">Nữ</label>
            </div>
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Ngày Sinh:</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Huyện:</label>
            <input type="text" name="district" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Phường:</label>
            <input type="text" name="ward" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Tỉnh:</label>
            <input type="text" name="province" class="form-control">
        </div>
        <div class="form-group ">
            <label for="" class="fw-semibold">Địa chỉ:</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="card-footer mt-3">
            <a href="{{ route('admin.user.index') }}" class="btn btn-secondary me-5">Trỏ lại</a>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        @csrf
    </form>
@endsection
