@extends("layout")


@section("content")

<h1>Create a new category</h1>
<form method="post" action="{{ route('form.submit') }}">
    @csrf 
    <label for="name">
        Name:
    </label>
    <input  type="text" name="name" id="name" required/>
    <button type="submit">Submit</button>
</form>

@endsection