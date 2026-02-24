@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Package</li>
                </ol>
                <h4 class="main-title mb-0">Packages</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">Edit service</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('packages.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('packages.update',$package->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row"> 
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label  class="form-label">Title</label>
                                    <input type="text" name="name" value="{{$package->name}}" class="form-control"  placeholder="Enter package name">
                                  </div>  
                                  <div class="mb-3">
                                    <label  class="form-label">Amount</label>
                                    <input type="text" name="amount" value="{{ $package->amount }}" class="form-control"  placeholder="Enter package name">
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                        @php
                                            $includes = !is_null($includes) && is_iterable($includes) && count($includes) > 0 ? $includes : [['title' => '']];
                                            $excludes = !is_null($excludes) && is_iterable($excludes) && count($excludes) > 0 ? $excludes : [['title' => '']];
                                        @endphp
                                        <fieldset class="border  rounded">
                                            <h6  class="border-bottom p-2">Includes</h6>
                                            <div class="repeater-default mb-2 p-2">
                                                <div data-repeater-list="include">
                                                    @foreach ($includes as $index => $include)
                                                    <div data-repeater-item="">
                                                        <div class="form-group row d-flex align-items-end ">
                                                            <div class="col-sm-10 mb-2 ">
                                                                <input type="text" name="include[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $include['title'] ?? '' }}">
                                                            </div>
                                                            <div class="col-sm-2 mb-2 ">
                                                                <span data-repeater-delete="" class="btn btn-outline-danger form-control">
                                                                        <span class="ri-delete-bin-line"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>

                                                <div class="form-group mt-2 mb-0 row">
                                                <div class="col-sm-12">
                                                        <span data-repeater-create="" class="btn btn-outline-secondary">
                                                            <span class="fas fa-plus"></span> Add
                                                        </span>
                                                </div><!--end col-->
                                                </div><!--end row-->
                                            </div> <!--end repeater-->
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="border  rounded">
                                            <h6  class="border-bottom p-2">Excludes</h6>
                                            <div class="repeater-default mb-2 p-2">
                                                <div data-repeater-list="exclude">
                                                    @foreach ($excludes as $index => $exclude)
                                                    <div data-repeater-item="">
                                                        <div class="form-group row d-flex align-items-end ">
                                                            <div class="col-sm-10 mb-2 ">
                                                                <input type="text" name="exclude[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $exclude['title'] ?? '' }}">
                                                            </div>
                                                            <div class="col-sm-2 mb-2 ">
                                                                <span data-repeater-delete="" class="btn btn-outline-danger form-control">
                                                                        <span class="ri-delete-bin-line"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>

                                                <div class="form-group mt-2 mb-0 row">
                                                <div class="col-sm-12">
                                                        <span data-repeater-create="" class="btn btn-outline-secondary">
                                                            <span class="fas fa-plus"></span> Add
                                                        </span>
                                                </div><!--end col-->
                                                </div><!--end row-->
                                            </div> <!--end repeater-->
                                        </fieldset>
                                    </div>
                                 </div>

                                  {{-- <div class="mb-3">
                                    <label  class="form-label">Descriptions</label>
                                    <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."> {{$package->detail}}</textarea>
                                  </div> --}}

                                  <div class="mt-3">
                                    <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
                                    <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                  
                                  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                <label  class="form-label">Status</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="1" {{ $package->status  == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $package->status  == '0' ? 'selected' : '' }}>Inactive</option>
                                  </select>
                                </div>

                              
                                <div class="mb-3">
                                    <label  class="form-label">Featured Image</label>
                                    <input class="form-control" type="file"  name="image" accept="image/*">
                                    @if ($package->path)
                                    <img src="{{ asset('storage/app/public/images/' . $package->path) }}" alt="Current Image" class="img-thumbnail mt-3" >
                                @endif
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">Email</label>
                                    <input type="text" name="email"  class="form-control" value="{{$package->email}}"  placeholder="Enter email address">
                                 </div>
                    
                                 <div class="mb-3">
                                    <label  class="form-label">Meta Descriptions</label>
                                    <input type="text" name="facebook"  class="form-control" value="{{$package->facebook}}"  placeholder="Enter facebook profile link">
                                 </div>
                            </div>   
                        </div>
                        

                         

                    
                    </form>
                </div><!-- card-body -->
            </div><!-- card -->

        </div><!-- row -->

        @if ($message = Session::get('errors'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
            <div class="toast">
                  <div class="toast-header bg-warning">
                      <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
                      <h6 class="me-auto my-0">Whoops! There's a problem</h6>
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
          @endif
        @include('layouts.superAdmin.footer')

@endsection
