@extends('frontendtemplate')

@section('title','Mondy | Real Estate - Home Page')

@section('content')

    <!-- Hero Section end -->
    <section class="hero-section set-bg" data-setbg="{{asset('frontendtemplate/img/hero-bg.jpg')}}">

        <div class="container">
            <!-- <div class="hero-warp"> -->
                <h1 class="text-white">Find your next property with Mondy </h1>
                <!-- <form class="main-search-form">
                    <div class="search-type">
                        <div class="st-item">
                            <input type="radio" name="st" id="buy" checked>
                            <label for="buy">Buy</label>
                        </div>
                        <div class="st-item">
                            <input type="radio" name="st" id="rent">
                            <label for="rent">Rent</label>
                        </div>
                        <div class="st-item">
                            <input type="radio" name="st" id="sell">
                            <label for="sell">Sell</label>
                        </div>
                        <div class="st-item">
                            <input type="radio" name="st" id="property">
                            <label for="property">Property Value</label>
                        </div>
                        <div class="st-item">
                            <input type="radio" name="st" id="agents">
                            <label for="agents">Agents</label>
                        </div>                                                           
                    </div>
                    <div class="search-input">
                        <input type="text" placeholder="Search by state, postcode or suburb">
                        <button class="site-btn">Search</button>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                </form> -->
            <!-- </div> -->
        </div>
    </section>
    <!-- Hero Section end -->

    <!-- Property Section -->
    <section class="property-section">
        <div class="container mt-5">
            <div class="section-title">
                <h2>Recently Add Properties</h2>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4 shadow mb-3">

                    <div class="property-item">
                        <div class="pi-image">
                            <img src="{{asset($post->photo)}}" alt="">
                        </div>
                        <h5>{{$post->monthly_fees}} (ကျပ်) (တစ်လ)
                        </h5>
                        <button class="btn  rounded-circle btn-sm" style="background-color: #FF6A01;"> 
                                <i class="fas fa-fw fa-shower 
                                text-white" ></i>
                            </button>
                                {{$post->bathrooms}}
                            <button class="btn  rounded-circle btn-sm ml-3" style="background-color: #FF6A01;"> <i class="fas fa-fw fa-bed text-white"></i>
                            </button>
                                {{$post->bedrooms}}
                            <br><br>
                        <p>{{$post->title}}</p>
                        <a href="{{route('posts.show',$post->id)}}" class="text-info">See Detail >></a>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>
    <!-- Property Section end -->

    <!-- Intro Section end -->
    <section class="intro-section spad">
        <div class="container">
            <div class="section-title">
                <h2>With you every step of the way</h2>
            </div>
            <div class="row intro-first">
                <div class="col-lg-6 order-lg-2">
                    <img src="{{asset('frontendtemplate/img/post2.jpeg')}}" alt="">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="about-text">
                        <h3>Post your property and save time</h3>
                        <p>We have been an established name in the property market for over 120 years. Starting life in North London, we have grown considerably with branches right across the country. We understand the property market is complex and that’s why we’re different. We are there to help every step of the way. Whether you’re selling, letting, buying or renting, our extensive local knowledge and experience will make your move both straightforward and successful.</p>
                        <a href="#" class="readmore-btn">Find out more</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('frontendtemplate/img/post1.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 ">
                    <div class="about-text">
                        <h3>Find your next house with Mondy</h3>
                        <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus.</p>
                        <a href="#" class="readmore-btn">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Section end -->


<!-- Loan Section end -->
    <section class="loan-section">
        <div class="loan-warp">
            <div class="container">
                <div class="section-title text-white">
                    <h3>Send your feedback to our team</h3>
                    <p>If you have any feedback, you can freely send to our team with your email address.Thank you. </p>
                </div>
                <form class="loan-form">
                    <input type="text" placeholder="Your Email">
                    <input type="text" placeholder="Feedback">
                    <button class="site-btn">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Loan Section end -->

    <!-- Stories Section end -->
    <section class="stories-section spad">
        <div class="container">
            <div class="row ">
                <div class="col-lg-5 order-lg-2">
                    <img class="w-100" src="{{asset('frontendtemplate/img/post3.jpeg')}}" alt="">
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="about-text">
                        <h3>Working with you to get where you went to be</h3>
                        <p>Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus. </p>
                        <a href="#" class="readmore-btn">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stories Section end -->


       
@endsection
