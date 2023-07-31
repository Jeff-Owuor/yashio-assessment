@extends('layout')

@section('content')
<form method="post" action="{{url('/productUpdate/'.$product->id)}}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}">
    <input type="text" name="price" value="{{ $product->price }}">
    <button class="btn btn-primary" type="submit" name="submit">Update</button>

</form>
@endsection