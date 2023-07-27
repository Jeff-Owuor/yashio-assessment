@extends("layout")

@section("content")

<div class="container">
@if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
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
    <blockquote class="blockquote mb-0  d-flex flex-row  justify-content-between">
     <a href="{{ route('category.show', ['id' => $category->id]) }}">
       <p>{{$category->name}}</p>
     
    </a>
    <a href="{{url('edit/'.$category->id)}}">
    <span class="material-symbols-outlined">
        edit
    </span>
    </a>
    </blockquote>
  </div>
</div>
</div>
  @endforeach
  </div>
</div>

@endsection