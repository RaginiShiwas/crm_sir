<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Panchisoft</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/assets/img/favicons/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/img/favicons/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/img/favicons/favicon-16x16.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicons/favicon.ico')); ?>">
    <link rel="manifest" href="<?php echo e(asset('assets/dist/css/img/favicons/manifest.json')); ?>">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="<?php echo e(asset('vendors/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     

    <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="<?php echo e(asset('assets/css/theme-rtl.min.css')); ?>" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="<?php echo e(asset('assets/css/theme.min.css')); ?>" type="text/css" rel="stylesheet" id="style-default">
    <link href="<?php echo e(asset('assets/css/user-rtl.min.css')); ?>" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="<?php echo e(asset('assets/css/user.min.css')); ?>" type="text/css" rel="stylesheet" id="user-style-default">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('contant'); ?> 
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gipl\crm1\resources\views/layouts/app.blade.php ENDPATH**/ ?>