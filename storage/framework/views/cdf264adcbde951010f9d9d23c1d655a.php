

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.frontEnd.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="main home-3">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?php echo e(asset('frontEnd/img/breadcrumb/breadcrumb.jpg')); ?>)">
            <div class="container">
                <h2 class="breadcrumb-title">Personal Trainings</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Personal Trainings</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

      

    <!-- service area -->
    <div class="service-area pt-120 mt-30">
        <div class="container-fluid">
            
            <div class="row g-4">
                <?php $__currentLoopData = $utilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo e(asset('storage/images/'. $utility->path)); ?>" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="<?php echo e($utility->icon); ?>"></i>
                                </div>
                                <h3 class="service-title">
                                    <a href="<?php echo e(route('training.show',$utility->slug)); ?>"><?php echo e($utility->name); ?></a>
                                </h3>
                                <p class="service-text">
                                    <?php echo $utility->highlights; ?>

                                </p>
                                <div class="service-arrow">
                                    <a href="<?php echo e(route('training.show',$utility->slug)); ?>" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- service area end -->
    </main>

    <?php echo $__env->make('layouts.frontEnd.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontEnd.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/frontEnd/training/index.blade.php ENDPATH**/ ?>