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

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
                    <a href="#">
                        <img alt="Logo" src="<?php echo e(asset('/assets/media/logos/logo-ramlan.png')); ?>" class="h-40px" />
                    </a>
                </div>
                <div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
                    <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y scroll-ps d-flex"
                        data-kt-scroll="true" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
                        <div id="kt_aside_menu"
                            class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-semibold fs-6 my-auto"
                            data-kt-menu="true">
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item py-2 here">
                                <a href="#" class="menu-link menu-center flex-column active">
                                    <span class="menu-icon me-0 mb-3">
                                        <i class="fa-light fa-chart-pie fa-2x"></i>
                                    </span>
                                    <div class="menu-title">Dashboard</div>
                                </a>
                            </div>
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item py-2">
                                <a href="#" class="menu-link menu-center flex-column">
                                    <span class="menu-icon me-0 mb-3">
                                        <i class="fa-light fa-ticket fa-2x"></i>
                                    </span>
                                    <div class="menu-title">Transaksi</div>
                                </a>
                            </div>
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item py-2">
                                <span class="menu-link menu-center flex-column">
                                    <span class="menu-icon me-0 mb-3">
                                        <i class="fa-light fa-database fa-2x"></i>
                                    </span>
                                    <div class="menu-title">Master</div>
                                </span>
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-dropdown py-4 w-200px w-lg-225px">
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <span
                                                class="menu-section fs-5 fw-bolder text-gray-800 ps-1 py-1">Master</span>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="#">
                                            <span class="menu-icon me-3">
                                                <i class="fa-light fa-users fa-lg"></i>
                                            </span>
                                            <span class="menu-title">User</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--begin::Footer-->
                <div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
                    <div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip"
                        data-bs-placement="right" data-bs-dismiss="click" title="Logout">
                        <button type="button" class="btn btn-custom" data-kt-menu-trigger="click"
                            data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                            <i class="fa-light fa-right-from-bracket fa-2x"></i>
                        </button>
                    </div>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header tablet and mobile-->
                <div class="header-mobile py-3">
                    <div class="container d-flex flex-stack">
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="../../demo9/dist/index.html">
                                <img alt="Logo" src="<?php echo e(asset('/assets/media/logos/logo-ramlan.png')); ?>"
                                    class="h-35px" />
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
                            <span class="svg-icon svg-icon-2x me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <!--end::Header tablet and mobile-->
                <!--begin::Header-->
                <div id="kt_header" class="header bg-base py-6 py-lg-0" data-kt-sticky="true"
                    data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
                    <div class="header-container container-xxl">
                        <!--begin::Page title=-->
                        <div
                            class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
                            <h1 class="d-flex flex-column text-dark fw-bold my-1">
                                <span class="text-white fs-1">Kamis, 21 November 2022</span>
                                <small class="text-gray-300 fs-5 fw-normal pt-2">
                                    Hallo <span class="fs-4 fw-bolder">Yeremia Satrio</span>, terimakasih sudah
                                    berjuang hari
                                    ini <span class="fs-1 ms-2 my-auto">&#128513;</span>
                                </small>
                            </h1>
                        </div>
                        <!--end::Page title=-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="d-flex align-items-center py-3 py-lg-0">
                                <a href="#" class="btn btn-warning rounded-pill">
                                    <span class="fs-4 fw-bolder">jerryirvino</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-offset"></div>
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container-xxl" id="kt_content_container">
                        <div class="row g-5 g-xl-8">
                        </div>
                    </div>
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-gray-400 fw-semibold me-1">Created by</span>
                            <a href="#" target="_blank"
                                class="text-muted text-hover-primary fw-bolder me-2 fs-6">
                                Jeremy Huda
                            </a>
                        </div>
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">
                                    Tentang
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Footer-->
            </div>
        </div>
    </div>
    <?php echo $__env->make('frontend.templates.tools.scrolltop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        var hostUrl = "<?php echo e(asset('/assets/')); ?>";
    </script>
    <script src="<?php echo e(asset('/assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/scripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/plugins/custom/fontawesome/js/all.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH /Users/yeremiasatrio/Project/wonogiri-fest/resources/views/templates/master.blade.php ENDPATH**/ ?>