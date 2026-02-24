
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.superAdmin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
         <li class="breadcrumb-item"><a href="/stories">About Us</a></li>
         <li class="breadcrumb-item active" aria-current="page"><?php echo e($story->title); ?></li>
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
         <a href="<?php echo e(route('stories.index')); ?>" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>
      </nav>
   </div>
   <div class="card-body p-3">
      <form action="<?php echo e(route('stories.update',$story->id)); ?>" method="POST" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>
         <?php echo method_field('PUT'); ?>
         <div class="row">
            <div class="col-md-8">
               <div class="mb-3">
                  <label  class="form-label">Title</label>
                  <input type="text" name="name" value="<?php echo e($story->name); ?>" class="form-control"  placeholder="Enter  name">
               </div>
              
               <div class="mb-3">
                  <label  class="form-label">Descriptions</label>
                  <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."> <?php echo e($story->detail); ?></textarea>
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
                   <?php if($story->path): ?>
                     <img src="<?php echo e(asset('storage/app/public/images/' . $story->path)); ?>" alt="Current Image" class="img-thumbnail mt-3" >
                  <?php endif; ?>
               </div>


               <?php
                     $features = !is_null($features) && is_iterable($features) && count($features) > 0 ? $features : [['entity' => ''] , ['title' => ''],['detail' => '']];
               ?>

               <fieldset>
                     <div class="repeater-default mb-2">
                        <div data-repeater-list="feature">
                           <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div data-repeater-item="">
                                 <div class="form-group row d-flex align-items-end mt-2 border p-2">
                                    <div class="col-sm-4 mb-2">
                                       
                                       <input type="text" name="feature[<?php echo e($index); ?>][entity]" class="form-control" placeholder="Icon" value="<?php echo e($feature['entity'] ?? ''); ?>">
                                    </div><!--end col-->
                                    
                                    <div class="col-sm-8 mb-2">
                                       
                                       <input type="text" name="feature[<?php echo e($index); ?>][title]" class="form-control" placeholder="Title" value="<?php echo e($feature['title'] ?? ''); ?>">
                                    </div><!--end col-->

                                    <div class="col-sm-10 ">
                                       
                                       <input type="text" name="feature[<?php echo e($index); ?>][detail]" class="form-control" placeholder="Detail" value="<?php echo e($feature['detail'] ?? ''); ?>">
                                    </div><!--end col-->


                                    <div class="col-sm-2 ">
                                       <span data-repeater-delete="" class="btn btn-outline-danger">
                                             <span class="ri-delete-bin-line"></span>
                                       </span>
                                    </div><!--end col-->
                                 </div><!--end row-->
                           </div><!--end /div-->
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.superAdmin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superAdmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/superAdmin/stories/edit.blade.php ENDPATH**/ ?>