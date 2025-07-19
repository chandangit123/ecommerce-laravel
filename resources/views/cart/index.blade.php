<h2>Your Cart</h2>
@foreach ($cart as $id => $item)
    <div>
        <h4>{{ $item['name'] }}</h4>
        <p>Rs. {{ $item['price'] }} x {{ $item['quantity'] }}</p>
        <form action="{{ route('cart.update', $id) }}" method="POST">
            @csrf
            <input type="number" name="quantity" value="{{ $item['quantity'] }}" />
            <button type="submit">Update</button>
        </form>
        <form action="{{ route('cart.remove', $id) }}" method="POST">
            @csrf
            <button type="submit">Remove</button>
        </form>
    </div>
@endforeach
<a href="{{ route('checkout') }}">Proceed to Checkout</a>
