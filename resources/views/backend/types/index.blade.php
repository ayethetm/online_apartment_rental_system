@extends('backendtemplate')
@section('title','Types')

@section('content')

<!-- start add new township modal -->
 <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">
          Add New Type</h3>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
           <form method="post" 
           action="{{route('types.store')}}" enctype="multipart/form-data">
          @csrf
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <input type="text" class="form-control form-control-user" id="inputName" placeholder="Enter Type Name" name="name">
                    </div>
                    <div class="col-sm-4">
                    <input type="submit" name="btnsubmit" 
                    value="Add" class="btn btn-block text-white" style="background-color: #EA6B6F;">   
                    </div>
                  </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

<div class="container">
  <div class="row my-3">
   <div class="col-md-12 ">
    <h3>Type Table</h3>
           <a  href="#" data-target="#addModal" 
           data-toggle="modal" class="btn float-right btn-sm mb-3" style="background-color:#E26241;color: white;">
             <i class="fas fa-fw fa-plus"></i>
             New
           </a>

             <table class="table table-bordered shadow">
                <thead style="background-color: #EA6B6F;color: white;" >
                  <tr>
                    <th scope="col">No</th>
          
                    <th scope="col" width="700px">Building Type</th>
          
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
               @foreach($types as $type)
                <tr>
                  <input type="hidden" name="" value="{{$type->id}}" class="ser_del"> 
                  <td>{{$loop->index + 1 }}.</td>
                  <td>{{$type->typeName}}</td>
                  <td>
                     <a href="{{route('types.edit',$type->id)}}" class="btn" style="color: #0A97B0;">
                       <i class="fas fa-fw fa-edit"></i>
                     </a>
                     <form method="post" 
                     action="{{route('types.destroy',$type->id)}}" 
                      class="d-inline-block" >
                      @csrf
                      {{method_field('DELETE')}}
                       <button  type="submit"
                        onclick="return confirm('Are you sure?')"
                        class="btn" style="color: #C70039;">
                        <i class="fas fa-fw fa-trash"></i></button>
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

