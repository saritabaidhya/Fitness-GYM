

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts\frontEnd\header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="main home-3">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?php echo e('frontEnd/img/gallery/gallery-3.jpg'); ?>)">
            <div class="container">
                <h2 class="breadcrumb-title">Membership Plan</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Membership Plan</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

       
        <!-- pricing area -->
        <div class="pricing-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Membership</span>
                            <h2 class="site-title">Membership Plan</h2>
                            <div class="heading-divider"></div>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membership): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h5><?php echo e($membership->name); ?></h5>
                                <p>subscription</p>
                            </div>
                            <div class="pricing-amount">
                                <strong>Rs.<?php echo e($membership->amount); ?></strong>
                            </div>
                            <div class="pricing-amount-type">
                                <span>/Monthly</span>
                            </div>
                            <div class="pricing-feature">    
                                <ul>
                                    <?php $__currentLoopData = $membership->includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><i class="far fa-check"></i> <?php echo e($include['title']); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <ul>
                                <?php $__currentLoopData = $membership->excludes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exclude): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(!empty($exclude['title'])): ?>
        <li><i class="far fa-times text-danger"></i> <?php echo e($exclude['title']); ?></li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                                
                            </div>
                            <div class="pricing-footer">
                                
                                <a href="#" class="theme-btn" 
                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" 
                                onclick="document.getElementById('selectedMembership').value = '<?php echo e($membership->name); ?>'">Join Now <i class="far fa-arrow-right"></i>
                             </a>
                             

                             
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!--  Large modal example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header border-0 pb-0">  
                                    <h2 class="text-light" id="myLargeModalLabel">Membership Plan</h2>  
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                    
                                <div class="modal-body pt-0">                                 
                                    <p>It is a long-established fact that a reader will be distracted by readable content.</p>
                                    <div class="contact-form p-0 mt-5">                                        
                                        <form method="post" action="<?php echo e(route('memberships.store')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="phone" placeholder="Your Phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="category" id="selectedMembership" class="form-select form-control">
                                                            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($package->name); ?>"><?php echo e($package->name); ?></option>                                                            
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <textarea name="detail" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                                            </div>
                                            <button type="submit" class="theme-btn">
                                                <i class="far fa-paper-plane"></i> Send Message
                                            </button>
                                        </form>     
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->  
                                       
                </div>
            </div>
        </div>
        <!-- pricing area end -->
    </main>

    <?php echo $__env->make('layouts\frontEnd\footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts\frontEnd\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/frontEnd/memberships/index.blade.php ENDPATH**/ ?>