@foreach ($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->price }} Rs</p>
        <img src="{{ asset('storage/' . $product->image) }}" width="100" />
        <a href="#">Add to Cart</a>
    </div>
@endforeach
<form action="{{ route('cart.add', $product->id) }}" method="POST">
    @csrf
    <button type="submit">Add to Cart</button>
</form>
