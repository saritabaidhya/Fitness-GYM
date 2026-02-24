<!-- header area -->
<header class="header">

    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid px-lg-5">
                <a class="navbar-brand" href="/home">
                    <img src="{{ asset('frontEnd/img/logo/logo.png') }}" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="/home" data-bs-toggle="dropdown">Home</a>
                          
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/memberships">Membership</a></li>
                        <li class="nav-item"><a class="nav-link" href="/training">Personal Training</a></li>
                        <li class="nav-item"><a class="nav-link" href="/whyus">Why Zenith Fitness</a></li>
                        <li class="nav-item"><a class="nav-link" href="/faqs">FAQS</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contacts">CONTACT US</a></li>
                    </ul>
                    <div class="header-nav-right">
                       
                        <div class="header-btn">
                            @if (Auth::guard('signup')->check())

                            <li class="nav-item dropdown">


                           


                                <a class="nav-link theme-btn dropdown-toggles btn-default" href="#" data-bs-toggle="dropdown"><i class="far fa-user"></i>
                                    Hi, {{ explode(' ', auth()->guard('signup')->user()->name)[0] }} !  &nbsp;</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="about.html">View Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('signout') }}">Logout</a></li>
                               
                            </li>
                            @else

                            <a href="/signins" class="theme-btn">Login<i class="far fa-arrow-right"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- header area end -->

<div class="row">
    <div class="col-lg-12">
        @if (Session::has('success'))
            <div class="toast-container position-fixed p-3 bottom-0 end-0">
                <div id="toastSuccess" class="toast text-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body">
                        <strong>Success!</strong> {{ Session::get('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast"></button>
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="toast-container position-fixed p-3 bottom-0 end-0">
                <div id="toastError" class="toast text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body">
                        <strong>Error!</strong> Please fix the following:
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast"></button>
                </div>
            </div>
        @endif
    </div>
</div>