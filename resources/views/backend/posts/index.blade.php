@extends('backendtemplate')
@section('title','Posts')

@section('content')

<div class="container">
  <div class="row my-3">
	 <div class="col-md-12">
            <!-- <h2>Total:{{count($posts)}}</h2> -->
            <h3 class="mb-3">Posts Table</h3>
    	       <table class="table table-bordered shadow" style="width:100%;height: 100px;">
                <thead style="background-color: #EA6B6F;color: white;">
                  <tr>
                    <th scope="col" width="50px">No</th>

                    <th scope="col" >Post Title</th>

                    <th scope="col" width="150px">User Profile</th>

                    <th scope="col" width="150px">User Name</th>
          
                    <th scope="col" width="150px">Posted Date</th>

                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
      	      @foreach($posts as $post)
                <tr>
                  
                  <td>{{$post->id}}.</td>
                  <td>{{$post->title}}</td>
                  <td><img src="{{asset($post->user->profile)}}" class="img-fluid"></td>
                  <td>{{$post->user->name}}</td>
                  <td>{{$post->created_at->diffForHumans()}}
                  </td>
                  <td>
                     <a href="{{route('posts.show',$post->id)}}" class="btn float-center btn-sm mb-3" style="background-color:#E26241;color: white;">
                       View Detail
                     </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endsection


