@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Packages</li>
      </ol>
      <h4 class="main-title mb-0">Packages</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">Packages List</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="{{ route('packages.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>
         </nav>
      </div>
      <div class="card-body p-3">
         <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Information --}}
            <div class="card p-3 shadow-sm rounded  mb-3">
                <div class="row">
                    <div class="col-md-8">
                        <div class=" mb-3">
                        <h4>Information</h4>
                        <div class="row">
                            <div class="mb-3">
                                <label  class="form-label">Title</label>
                                <input type="text" name="name" class="form-control"  placeholder="Enter package name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label  class="form-label">Descriptions / Redirection Link</label>
                                <textarea id="basic-confd" class="form-control" name="detail" rows="6" placeholder="Write here..."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label  class="form-label">Full Address</label>
                                    <input type="text" name="name" class="form-control"  placeholder="Enter  name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label  class="form-label">Province</label>
                                    <input type="text" name="name" class="form-control"  placeholder="Enter  name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label  class="form-label">Location</label>
                                    <input type="text" name="name" class="form-control"  placeholder="Enter  name">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    </div>


                    <div class="col-md-4">
                        <div class="mb-3">
                        <label  class="form-label">Status</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>                    
                    <div class="mb-3">
                        <label  class="form-label">Featured Image</label>
                        <input class="form-control" type="file"  name="image" accept="image/*">
                        <img src="{{ asset('superAdmin/img/no-image.png') }} " class="img-thumbnail img-fluid mt-2" alt="...">
                    </div>                    
                    </div>
                </div>
            </div>
            {{-- price --}}
            <div class="card p-3 shadow-sm rounded  mb-3">
                <h4>Price</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label  class="form-label">price</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter  name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label  class="form-label">Before price</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter  name">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Additional Information --}}
            <div class="card p-3 shadow-sm rounded  mb-3">
                <h4>Additional Information</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Property Type</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                <option value="1" selected>Apartment</option>
                                <option value="0">Villa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Property Status</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Property Label</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                <option value="1" selected>For Rent</option>
                                <option value="0">For Sale</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Bedrooms</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter here">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Bathroom</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter here">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Area (Sqft)</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter here">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Acres</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter here">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Hometype</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter here">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">no HOA</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter here">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Builtin</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter here">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">price(Sqft)</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter here">
                        </div>
                    </div>
                </div>
            </div>
            
            @php
                $includes = !is_null($includes) && is_iterable($includes) && count($includes) > 0 ? $includes : [['title' => ''] , ['detail' => '']];
                $excludes = !is_null($excludes) && is_iterable($excludes) && count($excludes) > 0 ? $excludes : [['title' => ''], ['detail' => '']];
            @endphp
            {{-- bed & Bedroom --}}
            <div class="row">
                <div class="col-md-6 ">
                    <div class="card p-0 shadow-sm mb-3 ">
                        <fieldset class="p-0 " >
                            <h6  class="border-bottom p-2">Bedrooms</h6>
                            <div class="repeater-default mb-2 p-2">
                                <div data-repeater-list="include">
                                    @foreach ($includes as $index => $include)
                                    <div data-repeater-item="">
                                        <div class="form-group row d-flex align-items-end ">
                                            <div class="col-sm-3 mb-2">
                                                <input type="text" name="include[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $include['title'] ?? '' }}">
                                            </div>
                                            <div class="col-sm-7 mb-2">
                                                <input type="text" name="include[{{ $index }}][detail]" class="form-control" placeholder="detail" value="{{ $include['detail'] ?? '' }}">
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
                <div class="col-md-6 ">
                    <div class="card p-0 shadow-sm mb-3 ">
                    <fieldset class="">
                        <h6  class="border-bottom p-2">Bathrooms</h6>
                        <div class="repeater-default mb-2 p-2">
                            <div data-repeater-list="exclude">
                                @foreach ($excludes as $index => $exclude)
                                <div data-repeater-item="">
                                    <div class="form-group row d-flex align-items-end ">
                                        <div class="col-sm-3 mb-2">
                                            <input type="text" name="exclude[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $exclude['title'] ?? '' }}">
                                        </div>
                                        <div class="col-sm-7 mb-2">
                                            <input type="text" name="exclude[{{ $index }}][details]" class="form-control" placeholder="details" value="{{ $exclude['details'] ?? '' }}">
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
            </div>
            {{-- Interior Features & Equipment --}}
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card p-0 shadow-sm mb-3">
                        <fieldset class="p-0 " >
                            <h6  class="border-bottom p-2">Interior Features</h6>
                            <div class="repeater-default mb-2 p-2">
                                <div data-repeater-list="include">
                                    @foreach ($includes as $index => $include)
                                    <div data-repeater-item="">
                                        <div class="form-group row d-flex align-items-end ">
                                            <div class="col-sm-3 mb-2">
                                                <input type="text" name="include[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $include['title'] ?? '' }}">
                                            </div>
                                            <div class="col-sm-8 mb-2">
                                                <input type="text" name="include[{{ $index }}][detail]" class="form-control" placeholder="detail" value="{{ $include['detail'] ?? '' }}">
                                            </div>
                                            <div class="col-sm-1 mb-2 ">
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
            </div>

            {{-- Interior Features & Equipment --}}
            
            <div class="row">
                <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12 ">
                            <div class="card p-0 shadow-sm mb-3 ">
                                <fieldset class="p-0 " >
                                    <h6  class="border-bottom p-2">Equipments</h6>
                                    <div class="repeater-default mb-2 p-2">
                                        <div data-repeater-list="include">
                                            @foreach ($includes as $index => $include)
                                            <div data-repeater-item="">
                                                <div class="form-group row d-flex align-items-end ">
                                                    <div class="col-sm-3 mb-2">
                                                        <input type="text" name="include[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $include['title'] ?? '' }}">
                                                    </div>
                                                    <div class="col-sm-8 mb-2">
                                                        <input type="text" name="include[{{ $index }}][detail]" class="form-control" placeholder="detail" value="{{ $include['detail'] ?? '' }}">
                                                    </div>
                                                    <div class="col-sm-1 mb-2 ">
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
                       
                    </div>
                </div>
            </div>
            {{-- nearby and  Conveniences --}}


               <div class="col-md-12">

                
                 
                  
                  <div class="mt-3">
                     <button type="submit" class="btn btn-primary" id="saveChangesBtn">Create</button>
                     <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                         <span class="visually-hidden">Loading...</span>
                     </div>
                 </div>
               </div>
               <div class="col-md-4">
                  
               </div>
            </div>
         </form>
      </div>
      <!-- card-body -->
   </div>
   <!-- card -->
</div>
<!-- row -->

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