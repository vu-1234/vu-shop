@extends('layouts.admin')

@section('content')
    <div>
        <h3 class="fw-bold">TRANG THỐNG KÊ</h3>
    </div>
    <div class="mt-3">
        <form method="GET" action="{{ route('admin.statistical.index') }}" class="row container">
            <div class="col-6 mb-3">
                <label for="start_date" class="form-label fw-bold">Ngày bắt đầu:</label>
                <input type="date" class="form-control" id="start_date" name="start_date"
                    value="{{ request()->input('start_date') }}">
            </div>
            <div class="col-6 mb-3">
                <label for="end_date" class="form-label fw-bold">Ngày cuối:</label>
                <input type="date" class="form-control" id="end_date" name="end_date"
                    value="{{ request()->input('end_date') }}">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>
    </div>

    <div class="mt-3">
        @if ($orders->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order ID</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng giá</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalPrice = 0;
                    @endphp

                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->created_at->format('d-m-Y') }}</td>
                            <td>{{ number_format($order->total_price) }} VND</td>
                        </tr>
                        @php
                            $totalPrice += $order->total_price;
                        @endphp
                    @endforeach

                    <tr>
                        <td class="fw-bold text-end" colspan="4">Tổng giá:</td>
                        <td class="fw-bold" colspan="1">{{ number_format($totalPrice) }} VND</td>
                    </tr>
                </tbody>
            </table>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order ID</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng giá</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" colspan="5">Không tìm thấy đơn hàng nào!</td>
                    </tr>
                </tbody>
            </table>
        @endif
    </div>
@endsection
