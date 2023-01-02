@extends('frontend.templates.master')

@section('content')
    <section class="my-5 my-lg-10">
        <div class="container mt-10">
            <div class="row justify-content-center px-8 px-lg-10">
                <div class="col-xl-9 col-xxl-10">
                    <div class="fs-4x fw-semibold text-center text-white font-title ls-3 mt-0 mt-lg-5 mb-5 mb-lg-15">
                        BERITA KAMI
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-10">
                            <div class="card rounded-0 shadow shadow-sm h-100">
                                <div class="card-body p-0">
                                    <div class="bgi-no-repeat bgi-size-cover bgi-position-center position-relative min-h-150px min-h-lg-300px w-100 h-auto"
                                        style="background-image: url('{{ asset('/assets/media/illustrations/login-bg.jpg') }}')">
                                    </div>
                                </div>
                                <div class="card-footer p-4 py-6">
                                    <div class="fs-7 fs-lg-5 text-gray-800 fw-bold lh-base mb-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, rem!
                                    </div>
                                    <div class="fs-8 fs-lg-6 text-gray-800 fw-normal">
                                        3 Januari 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
