@extends('layouts.admin')
@section('content')
    <div>
        <h3 class="fw-bold">LIST ADMINS</h3>
    </div>
    <div class="mt-3">
        <a href="{{ route('admin.admin.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table">

        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th style="width: 100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->phone }}</td>
                    <td>{{ $admin->address }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.admin.edit', ['id' => $admin->id]) }}" class="btn btn-primary btn-sm me-3">Edit</a>
                            <form action="{{ route('admin.admin.delete', ['id' => $admin->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
