

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.frontEnd.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="main home-3">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?php echo e(asset('frontEnd/img/breadcrumb/breadcrumb.jpg')); ?>)">
            <div class="container">
                <h2 class="breadcrumb-title"><?php echo e($utilitydetails->name); ?></h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="">Personal Trainings</li>
                    <li class="active"><?php echo e($utilitydetails->name); ?></li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


    
    <div class="service-single-area py-120">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">

                        <div class="service-sidebar">
                            <img src="<?php echo e(asset('storage/images/'.$utilitydetails->path)); ?>" alt="thumb" style="width:100%">


                            <div class="widget category mt-5">
                                <h4 class="widget-title">All Classes</h4>
                                <div class="category-list">
                                    <a href="#"><i class="far fa-angle-double-right"></i>Fitness &amp; GYM</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Cycling GYM</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Boxing &amp; Caradio</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Dumbbelling</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Strength Training</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Fusion Yoga</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Grid Training</a>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="service-details">
                            <div class="service-details">
                            

                                <h2 class="mb-30 text-light"><?php echo e($utilitydetails->name); ?></h2>
                                <?php echo $utilitydetails->detail; ?>


                                <a href="/contacts" class="theme-btn">Join Us Now<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <!-- team-area -->
                        <div class="team-area pt-50  mt-30">
                            <div class="row">
                                <div class="col-12 mx-auto">
                                    <div class="site-heading">
                                        <h2 class="site-title text-light">Our <span>Trainers</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php $__currentLoopData = $squads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $squad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <div class="team-item">
                                        <img src="<?php echo e(asset('storage/images/'.$squad->path)); ?>" alt="thumb">
                                      
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#"><?php echo e($squad->name); ?></a></h5>
                                                <span>Fitness Trainer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                        </div>
    
    <!-- team-area end -->
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
    


   


    
</main>

    <?php echo $__env->make('layouts.frontEnd.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontEnd.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/frontEnd/training/show.blade.php ENDPATH**/ ?>