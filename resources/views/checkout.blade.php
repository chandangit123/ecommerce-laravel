<h2>Checkout</h2>
@foreach ($cart as $item)
    <p>{{ $item['name'] }} x {{ $item['quantity'] }} = Rs. {{ $item['price'] * $item['quantity'] }}</p>
@endforeach

<p><strong>Total: Rs. {{ $total }}</strong></p>

<form method="POST" action="{{ route('place.order') }}">
    @csrf
    <button type="submit">Place Order</button>
</form>
