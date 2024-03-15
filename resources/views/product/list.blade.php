@extends('layouts.admin')
@section('content')
    @php
        $active = [
            1 => 'Hoạt động',
            0 => 'Không hoạt động',
        ];
    @endphp
    <div>
        <h3 class="fw-bold">LIST PRODUCTS</h3>
    </div>
    <div class="mt-3">
        <a href="{{ route('admin.product.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table">

        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tiêu Đề</th>
                <th>Ảnh</th>
                <th>Giá tiền</th>
                <th>Giá tiền đã giảm</th>
                <th>Trang Thái</th>
                <th>Chi tiết ảnh</th>
                <th style="width: 100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        <img src="{{ asset('/uploads/product/' . $product->image) }}" height="40px">
                    </td>
                    <td>{{ number_format($product->price) }} </td>
                    <td>{{ number_format($product->price_sale) }}</td>
                    <td>{{ $active[$product->active] }}</td>
                    <td>
                        <a href="{{ route('admin.product-image.index', ['id' => $product->id]) }}" class="btn btn-primary btn-sm">Image</a>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-primary btn-sm me-3">Edit</a>
                            <form action="{{ route('admin.product.delete', ['id' => $product->id]) }}" method="POST">
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
    {{ $products->links() }}
@endsection
