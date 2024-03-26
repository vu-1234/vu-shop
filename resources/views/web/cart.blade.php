@php
    $totalPrice = 0; // Initialize total price variable
@endphp

<h2 class="fw-bold text-center">
    SHOPPING CART
</h2>

<table class="table">
    <thead class="table-dark">
        <tr>
            <th class="px-5 py-2 text-center">Tên</th>
            <th class="px-5 py-2 text-center">Ảnh</th>
            <th class="px-5 py-2 text-center">Giá</th>
            <th class="px-5 py-2 text-center">Số lượng</th>
            <th class="px-5 py-2 text-center">Tổng giá</th>
            <th class="px-5 py-2 text-center"></th>
        </tr>
    </thead>
    <tbody>
        @if (count($productDetails) > 0)
            @foreach ($productDetails as $productDetail)
                @php
                    // Calculate individual total price for each product
                    $individualTotalPrice = $productDetail['price_total'];
                    $totalPrice += $individualTotalPrice; // Add to the total price
                @endphp
                <tr>
                    <td class="px-5 py-2 text-center">{{ $productDetail['name'] }}</td>
                    <td class="px-5 py-2 text-center">
                        <img src="{{ asset('/uploads/product/' . $productDetail['image']) }}" class="card-img-top"
                            style="height: 75px; width:75px" alt="...">
                    </td>
                    <td class="px-5 py-2 text-center">{{ number_format($productDetail['price_sale']) }} VND</td>
                    <td class="px-5 py-2" style="text-align: center;">
                        <!-- Quantity update form -->
                        <form action="{{ route('web.update.cart', ['id' => $productDetail['id']]) }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="submit" name="decrement">-</button>
                                <input type="text" class="form-control text-center"
                                    value="{{ $productDetail['quantity_choose'] }}" name="quantity_choose"
                                    min="1" max="{{ $productDetail['quantity'] }}" style="width: 70px;" disabled>
                                <button class="btn btn-outline-secondary" type="submit" name="increment">+</button>
                            </div>
                        </form>
                    </td>
                    <td class="px-5 py-2 text-center">{{ number_format($productDetail['price_total']) }} VND</td>
                    <td class="px-5 py-2 text-center">
                        <form action="{{ route('web.delete.cart', ['id' => $productDetail['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-end fw-bold">Tổng:</td>
                <td colspan="1" class="px-5 py-2 text-center fw-bold">{{ number_format($totalPrice) }} VND</td>
                <td></td>
            </tr>
        @else
            <tr>
                <td colspan="6" class="text-center">Không có sản phẩm nào trong giỏ hàng của bạn.</td>
            </tr>
        @endif


    </tbody>
</table>

<div class="row mt-4">
    <div class="col-md-6">
        <a href="/" class="btn btn-secondary"><i class="fas fa-chevron-left me-1"></i> Tiếp tục mua sản phẩm</a>
    </div>
    <div class="col-md-6 text-end">
        @if (auth()->check())
            <!-- If user is logged in, show the checkout button -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#checkoutModal">
                Thanh toán
            </button>
        @else
            <!-- If user is not logged in, redirect to login page -->
            <a href="{{ route('web.login') }}" class="btn btn-success">Đăng nhập để thanh toán</a>
        @endif
    </div>
</div>

<div class="modal fade modal-xl" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="checkoutModalLabel">Thông tin giao hàng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="checkoutForm" action="{{ route('web.checkout') }}" method="POST">
                @csrf
                <div class="modal-body" style="padding: 25px 30px;">
                    <div class="row">

                        <input type="hidden" id="total_price" name="total_price" value="{{ $totalPrice }}">

                        <div class="col-12 mb-3">
                            <label for="note" class="form-label fw-bold">Ghi chú:</label>
                            <textarea class="form-control" id="note" name="note"></textarea>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="phone" class="form-label fw-bold">Số điện thoại:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="district" class="form-label fw-bold">Quận/Huyện:</label>
                            <input type="text" class="form-control" id="district" name="district" required>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="ward" class="form-label fw-bold">Phường:</label>
                            <input type="text" class="form-control" id="ward" name="ward" required>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="province" class="form-label fw-bold">Tỉnh:</label>
                            <input type="text" class="form-control" id="province" name="province" required>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="address" class="form-label fw-bold">Địa chỉ:</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>

                        <div class="col-12">
                            <div class="row justify-content-end">
                                <div class="col-auto">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Đóng</button>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Đặt hàng</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function incrementQuantity(button) {
        var input = button.parentNode.querySelector('input[type=number]');
        var currentValue = parseInt(input.value, 10);
        var maxQuantity = parseInt(input.getAttribute('max'), 10);

        if (currentValue < maxQuantity) {
            input.value = currentValue + 1;
        } else {
            alert("The maximum available quantity is " + maxQuantity);
            input.value = maxQuantity;
        }
    }

    function decrementQuantity(button) {
        var input = button.parentNode.querySelector('input[type=number]');
        var value = parseInt(input.value, 10);
        if (value > 1) {
            value--;
            input.value = value;
        }
    }
</script>
