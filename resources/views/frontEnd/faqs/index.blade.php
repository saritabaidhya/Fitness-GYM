@extends('layouts\frontEnd\layout')

@section('content')
    @include('layouts\frontEnd\header')
    <main class="main home-3 ">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ 'frontEnd/img/breadcrumb/breadcrumb.jpg' }})">
            <div class="container">
                <h2 class="breadcrumb-title">FAQS</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">FAQS</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

         <!-- faq area -->
         <div class="faq-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Faq's</span>
                                <h2 class="site-title my-3">General frequently asked questions</h2>
                            </div>
                            <p class="about-text">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. </p>
                            <a href="#" class="theme-btn mt-5">Ask Your Question <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>



                    


                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">



                            @foreach ($faqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="{{ $faq->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq->slug }}" aria-expanded="true" aria-controls="{{ $faq->id }}">
                                        <span><i class="far fa-question"></i></span> {{ $faq->name }}
                                    </button>
                                </h2>
                                <div id="{{ $faq->slug }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="{{ $faq->id }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $faq->detail !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach




                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-question"></i></span> Do I Need A Business Plan ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment, so
                                        blinded by desire.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="far fa-question"></i></span> How Long Should A Business Plan Be
                                        ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment, so
                                        blinded by desire.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span><i class="far fa-question"></i></span> What Payment Gateway You Support ?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment, so
                                        blinded by desire.
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial-area end -->
       
        
    </main>

    @include('layouts\frontEnd\footer')
@endsection