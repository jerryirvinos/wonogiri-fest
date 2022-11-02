

<?php $__env->startSection('content'); ?>
    <section class="my-5 my-lg-10">
        <div class="py-5 py-lg-10">
            <div class="bgi-no-repeat bgi-size-cover bgi-position-center position-relative min-h-175px mw-100"
                style="background-image: url('<?php echo e(asset('/assets/media/illustrations/cloud-pattern.png')); ?>')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mb-12">
                                <div class="fs-5 text-muted fw-semibold mb-7" id="team"
                                    data-kt-scroll-offset="{default: 100, lg: 150}">
                                    Promoted by Ramlan Foundation
                                </div>
                                <img class="mw-75 h-auto mh-250px" alt=""
                                    src="<?php echo e(asset('/assets/media/logos/wonogiri-fest-logo.png')); ?>">
                                <div class="fs-2x fw-semibold text-gray-300 my-15">
                                    25 - 26 Febuari | Lapangan Pringgodani, Wonogiri
                                </div>
                                <a href="#"
                                    class="btn btn-outline btn-outline btn-outline-warning btn-active-light-warning mb-10">
                                    <span class="fw-bold">Event Detail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frontend.home.lineup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.home.rundown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.home.ticket', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.home.youtube', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.home.experience', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.home.instagram', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="my-5 my-lg-10 bg-tagline">
        <div class="py-5 py-lg-10">
            <div class="container">
                <div class="row justify-content-center px-8 px-lg-10">
                    <div class="col-xl-10 col-xxl-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="d-flex justify-content-center flex-wrap h-100">
                                    <img src="<?php echo e(asset('/assets/media/illustrations/tagline.png')); ?>"
                                        class="mh-250px mw-100 mb-9 my-auto mx-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frontend.home.sponsor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\project\wonogirifest\resources\views/frontend/landing.blade.php ENDPATH**/ ?>