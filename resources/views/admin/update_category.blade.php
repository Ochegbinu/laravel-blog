@extends('layouts.app')


@section('content')
<h1>Update this Category</h1>
@if(session()->has('message'))
{{session()->get('message')}}
@endif
<form action="{{route('editCat', ['id' => $cats->id])}}" method="post">
    @csrf
    <label for="category">New Category</label>
    <input type="text" name="category" class="form-control" value="{{$cats->category}}"><br>
    <div class="form-group text-center">
    <button type="submit" class="btn btn-success btn-md">Save</button>
    </div>
</form>
    
@endsection