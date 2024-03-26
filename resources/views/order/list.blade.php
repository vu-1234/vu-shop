@extends('layouts.admin')
@section('content')
    @php

        $status = [
            1 => 'Chưa giải quyết',
            2 => 'Đang xử lý',
            3 => 'Hoàn thành',
            4 => 'Đã hủy',
        ];

    @endphp
    <div>
        <h3 class="fw-bold">LIST ORDERS</h3>
    </div>
    <table class="table">

        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên Khách hàng</th>
                <th>Ghi chú</th>
                <th>Tổng giá tiền</th>
                <th>Trạng thái</th>
                <th>Ngày Đặt hàng</th>
                <th style="width: 100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->note }}</td>
                    <td>{{ number_format($order->total_price) }} VND</td>
                    <td>{{ $status[$order->status] }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.order.edit', ['id' => $order->id]) }}" class="btn btn-primary btn-sm">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
