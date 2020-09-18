@extends('backendtemplate')
@section('title','Edit Township Page')

@section('content')

<div class="container-fluid">

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
		<div class="modal fade" id="editModal" tabindex="-1" 
		role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h3 class="modal-title text-dark" id="exampleModalLabel" 
		          >
		          Edit Township</h3>
		          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">×</span>
		          </button>
		        </div>
		        <div class="modal-body">
		           <form method="post" action="{{route('townships.update',$township->id)}}" >
		           	@csrf
					@method('PUT')
		             <div class="form-group row">
		                  <div class="col-sm-8">
		                    <input type="text" class="form-control"  
		                    name="name" value="{{$township->name}}">
		                  </div>
		                  <div class="col-sm-4">
		                    <input type="submit" name="btnsubmit" 
		                      value="Save" class="btn btn-block text-white" style="background-color: #EA6B6F;
		                      color: white;">   
		                  </div>
		            </div>
		          </form>
		        </div>
		      </div>
		    </div>
		</div>
</div>

@endsection


@section('script')

<script type="text/javascript">

  $(document).ready(function () {

  	$("#editModal").modal('show');

  });
</script>
@endsection
