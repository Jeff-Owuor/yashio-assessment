@extends("layout")

@section("content")

<div class="container">
    <h1>Categories</h1>
    <a href="{{url ('/createCategory')}}">
        <span class="material-symbols-outlined">
add
</span>
</a>
<div class="row">
  @foreach ($categories as $category)
  <div class="col-md-3 mt-3">
  <div class="card">
  <!-- <div class="card-header">
    Quote
  </div> -->
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$category->name}}</p>
    </blockquote>
  </div>
</div>
</div>
  @endforeach
  </div>
</div>

@endsection