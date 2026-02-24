@extends('layouts\frontEnd\layout')

@section('content')
    @include('layouts\frontEnd\header')
    <main class="main home-3">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ 'frontEnd/img/breadcrumb/breadcrumb.jpg' }})">
            <div class="container">
                <h2 class="breadcrumb-title">Why Zenith Fitness</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Why Zenith Fitness</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

         <!-- about area -->
        @foreach ($stories as $story)
        <div class="about-area pb-120 pt-120">
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
                                <span class="site-title-tagline">Why  Zenith Fitness</span>
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
       
        
    </main>

    @include('layouts\frontEnd\footer')
@endsection