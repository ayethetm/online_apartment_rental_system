@extends('backendtemplate')
@section('title','Agencies')

@section('content')

<div class="container">
  <div class="row my-3">
    <h3 class="mb-3">Agencies Table</h3>
     <div class="col-md-3 mt-3 ml-auto">
      <form action="/search" method="get">
        <div class="input-group">
          <input type="search" name="search" class="form-control">
          <span class="input-group-prepand">
            <button type="submit" class="btn" style="background-color:#E26241;color: white;">Search</button>
          </span>
        </div>
        
      </form>
    </div>
  </div>
  <div class="row my-3">
	 <div class="col-md-12">
            
    	       <table class="table table-bordered shadow" style="width:100%;height: 100px;">
                <thead style="background-color: #EA6B6F;color: white;">
                  <tr>
                    <th scope="col" width="50px">No</th>

                    <th scope="col" width="300px">Name</th>

                    <th scope="col" width="150px">Profile</th>

                    <th scope="col" width="250px">Address</th>

                    <th scope="col" width="150px">Email</th>
          
                    <th scope="col">Registered Date</th>

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


