@extends('frontendtemplate')
@section('title','Posts')

@section('content')

<div class="container">
  <div class="row my-3">
	 <div class="col-md-12">
            <!-- <h2>Total:{{count($posts)}}</h2> -->
    	       <table class="table table-bordered shadow" style="width:100%;height: 100px;">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" width="50px">No</th>
          
                    <th scope="col" width="200px">Title</th>

                    <th scope="col" width="150px">Photo</th>

                    <th scope="col">Monthly Price</th>
          
                    <th scope="col">Area</th>

                    <th scope="col">Bedrooms</th>

                    <th scope="col">Bathrooms</th>
          
                    <th scope="col">Posted At</th>

                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
      	      @foreach($posts as $post)
                <tr>
                  
                  <td>{{$loop->index + 1 }}.</td>
                  <td>{{$post->title}}</td>
                  <td><img src="{{asset($post->photo)}}" class="img-fluid"></td>
                  <td>{{$post->monthly_fees}}</td>
                  <td>{{$post->length}}ft * {{$post->width}}ft </td>
                  <td>{{$post->bedrooms}}</td>
                  <td>{{$post->bathrooms}}</td>
                  <td>{{$post->created_at}}
                  </td>
                  <td>
                    <a href="{{route('posts.edit',$post->id)}}" class="btn "  style="color: #0A97B0;">
                      <i class="fas fa-fw fa-edit"></i>
                    </a>
                     <form method="post" 
                     action="{{route('posts.destroy',$post->id)}}" 
                      class="d-inline-block" >
                      @csrf
                      {{method_field('DELETE')}}
                       <button  type="submit"
                        onclick="return confirm('Are you sure?')"
                        class="btn" style="color: #C70039;"><i class="fas fa-fw fa-trash"></i></button>
                    </form>  
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endsection


