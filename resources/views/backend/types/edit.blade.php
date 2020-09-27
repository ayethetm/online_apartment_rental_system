@extends('backendtemplate')

@section('title','Edit Type')

@section('content')

	<div class="container">
		<h2 class="pb-4 text-left"> Edit Type </h2>

		{{-- Must show related input errors --}}

		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form action="{{route('types.update',$type->id)}}" 
			method="post">
			@csrf
			@method('PUT')
			
			<div class="form-group row {{ $errors->has('typeName') ? 'has-error' : '' }}">
				<h2 class="col-sm-2 col-form-label ml-3">Enter New Type Name</h2>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="inputName" name="name" value="{{$type->typeName}}">
					<span class="text-danger">{{ $errors->first('typeName') }}</span>
				</div>
				<div class="col-sm-2">
					<input type="submit" name="btnsubmit" 
		                      value="Update" class="btn btn-block text-white" style="background-color: #EA6B6F;
		                      color: white;">   
				</div>
			</div>
			<!-- <div class="form-group row">
				<div class="col-sm-5">
					<input type="submit" name="btnsubmit" 
		                      value="Update" class="btn btn-block text-white" style="background-color: #EA6B6F;
		                      color: white;">   
				</div>
			</div> -->
		</form>
	</div>

@endsection