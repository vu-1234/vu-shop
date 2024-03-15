@extends('layouts.admin')
@section('content')
    @php

        $gender = [
            0 => 'Nữ',
            1 => 'Nam',
        ];

    @endphp
    <div>
        <h3 class="fw-bold">LIST USERS</h3>
    </div>
    <div class="mt-3">
        <a href="{{ route('admin.user.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table">

        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Giới Tính</th>
                <th>Ngày Sinh</th>
                <th>Huyện</th>
                <th>Phường</th>
                <th>Tỉnh</th>
                <th>Địa Chỉ</th>
                <th style="width: 100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $gender[$user->gender] }}</td>
                    <td>{{ $user->date }}</td>
                    <td>{{ $user->district }}</td>
                    <td>{{ $user->ward }}</td>
                    <td>{{ $user->province }}</td>
                    <td>{{ $user->address }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}" class="btn btn-primary btn-sm me-3">Edit</a>
                            <form action="{{ route('admin.user.delete', ['id' => $user->id]) }}" method="POST">
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
