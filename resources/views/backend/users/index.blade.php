@extends('backendtemplate')
@section('title','Users')

@section('content')

<div class="container">
  <div class="row my-3">
	 <div class="col-md-12">
            <h3 class="mb-3">Users Table</h3>
    	       <table class="table table-bordered shadow" style="width:100%;height: 100px;">
                <thead style="background-color: #EA6B6F;color: white;">
                  <tr>
                    <th scope="col" width="50px">No</th>

                    <th scope="col">Name</th>

                    <th scope="col" width="150px">Profile</th>

                    <th scope="col" width="300px">Address</th>

                    <th scope="col" width="300px">Email</th>
          
                    <th scope="col" colspan="2">Registered Date
                    </th>

                    
                  </tr>
                </thead>
                <tbody>
      	      @foreach($users as $user)
                <tr>
                  <td>{{$loop->index + 1}}.</td>
                  <td>{{$user->name}}</td>
                  <td><img src="{{asset($user->profile)}}" class="img-fluid"></td>
                  <td>{{$user->address}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at}}</td>
                </tr>
                
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endsection


