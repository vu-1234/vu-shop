@extends('layouts.admin')

@section('content')
    @php

        $active = [
            1 => 'Hoạt động',
            0 => 'Không hoạt động',
        ];

    @endphp
    <div>
        <h3 class="fw-bold">LIST CATEGORIES</h3>
    </div>
    <div class="mt-3">
        <a href="{{ route('admin.category.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên</th>
                <th>Trạng Thái</th>
                <th style="width: 100">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $key => $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $active[$category->active] }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-primary btn-sm me-3">Edit</a>
                            <form action="{{ route('admin.category.delete', ['id' => $category->id]) }}" method="POST">
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
