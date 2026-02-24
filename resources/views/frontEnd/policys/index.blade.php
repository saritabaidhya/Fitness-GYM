@extends('layouts\frontEnd\layout')

@section('content')
    @include('layouts\frontEnd\header')
    <main class="main home-3 ">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ 'frontEnd/img/breadcrumb/breadcrumb.jpg' }})">
            <div class="container">
                <h2 class="breadcrumb-title">Privacy Policy</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Privacy Policy</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

         <!-- privacy policy starts area -->
         <div class="py-120 privacypolicy">
            <div class="container">
                <div class="row">
                    @foreach ($policys as $policy)
                    <h2 class="text-light mb-4">Privacy Policy</h2>
                    <div class="col">
                        <div class="terms-content">
                            {!! $policy->detail !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- privacy policy-area end -->
       
        
    </main>

    @include('layouts\frontEnd\footer')
@endsection