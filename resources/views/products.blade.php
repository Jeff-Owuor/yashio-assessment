@extends("layout")

@section("content")
  <div class="container">
  @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('delete'))
        <div class="alert alert-danger" role="alert">
            {{ session('delete') }}
        </div>
    @endif
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
    <a href="{{url('editProduct/'.$product->id)}}">
        <span class="material-symbols-outlined">
            edit
        </span>
        </a>
    <form action="{{url('/productDelete/'.$product->id)}}" style="margin-left:4px;" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Delete </button>
       </form>
  </div>
</div>
</div>
  @endforeach
  </div>
  </div>
@endsection