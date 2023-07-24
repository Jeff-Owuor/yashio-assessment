@extends("layout")


@section("content")

<div class="container">
<h1 class="text-center">Add product</h1>



<form method="post" action="{{ route('addProduct.submit') }}">
    @csrf
  <fieldset>
    <legend>Disabled fieldset example</legend>
    <div class="mb-3">
        <label for="name">
            Name:
        </label>
        <input  type="text" name="name" id="name" required/>
    </div>
    <div class="mb-3">
        <label for="price">
            Price:
        </label>
        <input  type="text" name="price" id="name" required/>
    </div>
    <div class="mb-3">
    <label for="category">Category:</label>
        <select id="category" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>





</div>
@endsection