
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.superAdmin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Medias</li>
      </ol>
      <h4 class="main-title mb-0">Medias</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">Media List</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="<?php echo e(route('medias.create')); ?>" class="btn btn-primary btn-icons"><i class="ri-add-fill"></i> Add
            Media </a>
         </nav>
      </div>
      <div class="card-body p-3">
         <div class="row-wrapper mb-4 mb-xxl-5">
            <div class="row g-2 g-lg-3">
               <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-3">
                <div class="music-item">
                  <a href="#" class="music-thumb mb-3"><img src="<?php echo e(asset('storage/app/public/images/' . $media->path)); ?>" alt="" class="img-fluid"></a>
                  <h6 class="music-title"><a href="#"><?php echo e($media->title); ?></a></h6>
                  <p class="music-text"><a href="#modal-<?php echo e($media->id); ?>" data-bs-toggle="modal" class="delete"><i
                     class="ri-delete-bin-line"></i>
                  Delete</a></p>
                 
                </div><!-- music-item -->
              </div>

              <div class="modal fade" id="modal-<?php echo e($media->id); ?>" tabindex="-1" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered">
                 <div class="modal-content">
                   <div class="modal-header bg-primary">
                     <h5 class="modal-title text-white">Are you Sure ?</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div><!-- modal-header -->
                   <div class="modal-body">
                       <div class="row"> 
                           <div class="col-md-3"> <img src="<?php echo e(asset('public/superAdmin/img/93480.png')); ?>" class="img-fluid"> </div>

                           <div class="col-md-9"><h5>This can't be undone. </h5> You are about to delete the information of <strong><?php echo e($media->title); ?></strong> </div>
                       </div>
                       
                   </div><!-- modal-body -->
                   <div class="modal-footers text-end pb-2 pe-4">
                       <form action="<?php echo e(route('medias.destroy',$media->id)); ?>" method="POST">
                           <?php echo csrf_field(); ?>
                           <?php echo method_field('DELETE'); ?>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
                   </div><!-- modal-footer -->
                 </div><!-- modal-content -->
               </div><!-- modal-content -->
             </div><!-- modal -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- row -->
          </div>
        
      </div>
      <!-- card-body -->
   </div>
   <!-- card -->
</div>
<!-- row -->

<?php if($message = Session::get('success')): ?>
<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
    <div class="toast">
          <div class="toast-header bg-success">
              <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
              <h6 class="me-auto my-0 text-white">Success!</h6>
              <small class="text-white">0 mins ago</small>
              <button type="button" class="btn-close text-white" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body flex-fill bg-success">
            <p class="text-white"><?php echo e($message); ?></p>
          </div>
    </div>
  </div>
  <?php endif; ?>

  <?php echo $__env->make('layouts.superAdmin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superAdmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/superAdmin/medias/index.blade.php ENDPATH**/ ?>