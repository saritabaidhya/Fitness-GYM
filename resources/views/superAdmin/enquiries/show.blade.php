@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/utilities">Membership Enquiry</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$enquiry->name}}</li>
                </ol>
                <h4 class="main-title mb-0">Membership Enquiry</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">View Membership Enquiry</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('enquiries.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    <div class="video-headline">
                        <img src="{{ asset('storage/app/public/images/' . $enquiry->path) }}" alt="...">
                       
                      </div>
                      <div class="mt-3">
                        <h5 class="card-title">{{$enquiry->name}}</h5>
                        <h6 class="card-title">Email:{{$enquiry->email}}</h6>
                        <h6 class="card-title">Phone:{{$enquiry->phone}}</h6>
                        <h6 class="card-title">Category:{{$enquiry->category}}</h6>
                        <h6 class="card-title">Details:{!! $enquiry->detail !!}</h6>
                        <p class="d-flex gap-3 fs-sm text-secondary"><span>{{$enquiry->created_at}}</span><span>3 months ago</span></p>
                      </div>
                </div><!-- card-body -->
            </div><!-- card -->

        </div><!-- row -->
        @include('layouts.superAdmin.footer')

    @endsection
