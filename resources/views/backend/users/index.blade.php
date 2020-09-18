@extends('backendtemplate')
@section('title','Users')

@section('content')

<div class="container">
  <div class="row my-3">
	 <div class="col-md-12">
            <h2>Total:{{count($users)}}</h2>
    	       <table class="table table-bordered shadow" style="width:100%;height: 100px;">
                <thead style="background-color: #EA6B6F;color: white;">
                  <tr>
                    <th scope="col" width="50px">No</th>
          
                    <th scope="col" width="200px">Name</th>

                    <th scope="col" width="150px">Profile</th>

                    <th scope="col">Phone Number</th>
          
                    <th scope="col">Address</th>

                    <th scope="col">Email</th>
          
                    <th scope="col">Created At</th>
                  </tr>
                </thead>
                <tbody>
      	      @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}.</td>
                  <td>{{$user->name}}</td>
                  <td><img src="{{asset($user->profile)}}" class="img-fluid"></td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->address}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at->diffForHumans()}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endsection


