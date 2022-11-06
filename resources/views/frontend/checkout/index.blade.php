@extends('frontend.templates.master')

@section('styles')
@endsection

@section('content')
    <div class="container my-15">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <!--begin::Stepper-->
                        <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                            <!--begin::Nav-->
                            <div class="stepper-nav flex-center flex-wrap mb-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Informasi
                                            </h3>

                                            <div class="stepper-desc">
                                                Description
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stepper-line h-40px"></div>
                                </div>
                                <!--end::Step 1-->

                                <!--begin::Step 2-->
                                <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">2</span>
                                        </div>
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Pembayaran
                                            </h3>
                                            <div class="stepper-desc">
                                                Description
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stepper-line h-40px"></div>
                                </div>
                                <!--end::Step 2-->

                                <!--begin::Step 3-->
                                <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">3</span>
                                        </div>
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Pratinjau
                                            </h3>
                                            <div class="stepper-desc">
                                                Description
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stepper-line h-40px"></div>
                                </div>
                                <!--end::Step 3-->
                            </div>
                            <!--end::Nav-->

                            <!--begin::Form-->
                            <form class="form w-lg-500px mx-auto" novalidate="novalidate"
                                id="kt_stepper_example_basic_form">
                                <!--begin::Group-->
                                <div class="mb-5">
                                    <!--begin::Step 1-->
                                    <div class="flex-column current" data-kt-stepper-element="content">
                                        <div class="fv-row mb-5">
                                            <label class="form-label">Nomor Indentitas
                                                <span class="ms-1 fs-9 fw-bold text-danger">(NIK/ SIM)</span>
                                            </label>
                                            <input type="text" class="form-control form-control-lg" id="identity_number"
                                                name="identity_number" placeholder="Masukan nomor identitas Anda"
                                                value="" />
                                        </div>
                                        <div class="fv-row mb-5">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control form-control-lg" id="name"
                                                name="name" placeholder="Masukan nama lengkap" value="" />
                                        </div>
                                        <div class="fv-row mb-5">
                                            <label class="form-label">Alamat</label>
                                            <textarea class="form-control form-control-lg" data-kt-autosize="true" id="address" name="address"
                                                placeholder="Masukan alamat lengkap" value=""></textarea>
                                        </div>
                                        <div class="fv-row mb-5">
                                            <label class="form-label">No Telepon</label>
                                            <input type="number" class="form-control form-control-lg" id="phone"
                                                name="phone" placeholder="Masukan nomor telepon" value="" />
                                        </div>
                                        <div class="fv-row mb-5">
                                            <label class="form-label">Email Aktif</label>
                                            <input type="email" class="form-control form-control-lg" id="email"
                                                name="email" placeholder="Masukan nomor telepon" value="" />
                                        </div>
                                    </div>
                                    <!--begin::Step 1-->

                                    <!--begin::Step 2-->
                                    <div class="flex-column" data-kt-stepper-element="content">
                                        <div class="d-flex flex-column flex-wrap">
                                            <div class="fs-2 text-gray-800 fw-bold">
                                                Metode Pembayaran
                                            </div>
                                            <div class="fs-5 text-gray-400 fw-semibold mb-5">
                                                Silahkan pilih salah satu metode pembayaran yang tersedia
                                            </div>
                                        </div>
                                        <!--begin::Accordion-->
                                        <div class="accordion" id="kt_accordion_1">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="kt_accordion_1_header_1">
                                                    <button class="accordion-button fs-4 fw-semibold" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1"
                                                        aria-expanded="true" aria-controls="kt_accordion_1_body_1">
                                                        Bank Transfer
                                                    </button>
                                                </h2>
                                                <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show"
                                                    aria-labelledby="kt_accordion_1_header_1"
                                                    data-bs-parent="#kt_accordion_1">
                                                    <div class="accordion-body">
                                                        <label
                                                            class="border border-solid boder-secondary rounded-3 p-5 form-check-label mb-5 w-100"
                                                            for="mandiri">
                                                            <div class="d-flex justify-content-between flex-wrap px-2">
                                                                <div class="d-flex align-items-center flex-wrap">
                                                                    <div class="symbol symbol-50px px-1 me-5">
                                                                        <div class="symbol-label symbol-label-fit"
                                                                            style="background-image:url('{{ asset('/assets/media/bank/mandiri.png') }}')">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-column">
                                                                        <div
                                                                            class="fs-3 fw-bolder text-gray-900 lh-1 mb-2">
                                                                            Bank Mandiri
                                                                        </div>
                                                                        <span class="text-muted fs-6">
                                                                            Transfer ke rekening Mandiri
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="mandiri" name="bank" value="" />
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <label
                                                            class="border border-solid boder-secondary rounded-3 p-5 form-check-label mb-5 w-100"
                                                            for="bca">
                                                            <div class="d-flex justify-content-between flex-wrap px-2">
                                                                <div class="d-flex align-items-center flex-wrap">
                                                                    <div class="symbol symbol-50px px-1 me-5">
                                                                        <div class="symbol-label symbol-label-fit"
                                                                            style="background-image:url('{{ asset('/assets/media/bank/bca.png') }}')">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-column">
                                                                        <div
                                                                            class="fs-3 fw-bolder text-gray-900 lh-1 mb-2">
                                                                            Bank BCA
                                                                        </div>
                                                                        <span class="text-muted fs-6">
                                                                            Transfer ke rekening BCA
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="bca" name="bank" value="" />
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="kt_accordion_1_header_2">
                                                    <button class="accordion-button fs-4 fw-semibold collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#kt_accordion_1_body_2" aria-expanded="false"
                                                        aria-controls="kt_accordion_1_body_2">
                                                        Bayar di Loket
                                                    </button>
                                                </h2>
                                                <div id="kt_accordion_1_body_2" class="accordion-collapse collapse"
                                                    aria-labelledby="kt_accordion_1_header_2"
                                                    data-bs-parent="#kt_accordion_1">
                                                    <div class="accordion-body">
                                                        <label class="form-check-label" for="manual">
                                                            <div
                                                                class="d-flex justify-content-start flex-wrap my-auto mb-5">
                                                                <div class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="manual" name="bank" value="" />
                                                                    <span
                                                                        class="fs-3 fw-bolder text-gray-900 lh-1 ms-2 my-auto">
                                                                        Bayar di Loket
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="fs-6 fw-semibold lh-lg text-gray-600">
                                                                Silahkan datang ke Gedung xxx. Pada jam operasional dari jam
                                                                xxx
                                                                sampai xxx
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Accordion-->
                                    </div>
                                    <!--begin::Step 2-->

                                    <!--begin::Step 3-->
                                    <div class="flex-column" data-kt-stepper-element="content">

                                    </div>
                                    <!--begin::Step 3-->
                                </div>
                                <!--end::Group-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-light btn-active-light-primary"
                                            data-kt-stepper-action="previous">
                                            Kembali
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                            <span class="indicator-label">
                                                Simpan
                                            </span>
                                            <span class="indicator-progress">
                                                Mohon tunggu...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                            Continue
                                        </button>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Stepper-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 d-none d-lg-block">
                <div class="card card-flush">
                    <div class="card-header">
                        <h3 class="card-title fw-bolder">INFORMASI PESANAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-2">
                                <div class="symbol symbol-50px border">
                                    <div class="symbol-label"
                                        style="background-image:url('{{ asset('/assets/media/bank/bca.png') }}')"></div>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex flex-column flex-wrap ms-2 mb-3">
                                        <div class="fs-3 fw-bolder text-gray-800">
                                            Early Bird
                                        </div>
                                        <div class="fs-6 text-muted">
                                            Ticket untuk Early Bird
                                        </div>
                                    </div>
                                    <div class="fs-5 fw-bold text-gray-600 my-auto">
                                        Rp 200.000,-
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center w-100">
                            <div class="d-flex flex-stack w-75 mb-3">
                                <button type="button" class="btn btn-sm btn-light-primary">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <input type="text"
                                    class="form-control form-control-sm form-control-solid text-center fw-bold fs-4 mx-1"
                                    name="amount" value="2" />
                                <button type="button" class="btn btn-sm btn-light-primary">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="separator separator-dashed border-primary my-7"></div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="fs-2 text-dark fw-bolder">
                                TOTAL
                            </div>
                            <div class="fs-3 text-gray-700 fw-bolder">
                                Rp 400.000,0
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Stepper lement
        var element = document.querySelector("#kt_stepper_example_basic");

        // Initialize Stepper
        var stepper = new KTStepper(element);

        // Handle next step
        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious(); // go previous step
        });
    </script>
@endsection
