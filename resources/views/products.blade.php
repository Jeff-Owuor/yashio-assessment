@extends("layout")

@section("content")
  <div class="container">
    <h1>All Products</h1>
    <a href="{{url ('/product/create')}}">
        <span class="material-symbols-outlined">
add
</span>
</a>
  <div class="row">
  @foreach ($products as $product)
  <div class="col-md-3 mt-3">
  <div class="card">
  <!-- <div class="card-header">
    Quote
  </div> -->
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$product->name}}</p>
      <p>{{$product->price}}</p>
    </blockquote>
  </div>
</div>
</div>
  @endforeach
  </div>
  </div>
@endsection