
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.superAdmin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Gallery</li>
      </ol>
      <h4 class="main-title mb-0">Gallery</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">Create Gallery List</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="<?php echo e(route('sliders.index')); ?>" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>
         </nav>
      </div>
      <div class="card-body p-3">
         <form action="<?php echo e(route('studios.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
               <div class="col-md-8">
                  <div class="mb-3">
                     <label  class="form-label">Title</label>
                     <input type="text" name="name" class="form-control"  placeholder="Enter gallery name">
                  </div>

                  <div class="mb-3">
                     <label  class="form-label">Album Images</label>
                     <input type="file" name="photo[]" id="photo" class="form-control" accept="image/*" multiple>
                     <img src="<?php echo e(asset('superAdmin/img/no-image.png')); ?> " class="img-thumbnail img-fluid mt-2" alt="...">
                  </div>
                
                  <div class="mt-3">
                     <button type="submit" class="btn btn-primary" id="saveChangesBtn">Create</button>
                     <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                         <span class="visually-hidden">Loading...</span>
                     </div>
                 </div>
               </div>
               <div class="col-md-4">
                 
                  <div class="mb-3">
                     <label  class="form-label">Featured Image</label>
                     <input class="form-control" type="file"  name="image" accept="image/*">
                     <img src="<?php echo e(asset('superAdmin/img/no-image.png')); ?> " class="img-thumbnail img-fluid mt-2" alt="...">
                  </div>
               </div>
            </div>
         </form>
      </div>
      <!-- card-body -->
   </div>
   <!-- card -->
</div>
<!-- row -->

<?php if($message = Session::get('errors')): ?>
<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
    <div class="toast">
          <div class="toast-header bg-warning">
              <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
              <h6 class="me-auto my-0">Whoops! There's a problem</h6>
              <small>0 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body flex-fill bg-warning bg-opacity-75">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
    </div>
  </div>
  <?php endif; ?>
  <?php echo $__env->make('layouts.superAdmin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superAdmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/superAdmin/studios/create.blade.php ENDPATH**/ ?>