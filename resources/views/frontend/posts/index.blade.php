@extends('frontendtemplate')

@section('title','Home Page')

@section('content')


<!-- carousel section starts-->
<div class="container-fluid">
    <div class="carousel slide" data-ride="carousel" id="myCarousel">
        <div class="carousel-inner">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" 
                class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1">
                </li>
            </ol>
            <div class="carousel-item active">
                <img src="{{asset('frontendtemplate/img/banner3.jpg')}}" class="img-fluid" style="width:100%;height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="{{asset('frontendtemplate/img/banner1.jpg')}}"  class="img-fluid" style="width:100%;height: 500px;">
            </div>
        </div>
    </div>
</div>
<!-- carousel section ends -->

<!-- posts section  starts-->

    <div class="container mt-5">
       
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-3 mb-3">
                    <div class="card h-100 shadow">
                                <img src="{{asset($post->photo)}}"
                                    alt="" class="d-block w-100 h-75">
                        <div class="card-body">
                            <p class="card-text text-info">{{$post->title}}</p>
                            <br>
                            <button class="btn btn-warning rounded-circle btn-sm"> 
                                <i class="fas fa-fw fa-shower 
                                text-white"></i>
                            </button>
                                {{$post->bathrooms}}
                            <button class="btn btn-warning rounded-circle btn-sm ml-3"> <i class="fas fa-fw fa-bed text-white"></i>
                            </button>
                                {{$post->bedrooms}}
                            
                            <p class="text-info">{{$post->monthly_fees}}   
                            သိန်း(ကျပ်) (တစ်လ)</p> 

                        </div>  
                        <div class="card-footer">
                            <button class="btn btn-sm btn-warning" style="margin-left: 33px;" >
                                <a href="{{route('posts.show',$post->id)}}">
                                    <p class="text-white">အသေးစိတ်ကြည့်ပါ</p>
                                </a>
                            </button>
                                <!--  -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div> 
    </div>           
@endsection
