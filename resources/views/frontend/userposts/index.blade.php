@extends('frontendtemplate')
@section('title','My Posts')

@section('content')

<div class="container spad">
  <div class="row my-5">
	 <div class="col-md-12">
            <!-- <h2>Total:{{count($posts)}}</h2> -->
    	       <table class="table table-bordered shadow" style="width:100%;height: 100px;">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" width="50px">No</th>
          
                    <th scope="col" width="200px">Title</th>

                    <th scope="col" width="150px">Photo</th>

                    <th scope="col" width="100px">Price</th>

                    <th scope="col" width="100px">Area </th>
          
                    <th scope="col" width="150px">Date</th>

                    <th scope="col">Privacy</th>

                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
      	      @foreach($posts as $post)
                <tr>
                  
                  <td>{{$loop->index + 1 }}.</td>
                  <td>{{$post->title}}</td>
                  <td><img src="{{asset($post->photo)}}" 
                      class="img-fluid"></td>
                  <td>{{$post->monthly_fees}} MMK
                  </td>
                  <td>{{$post->width}}  x  {{$post->length}} </td>
                  <td>{{$post->updated_at}}
                  </td>
                  <td>
                    @if($post->status == 0 )
                    <span class="badge badge-info">Public</span>
                    @else
                    <span class="badge badge-warning">Only Me</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{route('posts.show',$post->id)}}" 
                      class="btn" style="color:#0A97B0;">
                      <i class="fas fa-fw fa-eye"></i>
                    </a>
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


