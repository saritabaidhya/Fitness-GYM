 <?php $__env->startSection('content'); ?>
<div class="page-sign" style="background-image: linear-gradient(to right, #506fd9 40%, #2747b5 100%);">
    <div class="card card-sign p-2">
        <div class="card-header">
            <a href="/" class="header-logo mb-4"><?php echo e($settings->first()->name); ?></a>
            <h3 class="card-title">Sign In</h3>
            <p class="card-text">Welcome back! Please signin to continue.</p>
        </div>
        <!-- card-header -->
        <div class="card-body">
            <form method="POST" action="<?php echo e(route('login.custom')); ?>">
                <?php echo csrf_field(); ?>
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
                                <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
            </form>

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




        </div>
        <!-- card-body -->
        <div class="card-footer">
            Not a user? <a href="/">Back to site.</a>
        </div>
        <!-- card-footer -->
    </div>
    <!-- card -->

</div>



<?php if($message = Session::get('errors')): ?>
<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
    <div class="toast">
        <div class="toast-header bg-warning">
            <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
            <h6 class="me-auto my-0 text-dark">Whoops! There's a problem</h6>
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
<?php endif; ?> <?php if($message = Session::get('success')): ?>
<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
    <div class="toast">
        <div class="toast-header bg-warning">
            <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
            <h6 class="me-auto my-0 text-dark">Whoops! There's a problem</h6>
            <small>0 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body flex-fill bg-warning bg-opacity-75">
            <p><?php echo e($message); ?></p>
        </div>
    </div>
</div>
<?php endif; ?> <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superAdmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/superAdmin/logins/index.blade.php ENDPATH**/ ?>