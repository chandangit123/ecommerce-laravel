<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="text" name="name" placeholder="Name" />
  <input type="text" name="slug" placeholder="Slug" />
  <textarea name="description" placeholder="Description"></textarea>
  <input type="number" name="price" placeholder="Price" />
  <input type="number" name="stock" placeholder="Stock" />
  <input type="file" name="image" />
  <button type="submit">Add Product</button>
</form>
