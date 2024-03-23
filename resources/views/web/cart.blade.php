<div>
    @foreach ($productDetails as $productDetail)
        <div>
            <p>Product ID: {{ $productDetail['id'] }}</p>
            <p>Name: {{ $productDetail['name'] }}</p>
            <p>Description: {{ $productDetail['description'] }}</p>
            <p>Price: {{ $productDetail['price'] }}</p>
            <p>Price Sale: {{ $productDetail['price_sale'] }}</p>
            <p>Quantity: {{ $productDetail['quantity'] }}</p>
            <p>Quantity Choose: {{ $productDetail['quantity_choose'] }}</p>
            <p>Total Price: {{ $productDetail['price_total'] }}</p>
        </div>
    @endforeach
</div>
