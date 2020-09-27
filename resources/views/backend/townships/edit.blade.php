@extends('backendtemplate')

@section('title','Edit Township')

@section('content')

	<div class="container">
		<h2 class="pb-4"> Edit Township </h2>

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
		<form action="{{route('townships.update',$township->id)}}" 
			method="post">
			@csrf
			@method('PUT')
			<div class="form-group row {{ $errors->has('townshipName') ? 'has-error' : '' }}">
				<label for="inputName" class="col-sm-2 col-form-label ml-5">Enter Township Name</label>
				<div class="col-sm-4 ">
					<input type="text" class="form-control" id="inputName" name="name" value="{{$township->townshipName}}">
					<span class="text-danger">{{ $errors->first('townshipName') }}</span>
				</div>
				<div class="col-sm-2">
					<input type="submit" name="btnsubmit" 
		                      value="Update" class="btn btn-block text-white" style="background-color: #EA6B6F;
		                      color: white;">   
				</div>
			</div>
		</form>
	</div>

@endsection