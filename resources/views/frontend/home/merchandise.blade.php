<section class="my-10 my-lg-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-12">
                    <div class="fs-4x text-white font-title ls-4 mb-7" id="experience"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        MERCHANDISE
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-12 col-xxl-12">
                <div class="tns tns-default" style="direction: ltr">
                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                        data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                        data-tns-nav="false" data-tns-items="3" data-tns-center="false" data-tns-dots="false"
                        data-tns-prev-button="#go_back" data-tns-next-button="#go_next">
                        @foreach ($merchandises as $merchandise)
                            <div class="col-lg-4 col-sm-6 px-3">
                                <div class="card border border-4 border-lg-10 rounded-lg-5 shadow-xs mb-2 mb-lg-5">
                                    <div class="card-body p-0">
                                        <div class="img-wrapper rounded-2 rounded-lg-3">
                                            <img src="{{ asset($merchandise->path) }}" class="h-100 inner-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="fs-5 fs-lg-2x fw-bolder text-white text-uppercase">
                                    {{ $merchandise->code }}
                                </div>
                                <div class="fs-6 fs-lg-1 fs-bold text-white mb-3 mb-lg-5 text-uppercase">
                                    {{ format_rupiah($merchandise->price) }}
                                </div>
                                <a href="https://wa.me/6283164867519?text=Hallo%20Kak,%20saya%20atas%20nama%0aNama%20:%20….%0aAlamat%20:%20….%0aTertarik%20membeli%20produk%20{{ $merchandise->code }}"
                                    target="_blank"
                                    class="btn btn-warning w-100 hover-elevate-up border border-4 shadow py-2 py-lg-4 rounded-4">
                                    <span class="fs-7 fs-lg-1 fw-bolder">Beli</span>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <button class="btn btn-warning btn-icon btn-active-color-primary" id="go_back">
                        <span class="svg-icon svg-icon-3x">
                            <i class="fa-solid fa-chevron-left"></i>
                        </span>
                    </button>
                    <button class="btn btn-warning btn-icon btn-active-color-primary" id="go_next">
                        <span class="svg-icon svg-icon-3x">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
