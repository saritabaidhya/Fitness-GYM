<!DOCTYPE html>
<html lang="en">
  
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <title><?php echo e($settings->first()->name); ?> - Admin Dashboard</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('superAdmin/lib/remixicon/fonts/remixicon.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('superAdmin/lib/prismjs/themes/prism.min.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('superAdmin/lib/jqvmap/jqvmap.min.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('superAdmin/lib/apexcharts/apexcharts.css')); ?> ">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('superAdmin/css/style.min.css')); ?> ">

    <!-- DataTables -->
    <link href="<?php echo e(asset('superAdmin/lib/datatables/dataTables.bootstrap5.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('superAdmin/lib/datatables/buttons.bootstrap5.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?php echo e(asset('superAdmin/lib/datatables/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />   
  </head>
  <body >

    <?php echo $__env->yieldContent('content'); ?>

   
    <script src="<?php echo e(asset('superAdmin/lib/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/bootstrap/js/bootstrap.bundle.min.js')); ?> "></script>
    <script src="<?php echo e(asset('superAdmin/lib/prismjs/prism.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/jqvmap/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/jqvmap/maps/jquery.vmap.world.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/apexcharts/apexcharts.min.js')); ?>"></script>
    <!--Wysiwig js-->
    <script src="<?php echo e(asset('superAdmin/lib/tinymce/tinymce.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/js/jquery.form-editor.init.js')); ?>"></script>

    <script src="<?php echo e(asset('superAdmin/js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/js/db.data.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/js/db.analytics.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/js/jquery.core.js')); ?>"></script>
     <!-- Required datatable js -->
    <script src="<?php echo e(asset('superAdmin/lib/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/datatables/dataTables.bootstrap5.min.js')); ?>"></script>

      <!-- lib/amples -->
    <script src="<?php echo e(asset('superAdmin/lib/datatables/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/datatables/buttons.bootstrap5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/datatables/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/datatables/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/datatables/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/datatables/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/datatables/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/datatables/buttons.colVis.min.js')); ?>"></script>
     <!-- Responsive examples -->
    <script src="<?php echo e(asset('superAdmin/lib/datatables/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/lib/datatables/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('superAdmin/pages/jquery.datatable.init.js')); ?>"></script>


<script src="<?php echo e(asset('superAdmin/lib/repeater/jquery.repeater.min.js')); ?>"></script>
<script src="<?php echo e(asset('superAdmin/lib/repeater/jquery.form-repeater.js')); ?>"></script>
    
   
    <script>
      'use script'

      var skinMode = localStorage.getItem('skin-mode');
      if(skinMode) {
        $('html').attr('data-skin', 'dark');
      }
    </script>

<script>
    'use strict'

    var toastTrigger = document.getElementById('liveToastBtn')
    var toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
      toastTrigger.addEventListener('click', function () {
        var toast = new bootstrap.Toast(toastLiveExample)

        toast.show()
      })
    }

  </script>
  <script>
    document.querySelector('form').addEventListener('submit', function (event) {
        // Show the loading spinner
        document.getElementById('saveChangesBtn').classList.add('d-none');
        document.getElementById('loadingSpinner').classList.remove('d-none');
    });
</script>
  </body>

</html>
<?php /**PATH C:\xampp\htdocs\Gym Fitness\resources\views/layouts/superAdmin/layout.blade.php ENDPATH**/ ?>