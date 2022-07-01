@extends('layouts.app')

@section('content')
@if(Auth::user())
<div class="container">
    <h2>Create A post</h2>
    <form action="{{route('savePost')}}" method="POST" enctype="multipart/form-data">
       @csrf
   @if(session()->has('message'))
      {{session()->get('message')}}
   @endif
    <div class="form-group">
       <label><strong>Title</strong></label>
       <input type="text" name="title" class="form-control" require>
    </div>
   
    <div class="form-group">
       <label><strong>Category<strong></label>
    <select type="text" name="category" class="form-control" require>
      @foreach ($cats as $cat)
      <option>{{$cat->category}}</option>  
      @endforeach
      {{-- <option value="category">HTML</option> --}}
       </select>
    </div>
   
    <div class="form-group">
       <label><strong>Image<strong></label><br>
       <input type="file" class="form-control" name="file_path">
    </div>
   
    <div class="form-group">
       <label><strong>Description<strong></label><br>
       <textarea type="text" class="form-control" name="description"></textarea>
    </div>

  
   
   <div class="form-group text-center">
   <button type="submit" class="btn btn-success btn-sm">Save</button>
   </div> 
     
    </form> 
   </div>
 @endif   



</html>



@endsection