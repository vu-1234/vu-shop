@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.product.index') }}" class="btn btn-secondary me-5">Trỏ lại</a>

    <a href="{{ route('admin.product-image.create', ['id' => $id]) }}"class="btn btn-primary">Thêm ảnh</a>

    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Ảnh</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product_image as $key => $product_image)
                <tr>
                    <td>{{ $product_image->id }}</td>
                    <td>
                        <img src="{{ asset('uploads/Product_image/' . $product_image->image) }}" height="40px">

                    </td>
                    <td>
                        <form action="{{ route('admin.product-image.delete', ['id' => $product_image->id]) }}" method="POST">
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
