@extends('layouts.superAdmin.layout')

@section('content')
<div class="page-sign d-block py-0">

    <div class="row g-0">
      <div class="col-md-7 col-lg-5 col-xl-4 col-wrapper">
        <div class="card card-sign">
          <div class="card-header">
            <a href="../index.html" class="header-logo mb-5">{{$settings->first()->name}}</a>
            <h3 class="card-title">Sign Up</h3>
            <p class="card-text">It's free to signup and only takes a minute.</p>
          </div><!-- card-header -->
          <div class="card-body">
            <form action="{{ route('register.custom') }}" method="POST">
                @csrf
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" placeholder="Enter your email address">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="mb-3">
              <label class="form-label">Full name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter your full name">
            </div>
            <div class="mb-4">
              <small>By clicking <strong>Create Account</strong> below, you agree to our terms of service and privacy statement.</small>
            </div>
            
             <div class="mt-3">
                     <button type="submit" class="btn btn-primary" id="saveChangesBtn">Create Account</button>
                     <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                         <span class="visually-hidden">Loading...</span>
                     </div>
                 </div>

            </form>
          </div><!-- card-body -->
          <div class="card-footer">
            Already have an account? <a href="/login">Sign In</a>
          </div><!-- card-footer -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col d-none d-lg-block"><img src="{{ asset('superAdmin/img/bg1.jpg') }}" class="auth-img" alt=""></div>
    </div><!-- row -->

</div>

@endsection
