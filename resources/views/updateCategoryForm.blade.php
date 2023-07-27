@extends('layout')

@section("content")
        <form method="post" action="{{url('/categoryUpdate/'.$category->id)}}">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $category->name }}">
            <button class="btn btn-primary" type="submit" name="submit">Update</button>
        </form>
@endsection