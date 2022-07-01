@extends('layouts.app')

@section('content')
@if(Auth::user())
<h1>All Postsss</h1>
<table class="table table-striped project-orders-table">
    <tr>
        
        <th>#ID</th>
        <th>Title</th>
        <th>Category</th>
        <th>Image</th>
        <th>Description</th>
        <th>Action</th>
        
        </tr>
       @foreach($post as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->category}}</td>
            <td><img src="{{asset('/images' .$post->file_path)}}" /></td>
            <td>{{$post->description}}</td>

            <td>
              <a href=""><button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                Edit
                <i class="typcn typcn-edit btn-icon-append"></i>                          
              </button></a>
           
              <a href="{{route('deletePost', ['id' => $post->id])}}"><button type="button" class="btn btn-danger btn-sm btn-icon-text">
                Delete
                <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
              </button></a>
            
            </td>
                    


            
        </tr>
      @endforeach
</table>
@endif

@endsection