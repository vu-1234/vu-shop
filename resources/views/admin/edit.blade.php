@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.admin.update', ['id' => $admin->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group ">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $admin->name }}">
        </div>
        <div class="form-group ">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $admin->email }}">
        </div>
        <div class="form-group ">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="card-footer mt-3">
            <a href="{{ route('admin.admin.index') }}" class="btn btn-secondary me-5">Trỏ lại</a>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
        </div>
        @csrf
    </form>
@endsection
