@extends('layouts.app')

@section('content')


<h1>All Categories</h1>
<table class="table table-striped project-orders-table">
    <thead>
      <tr>
        <th class="ml-5">ID</th>
        <th>Category name</th>
         <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($cats as $cat)
      <td>{{$cat->id}}</td>
        <td>{{$cat->category}}</td>

        <td>
          <div class="d-flex align-items-center">
           <a href="{{route('updateCat', ['id' => $cat->id])}}"> <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
              Edit
              <i class="typcn typcn-edit btn-icon-append"></i>                          
            </button></a>
          </td>
          <td>
            <a href="{{route('deleteCat', ['id' => $cat->id])}}"><button type="button" class="btn btn-danger btn-sm btn-icon-text">
              Delete
              <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
            </button></a>
          </div>
        </td>
        </tr>
        @endforeach
  
      
    </tbody>
    
</table>
{{ $cats->links() }}


@endsection

