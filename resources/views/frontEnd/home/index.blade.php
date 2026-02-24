@extends('layouts.frontEnd.layout')

@section('content')
@include('layouts.frontEnd.header')



<main class="main home-3">

    <!-- hero area -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme ">
            @foreach($sliders as $slider)
            <div class="hero-single" style="background-image: url({{ asset('storage/images/'.$slider->path) }})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                                    data-wow-duration="1s" data-wow-delay=".25s">{{ $slider->name }}</h6>
                                <h1 class="hero-title wow animate__animated animate__fadeInUp"
                                    data-wow-duration="1s" data-wow-delay=".50s">
                                    {!! html_entity_decode($slider->detail) !!}
                                </h1>
                                <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".75s">
                                    {!! $slider->minidetail !!}
                                </p>
                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="1s">
                                    <a href="contact.html" class="theme-btn">Explore More !<i
                                            class="far fa-arrow-right"></i></a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
        <div class="hero-social-wrapper">
            <div class="hero-social">
                <div class="hero-social-link">
                    <a href="{{ $settings->first()->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $settings->first()->youtube }}"><i class="fab fa-youtube"></i></a>
                    <a href="{{ $settings->first()->instagram }}"><i class="fab fa-instagram"></i></a>
                    
                    <h6>Follow Us</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->

    <!-- feature area -->
    <div class="feature-area py-120">
        <div class="container">
            <div class="row g-0">
                @foreach($features as $index=>$feature)
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item {{ $index === 1 ? 'active' : '' }}">
                        <div class="feature-icon">
                            <i class="{{ $feature->icon }}"></i>
                        </div>
                        <div class="feature-content">
                            <h4>{{ $feature->name }}</h4>
                            <p>{{$feature->detail}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- feature area end -->




    <!-- about area -->
    @foreach ($stories as $story)
    <div class="about-area pt-120 pb-120 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="about-img">
                            <img src="{{ asset('storage/images/'. $story->path) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">About Us</span>
                            <h2 class="site-title text-white">We Are Ready <span>To Making You Different</span> From Others
                            </h2>

                        </div>
                        <p class="about-text">{!! $story->detail !!}</p>
                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                @foreach ($story->features as $highlight)
                                    <li>
                                        <div class="icon"><i class="{{ $highlight['entity'] }}"></i></div>
                                        <div class="text">
                                            <h4 class="text-white">{{ $highlight['title'] }}</h4>
                                            <p>{{ $highlight['detail'] }}</p>
                                        </div>
                                    </li>
                                @endforeach                                
                                
                            </ul>
                        </div>
                        <a href="about.html" class="theme-btn">Discover More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach    
    <!-- about area end -->



    <!-- service area -->
    <div class="service-area pb-120  pt-120 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Fitness Classes</span>
                        <h2 class="site-title text-white">Fitness Classes That Tailored For You</h2>
                        <div class="heading-divider"></div>
                        <p class="text-white">
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($utilities as $utility)
                    <div class="col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('storage/images/'. $utility->path) }}" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="{{ $utility->icon }}"></i>
                                </div>
                                <h3 class="service-title">
                                    <a href="#">{{ $utility->name }}</a>
                                </h3>
                                <p class="service-text">
                                    {!! $utility->highlights !!}
                                </p>
                                <div class="service-arrow">
                                    <a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service area end -->


    <!-- gallery area -->
    <div class="gallery-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Gallery</span>
                        <h2 class="site-title text-white">Photo Gallery</h2>
                        <div class="heading-divider"></div>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row popup-gallery" data-masonry='{"percentPosition": true }'>

                <!-- @foreach ($medias as $media)
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="{{ asset('storage/images/'. $media->path) }}" alt="">
                        <a class="popup-img" href="{{ asset('storage/images/'. $media->path) }}"><i class="far fa-plus"></i></a>
                        <div class="gallery-info">
                            <h4><a href="#">{{ $media->title }}</a></h4>
                            <span>{{ $media->title }}</span>
                        </div>
                    </div>
                </div>
                @endforeach -->


                @foreach ($studios as $studio)
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="{{ asset('storage/images/'. $studio->path) }}" alt="">
                        <a class="popup-img" href="{{ asset('storage/images/'. $studio->path) }}"><i class="far fa-plus"></i></a>
                        <div class="gallery-info">
                            <h4><a href="#">{{ $studio->title }}</a></h4>
                            <span>{{ $studio->title }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
    <!-- gallery area end -->

    <!-- team-area -->
    <div class="team-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Team</span>
                        <h2 class="site-title text-white">Meet Expert Trainers</h2>
                        <div class="heading-divider"></div>
                        <p class="text-white">
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($squads as $squad)
                <div class="col-md-6 col-lg-4">
                    <div class="team-item">
                        <img src="{{ asset('storage/images/'.$squad->path) }}" alt="thumb">
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">{{ $squad->name }}</a></h5>
                                <span>{!! $squad->detail !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
    <!-- team-area end -->


    <!-- testimonial-area -->
    <div class="testimonial-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Testimonials</span>
                        <h2 class="site-title text-white">Count On Us As They Do</h2>
                        <div class="heading-divider"></div>
                        <p class="text-white">
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout.
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                @foreach ($reviews as $testimonial)
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                        <p>
                           {!! $testimonial->detail !!}
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('storage/images/'.$testimonial->path) }}" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>{{ $testimonial->name }}</h4>
                            <p>Customer</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
               
            </div>
        </div>
    </div>
    <!-- testimonial-area end -->
    
    <!-- cta area -->
    <div class="cta-area">
        <div class="container">
            <div class="cta-content">
                <h2>Join our Monthly Membership</h2>
                <h6>We Are More Effective To Making Different Yourself From Others</h6>
                <a href="#" class="theme-btn" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Join Us Now <i class="far fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <!-- cta area end -->


    <!--  Large modal example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">  
                    <h2 class="text-light" id="myLargeModalLabel">Membership Plan
                    </h2>  
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               
                <div class="modal-body pt-0">                                 

                    <p>It is a long established fact that a reader will be distracted by the readable. </p>
                    <div class="contact-form p-0 mt-5">                                        
                        <form method="post" action="{{ route('memberships.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Your Phone" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <select name="category" id="selectedMembership" class="form-select form-control">
                                        @foreach ($packages as $package)
                                        <option value="{{ $package->name }}">{{ $package->name }}</option>                                                            
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <textarea name="detail" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                            </div>
                            <button type="submit" class="theme-btn"> <i class="far fa-paper-plane"></i> Send
                                Message</button>
                           
                        </form>     
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->     
 </main>


@include('layouts.frontEnd.footer')
@endsection