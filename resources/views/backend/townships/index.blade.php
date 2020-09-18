@extends('backendtemplate')
@section('title','Township')

@section('content')

<!-- start add new township modal -->
 <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-dark" id="exampleModalLabel" >
          Add New Township</h3>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
           <form method="post" 
           action="{{route('townships.store')}}">
          @csrf
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <input type="text" class="form-control form-control-user" id="inputName" name="name"placeholder="Enter Township Name">
                    </div>
                    <div class="col-sm-4">
                    <input type="submit" name="btnsubmit" 
                    value="Add" class="btn btn-block text-white" style="background-color: #EA6B6F;color: white;">   
                    </div>
                  </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

  <!-- start edit township modal -->
 <!-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel" 
           style="color: white;">
          Edit Township</h3>
          
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
       
           <form method="post"  
            >
              {{method_field('patch')}}
              {{csrf_field()}}
              <div class="modal-body">
                <input type="hidden" name="name" id="id" value="">
             <div class="form-group row">
                  <div class="col-sm-8">
                    <input type="text" class="form-control name"  
                    name="name" >
                  </div>
                  <div class="col-sm-4">
                    <input type="submit" name="btnsubmit" 
                      value="Save" id="btnEdit" class="btn btn-block text-white" style="background-color: #EA6B6F;">   
                  </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div> -->
  <!-- end modal -->

<div class="container">
  <div class="row my-3">
	 <div class="col-md-12">
    	     <a  href="#" data-target="#addModal" 
           data-toggle="modal" class="btn float-right btn-sm mb-3" 
           style="background-color:#E26241;color: white;">
             <i class="fas fa-fw fa-plus"></i>
             New
           </a>
    	       <table class="table table-bordered shadow" style="width:100%">
                <thead style="background-color: #EA6B6F;color: white;">
                  <tr>
                    <th scope="col">No</th>
          
                    <th scope="col" width="700px">Township</th>
          
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
      	      @foreach($townships as $township)
                <tr>
                  <input type="hidden" name="townshipid" value="{{$township->id}}" class="ser_del"> 
                  <td>{{$loop->index + 1 }}.</td>
                  <td>{{$township->name}}</td>
                  <td>
                    <a href="{{route('townships.edit',$township->id)}}" class="btn "  style="color: #0A97B0;">
                      <i class="fas fa-fw fa-edit"></i>
                    </a>
                   <!--  <a  class="btn btn-warning editBtn" 
                    data-id="{{$township->id}}" 
                    data-name="{{$township->name}}"
                    data-target="#editModal" 
                    data-toggle="modal">
                      <i class="fas fa-fw fa-pen"></i>
                    </a> -->
                    <!-- <button class="btn btn-fill btn-warning btnConfirmEdit" 
                    type="submit" >
                      <i class="fas fa-fw fa-pen"></i>
                    </button> -->
                     <form method="post" 
                     action="{{route('townships.destroy',$township->id)}}" 
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
       <div class="d-flex justify-content-center pg">
            {!! $townships->links() !!}
        </div>
    </div>
@endsection

<!-- <script type="text/javascript">

 
   $("#editModal").on('show.bs.modal',function(event){

    var button= $(event.relatedTarget)// button that triggered the modal
    var id= button.data('id')
    var name=button.data('name')
    var modal=$(this)
    modal.find('.modal-body id').val(id);
    modal.find('.modal-body name').val(name);

     $('form').attr('action', "townships/" + id);
});

