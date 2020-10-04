@extends('frontendtemplate')

@section('title','Post Create Page')

@section('content')



	<div class="container spad">
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
        		<div class="card o-hidden border-0 shadow-lg 
        		my-3">
        			<div class="card-body p-0">
        				<div class="row">
	        				<div class="col-md-12">
								<h3 class="text-gray-900 mb-4 
								text-center my-5">Post Your Property</h3>

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
		<form action="{{route('posts.store')}}" method="post" 
		enctype="multipart/form-data">
		@csrf
			<div class="form-group row{{ $errors->has('title') ? 'has-error' : '' }}">
				<label for="title" class="col-sm-3 col-form-label ml-5">Title:
				</label>
					<div class="col-sm-6">
					<input type="text" class="form-control" id="title" name="title">
										<span class="text-danger">{{ $errors->first('title') }}</span>
										</div>
									</div>
									<div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
										<label for="inputPhoto" class="col-sm-3 col-form-label ml-5">Photo:</label>
										<div class="col-sm-6">
											<input type="file" id="photo" name="photo" 
											class="d-block">
											<span class="text-danger">{{ $errors->first('photo') }}
											</span>
										</div>
									</div>
									<div class="form-group row {{ $errors->has('monthly_fees') ? 'has-error' : '' }}">
										<label for="monthly_fees" class="col-sm-3 col-form-label ml-5">Monthly Price:</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" id="monthly_fees" name="monthly_fees">
											<span class="text-danger">{{ $errors->first('monthly_fees') }}</span>
										</div>
									</div>
									<div class="form-group row {{ $errors->has('width') ? 'has-error' : '' }}">
										<label for="width" class="col-sm-3 ml-5 col-form-label">Width:
										</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" id="width" name="width" value="0">
											<span class="text-danger">{{ $errors->first('width') }}</span>
										</div>
									</div>
									<div class="form-group row {{ $errors->has('length') ? 'has-error' : '' }}">
										<label for="length" class="col-sm-3 ml-5 col-form-label">Length:
										</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" id="length" name="length" value="0">
											<span class="text-danger">{{ $errors->first('width') }}</span>
										</div>
									</div>
									<div class="form-group row {{ $errors->has('bedrooms') ? 'has-error' : '' }}">
										<label for="length" class="col-sm-3 col-form-label ml-5">Bedroom:
										</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" id="bedrooms" name="bedrooms" value="0">
											<span class="text-danger">{{ $errors->first('bedrooms') }}</span>
										</div>
									</div>
									<div class="form-group row {{ $errors->has('bathrooms') ? 'has-error' : '' }}">
										<label for="length" class="col-sm-3 col-form-label ml-5">Bathroom:
										</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" id="bathrooms" name="bathrooms" value="0">
											<span class="text-danger">{{ $errors->first('bathrooms') }}</span>
										</div>
									</div>
									<div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
										<label for="description" class="col-sm-3 col-form-label ml-5">Description:</label>
										<div class="col-sm-6">
											<textarea id="description" class="form-control" name="description"></textarea>
											<span class="text-danger">
												{{ $errors->first('description') }}</span>
										</div>
									</div>
									<div class="form-group row {{ $errors->has('type') ? 'has-error' : '' }}">
										<label for="type" class="col-sm-3 col-form-label ml-5">Type:</label>
										<div class="col-sm-6">
											<select class="form-control form-control-md" id="type" name="type">
												<optgroup label="Choose Type">
													@foreach($types as $type)
														<option value="{{$type->id}}">{{$type->typeName}}</option>
													@endforeach	
												</optgroup>
											</select>
											<span class="text-danger">{{ $errors->first('type') }}
											</span>
										</div>
									</div>
									<div class="form-group row {{ $errors->has('township') ? 'has-error' : '' }}">
										<label for="township" class="col-sm-3 col-form-label ml-5">Location:</label>
										<div class="col-sm-6">
											<select class="form-control form-control-md" id="township" name="township">
												<optgroup label="Choose Township">
													@foreach($townships as $township)
														<option value="{{$township->id}}">{{$township->townshipName}}</option>
													@endforeach	
												</optgroup>
											</select>
											<span class="text-danger">
												{{ $errors->first('township') }}</span>
										</div>
									</div>
									
									<div class="form-group row">
			                            <label for="township" class="col-sm-3 col-form-label ml-5">Choose Privacy:
			                            </label>
										
			 
			                            <div class="col-sm-6">
			                                <select id="status"class="form-control @error('status') is-invalid @enderror"
			                                name="status">
			                                    <option value="0">Public</option>
			                                    <option value="1">Only Me</option>
			                                </select>
			                                 @error('status')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
			                            </div>
			                        </div>
									
									<div class="form-group row my-3">
										<div class="col-sm-6 ">
											<input type="submit" class="btn btn-block offset-8 font-weight-bold" name="btnsubmit" value="Post" style="background-color:#FF6A01;">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@guest
        <div class="container">
              
			  <p>If you don't have an account, you can create one.</p>
			  <a class="nav-link" href="{{ route('register') }}">
             {{ __('Login') }}</a>
                                  
    @endguest



@endsection


