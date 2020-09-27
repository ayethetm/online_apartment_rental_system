@extends('frontendtemplate')

@section('title','Post Edit')

@section('content')

	<div class="container">
		<h2 class="pb-4">Post Edit Form</h2>

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
		<form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row {{ $errors->has('title') ? 'has-error' : '' }}">
				<label for="title" class="col-sm-2 col-form-label">Code No</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
					<span class="text-danger">{{ $errors->first('title') }}</span>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-5">
					<input type="file" id="photo" name="photo">
					<img src="{{asset($post->photo)}}" width="100">
				</div>
			</div>
			<div class="form-group row {{ $errors->has('monthly_fees') ? 'has-error' : '' }}">
				<label for="monthly_fees" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="monthly_fees" name="monthly_fees" value="{{$post->monthly_fees}}">
					<span class="text-danger">{{ $errors->first('monthly_fees') }}</span>
				</div>
			</div>
			<div class="form-group row {{ $errors->has('length') ? 'has-error' : '' }}">
				<label for="length" class="col-sm-2 col-form-label">Length</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="length" name="length" value="{{$post->length}}">
					<span class="text-danger">{{ $errors->first('length') }}</span>
				</div>
			</div>
			<div class="form-group row {{ $errors->has('width') ? 'has-error' : '' }}">
				<label for="length" class="col-sm-2 col-form-label">Width</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="width" name="width" value="{{$post->width}}">
					<span class="text-danger">{{ $errors->first('width') }}</span>
				</div>
			</div>
			<div class="form-group row {{ $errors->has('bedrooms') ? 'has-error' : '' }}">
				<label for="bedrooms" class="col-sm-2 col-form-label">Bedrooms</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="bedrooms" name="bedrooms" value="{{$post->bedrooms}}">
					<span class="text-danger">{{ $errors->first('bedrooms') }}</span>
				</div>
			</div>
			<div class="form-group row {{ $errors->has('bathrooms') ? 'has-error' : '' }}">
				<label for="bathrooms" class="col-sm-2 col-form-label">Bathrooms</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="bathrooms" name="bathrooms" value="{{$post->bathrooms}}">
					<span class="text-danger">{{ $errors->first('bathrooms') }}</span>
				</div>
			</div>
			<div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
				<label for="description" class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-5">
					<textarea id="description" class="form-control" name="description">{{$post->description}}</textarea>
					<span class="text-danger">{{ $errors->first('description') }}</span>
				</div>
			</div>
			<div class="form-group row {{ $errors->has('type') ? 'has-error' : '' }}">
				<label for="type" class="col-sm-2 col-form-label">Type</label>
				<div class="col-sm-5">
					<select class="form-control form-control-md" id="type" name="type">
						<optgroup label="Choose Type">
							@foreach($types as $type)
								<option value="{{$type->id}}" @if($type->id == $post->type_id){{'selected'}} @endif>{{$type->typeName}}</option>
							@endforeach	
						</optgroup>
					</select>
					<span class="text-danger">{{ $errors->first('type') }}</span>
				</div>
			</div>
			<div class="form-group row {{ $errors->has('township') ? 'has-error' : '' }}">
				<label for="township" class="col-sm-2 col-form-label">Township</label>
				<div class="col-sm-5">
					<select class="form-control form-control-md" id="township" name="township">
						<optgroup label="Choose Township">
							@foreach($townships as $township)
								<option value="{{$township->id}}" @if($township->id == $post->township_id){{'selected'}} @endif>{{$township->townshipName}}</option>
							@endforeach	
						</optgroup>
					</select>
					<span class="text-danger">{{ $errors->first('township') }}</span>
				</div>
			</div>
			
			
			<div class="form-group row">
				<div class="col-sm-5">
					<input type="submit" class="btn btn-primary" name="btnsubmit" value="Update">
				</div>
			</div>
		</form>
	</div>

@endsection