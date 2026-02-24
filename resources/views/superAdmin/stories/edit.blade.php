@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
         <li class="breadcrumb-item"><a href="/stories">About Us</a></li>
         <li class="breadcrumb-item active" aria-current="page">{{$story->title}}</li>
      </ol>
      <h4 class="main-title mb-0">About Us</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
<div class="card card-one mt-3">
   <div class="card-header">
      <h6 class="card-title">Edit About Us</h6>
      <nav class="nav nav-icon nav-icon-sm ms-auto">
         <a href="{{ route('stories.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>
      </nav>
   </div>
   <div class="card-body p-3">
      <form action="{{ route('stories.update',$story->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="row">
            <div class="col-md-8">
               <div class="mb-3">
                  <label  class="form-label">Title</label>
                  <input type="text" name="name" value="{{$story->name}}" class="form-control"  placeholder="Enter  name">
               </div>
              
               <div class="mb-3">
                  <label  class="form-label">Descriptions</label>
                  <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."> {{$story->detail}}</textarea>
               </div>
               <div class="mt-3">
                  <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
                  <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                      <span class="visually-hidden">Loading...</span>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              
               <div class="mb-3">
                   <label  class="form-label">Featured Image</label>
                   <input class="form-control" type="file"  name="image" accept="image/*">
                   @if ($story->path)
                     <img src="{{ asset('storage/app/public/images/' . $story->path) }}" alt="Current Image" class="img-thumbnail mt-3" >
                  @endif
               </div>


               @php
                     $features = !is_null($features) && is_iterable($features) && count($features) > 0 ? $features : [['entity' => ''] , ['title' => ''],['detail' => '']];
               @endphp

               <fieldset>
                     <div class="repeater-default mb-2">
                        <div data-repeater-list="feature">
                           @foreach ($features as $index => $feature)
                           <div data-repeater-item="">
                                 <div class="form-group row d-flex align-items-end mt-2 border p-2">
                                    <div class="col-sm-4 mb-2">
                                       {{-- <label class="form-label">feature</label> --}}
                                       <input type="text" name="feature[{{ $index }}][entity]" class="form-control" placeholder="Icon" value="{{ $feature['entity'] ?? '' }}">
                                    </div><!--end col-->
                                    
                                    <div class="col-sm-8 mb-2">
                                       {{-- <label class="form-label">Price</label> --}}
                                       <input type="text" name="feature[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $feature['title'] ?? '' }}">
                                    </div><!--end col-->

                                    <div class="col-sm-10 ">
                                       {{-- <label class="form-label">Price</label> --}}
                                       <input type="text" name="feature[{{ $index }}][detail]" class="form-control" placeholder="Detail" value="{{ $feature['detail'] ?? '' }}">
                                    </div><!--end col-->


                                    <div class="col-sm-2 ">
                                       <span data-repeater-delete="" class="btn btn-outline-danger">
                                             <span class="ri-delete-bin-line"></span>
                                       </span>
                                    </div><!--end col-->
                                 </div><!--end row-->
                           </div><!--end /div-->
                           @endforeach
                        </div><!--end repet-list-->

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
            
      </form>
      </div><!-- card-body -->
   </div>
   <!-- card -->
</div>
<!-- row -->
@include('layouts.superAdmin.footer')

@endsection