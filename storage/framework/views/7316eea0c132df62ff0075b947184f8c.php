

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.superAdmin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/studios">Gallery</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($studio->title); ?></li>
                </ol>
                <h4 class="main-title mb-0">Gallery</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">Edit Gallery List</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="<?php echo e(route('studios.index')); ?>" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    <form action="<?php echo e(route('studios.update',$studio->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row"> 
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label  class="form-label">Title</label>
                                    <input type="text" name="name" value="<?php echo e($studio->name); ?>" class="form-control"  placeholder="Enter studio name">
                                  </div>  

                                  <div class="mb-3">
                                    <label  class="form-label">Album Image</label>
                                    <input type="file" name="photo[]" id="image" class="form-control" accept="image/*" multiple>
                                    <?php if($studio->image): ?>
    <div class="form-group mt-3">
        <label>Current Images</label>
        <div class="row mt-3">
            <?php $__currentLoopData = json_decode($studio->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-3">
                <div class="music-item">
                  <a href="#" class="music-thumb mb-3"><img src="<?php echo e(asset('storage/app/public/images/' . $image)); ?>" alt="" class="img-fluid"></a>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="delete_images[]" value="<?php echo e($image); ?>" id="delete_<?php echo e($image); ?>">
                    <label class="form-check-label" for="delete_<?php echo e($image); ?>">
                        Delete
                    </label>
                </div>
                </div><!-- music-item -->
              </div>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
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
                                    <?php if($studio->path): ?>
                                    <img src="<?php echo e(asset('storage/app/public/images/' . $studio->path)); ?>" alt="Current Image" class="img-thumbnail mt-3" >
                                <?php endif; ?>
                                </div>
                            </div>   
                        </div>
                        

                         

                    
                    </form>
                </div><!-- card-body -->
            </div><!-- card -->

        </div><!-- row -->

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

<?php echo $__env->make('layouts.superAdmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/superAdmin/studios/edit.blade.php ENDPATH**/ ?>