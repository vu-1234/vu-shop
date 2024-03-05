@extends('layouts.admin')

@section('content')
    @php

        $active = [
            0 => 'Không hoạt động',
            1 => 'Hoạt động',
        ];

    @endphp
    <div>
        <a href="{{ route('admin.banner.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tiêu Đề</th>
                <th>Link</th>
                <th>Ảnh</th>
                <th>Thứ tự</th>
                <th>Trạng Thái</th>
                <th>Cập Nhật</th>
                <th style="width: 100px"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banner as $key => $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td>{{ $banner->name }}</td>
                    <td>{{ $banner->url }}</td>
                    <td>
                        <img src="{{ asset('uploads/Banner/' . $banner->image) }}" height="40px">

                    </td>
                    <td>{{ $banner->sort_by }}</td>
                    <td>{{ $active[$banner->active] }}</td>

                    <td>
                        <a href="{{ route('admin.banner.edit', ['id' => $banner->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>

                        <td>
                        <form action="{{ route('admin.banner.delete', ['id' => $banner->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
