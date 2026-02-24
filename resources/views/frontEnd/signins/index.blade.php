@extends('layouts.superAdmin.layout') @section('content')

<body class="page-sign d-block py-0">

<div class="row g-0">
  <div class="col d-none d-lg-block"><img src="{{ asset('superAdmin/img/bg1.jpg') }}" class="auth-img" alt=""></div>

  <div class="col-md-7 col-lg-5 col-xl-4 col-wrapper bg-dark">
    <div class="card card-sign bg-dark">
      <div class="card-header">
        <a href="../" class="header-logo mb-5">        
          <img src="{{ asset('frontEnd/img/logo/logo.png') }}" alt="logo" style="height: 50px">
        </a>
        <h3 class="card-title">Sign In</h3>
        <p class="card-text">Welcome back! Please signin to continue.</p>
      </div><!-- card-header -->
      <div class="card-body">

      <form method="POST" action="{{ route('signins.custom') }}">
          @csrf
          <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>

          <div class="mb-4">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                  <button type="button" class="input-group-text bg-white border" id="togglePassword" aria-label="Toggle password visibility">
                      <i class="ri-eye-close-line"></i>
                  </button>
              </div>
          </div>

          <div class="mt-3">
            <button type="submit" class="btn btn-primary" id="saveChangesBtn">Sign In</button>
            <div class="divider"><span>or sign in with</span></div>
            <div class="row gx-2">
              <div class="col">
                <button class="btn btn-facebook"><i class="ri-facebook-fill"></i> Facebook</button>
              </div>
              <div class="col">
                <a href="{{ route('google.login') }}" class="btn btn-google">
                  <button class="btn btn-google"><i class="ri-google-fill"></i> Google</button>
                </a>
              </div>
            </div><!-- row -->
            <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
      </form>

        
      </div><!-- card-body -->
      <div class="card-footer">
        Don't have an account? <a href="/register-client">Create an Account</a>
      </div><!-- card-footer -->
    </div><!-- card -->
  </div><!-- col -->
</div><!-- row -->

   
  


<script>
  document.getElementById("togglePassword").addEventListener("click", function () {
      let passwordInput = document.getElementById("password");
      let icon = this.querySelector("i");

      // Toggle password visibility
      passwordInput.type = passwordInput.type === "password" ? "text" : "password";

      // Toggle icon class
      icon.classList.toggle("ri-eye-close-line");
      icon.classList.toggle("ri-eye-line");
  });
</script>

@if ($message = Session::get('errors'))
<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
    <div class="toast">
        <div class="toast-header bg-warning">
            <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
            <h6 class="me-auto my-0 text-dark">Whoops! There's a problem</h6>
            <small>0 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body flex-fill bg-warning bg-opacity-75">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
</div>
@endif @if ($message = Session::get('success'))
<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
    <div class="toast">
        <div class="toast-header bg-warning">
            <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
            <h6 class="me-auto my-0 text-dark">Whoops! There's a problem</h6>
            <small>0 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body flex-fill bg-warning bg-opacity-75">
            <p>{{ $message }}</p>
        </div>
    </div>
</div>
@endif @endsection