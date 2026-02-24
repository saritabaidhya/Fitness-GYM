
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.superAdmin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Services</li>
      </ol>
      <h4 class="main-title mb-0">Services</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">Service List</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="<?php echo e(route('utilities.create')); ?>" class="btn btn-primary btn-icons"><i class="ri-add-fill"></i> Add
            Service</a>
         </nav>
      </div>
      <div class="card-body p-3">
          <div class="table-responsive">
            <table  id="datatable" class="table table-striped table-bordered " style="border-collapse: collapse; border-spacing: 0;">
                <thead>
                  <tr>
                     <th scope="col">SN</th>
                     <th scope="col">Title </th>
                     <th scope="col">Category</th>
                     <th scope="col">Status</th>
                     <th scope="col">Created At </th>
                     <th scope="col">Updated At</th>
                     <th scope="col">Action </th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $utilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <th scope="row"><?php echo e($loop->iteration); ?></th>
                     <td><?php echo e($utility->name); ?></td>
                     <td>
    <?php $__currentLoopData = $utilitytypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utilitytype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($utility->category == $utilitytype->id): ?>
            <?php echo e($utilitytype->name); ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</td>

                     <td><span class=""><?php echo e($utility->status); ?></span></td>
                     <td><?php echo e($utility->created_at); ?></td>
                     <td><?php echo e($utility->updated_at); ?></td>
                     <td>
                        <a href="" class="dropdown-link" data-bs-toggle="dropdown"
                           aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" style="">
                           <a href="<?php echo e(route('utilities.show',$utility->id)); ?>" data-toggle="modal" class="dropdown-item details"><i
                              class="ri-menu-4-line"></i> View Details</a>
                           <a href="<?php echo e(route('utilities.edit',$utility->id)); ?>" class="dropdown-item rename"><i class="ri-edit-2-line"></i>
                           Edit</a>
                           
                              <a href="#modal-<?php echo e($utility->id); ?>" data-bs-toggle="modal" class="dropdown-item delete"><i
                                 class="ri-delete-bin-line"></i>
                              Delete</a>
                            
                           

                          

                        </div>
                     </td>
                  </tr>

                  <div class="modal fade" id="modal-<?php echo e($utility->id); ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <h5 class="modal-title text-white">Are you Sure ?</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div><!-- modal-header -->
                        <div class="modal-body">
                            <div class="row"> 
                                <div class="col-md-3"> <img src="<?php echo e(asset('public/superAdmin/img/93480.png')); ?>" class="img-fluid"> </div>

                                <div class="col-md-9"><h5>This can't be undone. </h5> You are about to delete the information of <strong> <?php echo e($utility->name); ?></strong> </div>
                            </div>
                            
                        </div><!-- modal-body -->
                        <div class="modal-footers text-end pb-2 pe-4">
                            <form action="<?php echo e(route('utilities.destroy',$utility->id)); ?>" method="POST">
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
               </tbody>
            </table>
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
<?php echo $__env->make('layouts.superAdmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/superAdmin/utilities/index.blade.php ENDPATH**/ ?>