@extends("layout")

@section("content")
<h1>Category Details</h1>
    <p>Category Name: {{ $category->name }}</p>

    <h2>Children:</h2>
    <ul>
        @foreach ($products as $product)
            <li>
                <p>Product Name: {{ $product->name }}</p>
                <p>Price: {{ $product->price }}</p>
            </li>
        @endforeach
    </ul>
@endsection