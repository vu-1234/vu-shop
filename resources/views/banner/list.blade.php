@extends('layouts.admin')

@section('content')
    @php

        $active = [
            0 => 'Không hoạt động',
            1 => 'Hoạt động',
        ];

    @endphp
    <div>
        <h3 class="fw-bold">LIST BANNERS</h3>
    </div>
    <div class="mt-3">
        <a href="{{ route('admin.banner.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên</th>
                <th>Link</th>
                <th>Ảnh</th>
                <th>Trạng Thái</th>
                <th style="width: 100px">Action</th>
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
                    <td>{{ $active[$banner->active] }}</td>

                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.banner.edit', ['id' => $banner->id]) }}" class="btn btn-primary btn-sm me-3">Edit</a>
                            <form action="{{ route('admin.banner.delete', ['id' => $banner->id]) }}" method="POST">
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
