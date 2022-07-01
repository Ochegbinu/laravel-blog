@extends('layouts.app')

@section('content')


<h1>Create New Category</h1>
@if(session()->has('message'))
{{session()->get('message')}}
@endif
<form action="{{route('saveCat')}}" method="post">
    @csrf
    <label for="category">New Category</label>
    <input type="text" name="category" class="form-control"><br>
    <div class="form-group text-center">
    <button type="submit" class="btn btn-success btn-md">Save</button>
    </div>
</form>


@endsection