@extends('frontendtemplate')

@section('title','Post Detail')

@section('content')
	<div class="container">
		<div class="row mt-5 mb-3">
			<div class="col-md-12 card mb-3">
				<h4 class="card-header bg-white text-gray">
					{{$post->title}}
				</h4>
				<img src="{{asset($post->photo)}}" class="img-fluid w-100d-block mx-auto card-body">
			</div>
		</div>
		<div class="row ">
			<div class="col-md-12 card ">
				<div class="card-header bg-white row">
					<h5 class="col-md-10">
						 {{$post->created_at->diffForHumans()}} မှာကြော်ငြာတင်ခဲ့သည်
					</h5>
					<h5 class="col-md-2">
						ကြော်ငြာနံပါတ် S- {{$post->id}}
					</h5>
				</div>
				<div class="card-body bg-white">
						<div class="row">
							<div class="col-md-10">
								<button class="btn btn-warning rounded-circle btn-sm"> 
                                	<i class="fas fa-fw 
                                	fa-map-marker-alt text-white">
                                	</i> 
	                    		</button>
	                    		{{$post->township->townshipName}} | ရန်ကုန်တိုင်းဒေသကြီး
	                    		<br>
	                    		<button class="btn btn-warning rounded-circle btn-sm mt-2"> 
                                	<i class="fas fa-fw 
                                	fa-building text-white">
                                	</i> 
	                    		</button>
	                    		{{$post->type->typeName}}
	                    		<button class="btn btn-warning rounded-circle btn-sm ml-3"> 
                                	<i class="fas fa-fw 
                                	fa-shower text-white">
                                	</i> 
	                    		</button>
	                    		{{$post->bathrooms}} ခန်း
	                    		<button class="btn btn-warning rounded-circle btn-sm ml-3"> 
                                	<i class="fas fa-fw 
                                	fa-bed text-white">
                                	</i> 
	                    		</button>
	                    		{{$post->bedrooms >= 1 ? $post->bedrooms .'ခန်း' : 'မပါ'}} 
							</div>
							<div class="col-md-2">
								<p class="text-gray-dark 
								font-weight-bold">
									လစဉ်ငှားရမ်းခ
								</p>
								<p class="mt-2">
									{{$post->monthly_fees}} သိန်း(ကျပ်) 
									(တစ်လ)
                        		</p>
							</div>
						</div>
				</div>
				<div class="card-footer bg-white">
				  	<div class="row">
						<div class="col-md-8">
							<p>{{$post->description}}</p>
							<br>
							<p class="font-weight-bold">
								အကျယ်အဝန်း
							</p>
							<p>
								{{$post->width}} ပေ  x  {{$post->length}} ပေ
							</p>
							<br>
							<p class="font-weight-bold">
								အချက်အလက်များ
							</p>
		                    <i class="fas fa-fw fa-check-circle">
		                    </i>	
							အလုံးစုံ ပြင်ဆင်ပြီး
						</div>
						<!-- <div class="col-md-4">
							<img src="{{asset($post->user->profile)}}" 
							class="img-fluid w-50 d-block my-5 ml-auto">
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-12">
				<a href="#" data-target="#adownercontactModal" 
           		data-toggle="modal" class="btn btn-warning btn-block font-weight-bold " >
						<i class="fas fa-fw fa-phone-alt text-white">
			            </i> ကြော်ငြာပိုင်ရှင်သို့ဆက်သွယ်ရန်နှိပ်ပါ

			            <div class="modal fade" id="adownercontactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						    <div class="modal-dialog" role="document">
						      <div class="modal-content">
						        <div class="modal-header">
						          <h4 class="modal-title text-dark" id="exampleModalLabel" >
						          	ကြော်ငြာနံပါတ် {{$post->id}} အတွက် ဆက်သွယ်ရန် ဖုန်းနံပါတ်
						          </h4>
						          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
						            <span aria-hidden="true">×</span>
						          </button>
						        </div>
						        <div class="modal-body text-left">
						                <i class="fas fa-fw 
						                fa-phone-alt">
						                </i> 
							        {{$post->user->phone1}} , 
							        {{$post->user->phone2}}
							        <hr>
							        
							        <p>ကြော်ငြာနံပါတ် S- {{$post->id}}</p>
							        <p>{{$post->title}}</p>
						        </div>
						        <div class="modal-footer text-right">
						        	<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						            	<span aria-hidden="true">
						            		<button class="btn btn-warning text-white font-weight-bold">
						            			ပိတ်ရန်
						            		</button>
						            	</span>
						          </button>
						        </div>
						      </div>
						    </div>
				  		</div>
				</a>
			</div>
		</div>
	</div>				
@endsection

