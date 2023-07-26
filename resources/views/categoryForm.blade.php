@extends("layout")


@section("content")
<div class="container">
<h1 style="text-align:center;">Create a new category</h1>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
<form method="post" action="{{ route('form.submit') }}">
    @csrf 
    <label for="name" style="font-size:35px;">
        Name:
    </label>
    <input  type="text" name="name" id="name" required  
    style="display:block; width:60%;"
    placeholder="Enter category name"
    />
    <button type="submit" class="btn btn-secondary mt-2">Submit</button>
</form>
</div>
</div>
</div>
@endsection