@extends('layouts.admin')

@section('content')
    <div>
        <h2 class="fw-bold">CHI TIẾT ĐẶT HÀNG</h2>

        <!-- Table of Products in the Order -->
        <div class="mt-4">
            <h4>Sản phẩm trong đơn hàng</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng cộng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->orderDetails as $index => $orderDetail)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $orderDetail->product->name }}</td>
                            <td>
                                <img src="{{ asset('/uploads/product/' . $orderDetail->product->image) }}"
                                    class="card-img-top" style="height: 75px; width:75px" alt="...">
                            </td>
                            <td>{{ $orderDetail->quantity }}</td>
                            <td>{{ number_format($orderDetail->price / $orderDetail->quantity) }} VND</td>
                            <td>{{ number_format($orderDetail->price) }} VND</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="fw-bold text-end" colspan="5">Total Price:</td>
                        <td class="fw-bold" colspan="1">{{ number_format($order->total_price) }} VND</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Form to Edit Order Status -->
    <div class="mt-4">
        <h4 class="fw-bold">Chỉnh sửa trạng thái đơn hàng</h4>
        <form action="{{ route('admin.order.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="status" class="form-label">Chọn trạng thái:</label>
                <select class="form-select" name="status" id="status">
                    <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Chưa giải quyết</option>
                    <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Đang xử lý</option>
                    <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Hoàn thành</option>
                    <option value="4" {{ $order->status == 4 ? 'selected' : '' }}>Đã hủy</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa trạng thái</button>
        </form>
    </div>
@endsection
