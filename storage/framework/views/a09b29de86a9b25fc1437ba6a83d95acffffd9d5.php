<!DOCTYPE html>
<html lang="en">

<head>
    <base href="" />
    <title>
        Wonogiri Fest
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="Wonogiri Fest" />
    <meta name="keywords" content="Wonogiri Fest" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="Wonogiri Fest" />
    <meta property="og:url" content="https://wonogirifest.co.id" />
    <meta property="og:site_name" content="Wonogiri Fest" />
    <link rel="canonical" href="https://wonogirifest.com" />
    <link rel="shortcut icon" href="<?php echo e(asset('/assets/media/logos/logo-ramlan.png')); ?>" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ultra" />
    <!--end::Fonts-->
    <link href="<?php echo e(asset('/assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/assets/plugins/custom/fontawesome/css/all.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/assets/css/custom-me.css')); ?>" rel="stylesheet" type="text/css" />
    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-base position-relative">
    <div class="d-flex flex-column flex-root">
        <?php echo $__env->make('frontend.templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('frontend.templates.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('frontend.templates.tools.scrolltop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        var hostUrl = "<?php echo e(asset('/')); ?>";
    </script>
    <script src="<?php echo e(asset('/assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/scripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/plugins/custom/fontawesome/js/all.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>\

</html>
<?php /**PATH E:\project\wonogirifest\resources\views/frontend/templates/master.blade.php ENDPATH**/ ?>