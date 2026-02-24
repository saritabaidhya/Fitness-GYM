@extends('layouts.frontEnd.layout')

@section('content')
    @include('layouts.frontEnd.header')
    <main class="main home-3">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ asset('frontEnd/img/breadcrumb/breadcrumb.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Personal Trainings</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Personal Trainings</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

      

    <!-- service area -->
    <div class="service-area pt-120 mt-30">
        <div class="container-fluid">
            
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
                                    <a href="{{ route('training.show',$utility->slug) }}">{{ $utility->name }}</a>
                                </h3>
                                <p class="service-text">
                                    {!! $utility->highlights !!}
                                </p>
                                <div class="service-arrow">
                                    <a href="{{ route('training.show',$utility->slug) }}" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service area end -->
    </main>

    @include('layouts.frontEnd.footer')
@endsection