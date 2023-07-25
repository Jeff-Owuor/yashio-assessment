@extends("layout")

@section("content")
       <div class="container">
            <h1>Item Details</h1>
            <p>Name: {{ $category->name }}</p>
            <p>Description: {{ $item->description }}</p>
       </div>
@endsection