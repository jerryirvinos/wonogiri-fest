@extends('frontend.templates.master')

@section('styles')
@endsection

@section('content')
    <div class="container my-15">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-body px-5 px-lg-9">
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
                            <form class="form w-100 w-lg-75 mx-auto" novalidate="novalidate"
                                id="kt_stepper_example_basic_form">
                                <!--begin::Group-->
                                <div class="mb-5">
                                    <!--begin::Step 1-->
                                    <div class="flex-column current" data-kt-stepper-element="content">
                                        <div class="card card-flush shadow-sm rounded-4 mb-10">
                                            <div class="card-header px-3 px-lg-7 pt-5">
                                                <h1 class="card-title fw-bolder text-gray-900 align-items-start">
                                                    Detail Pemesan
                                                </h1>
                                            </div>
                                            <div class="card-body px-3 px-lg-7 pt-0">
                                                <div class="fv-row mb-5">
                                                    <label class="form-label">Nomor Indentitas</label>
                                                    <input type="number" class="form-control form-control-lg"
                                                        name="identity_number_order"
                                                        placeholder="Masukan nomor identitas Anda" value=""
                                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        min="0" maxlength="16" />
                                                    <span class="ms-1 fs-9 text-gray-500">Dapat memakai No
                                                        NIK KTP/Paspor (tanpa tanda baca dan gelar)</span>
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <label class="form-label">Nama</label>
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="name" name="name_order" placeholder="Masukan nama lengkap"
                                                        value="" />
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <label class="form-label">Alamat</label>
                                                    <textarea class="form-control form-control-lg" data-kt-autosize="true" id="address_order" name="address_order"
                                                        placeholder="Masukan alamat lengkap" value=""></textarea>
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <label class="form-label">No Telepon</label>
                                                    <input type="number" class="form-control form-control-lg"
                                                        id="phone" name="phone_order"
                                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        min="0" maxlength="13" placeholder="Masukan nomor telepon"
                                                        value="" />
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <label class="form-label">Email Aktif</label>
                                                    <input type="email" class="form-control form-control-lg"
                                                        id="email" name="email_order"
                                                        placeholder="Masukan nomor telepon" value="" />
                                                    <span class="ms-1 fs-9 text-gray-500">
                                                        E-ticket akan dikirim ke email pemesan ini.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card card-flush shadow-sm rounded-4">
                                            <div class="card-header px-3 px-lg-7 pt-5">
                                                <h1 class="card-title fw-bolder text-gray-900 align-items-start">
                                                    Detail Pengunjung
                                                </h1>
                                            </div>
                                            <div class="card-body px-3 px-lg-7 pt-0">
                                                <div class="card border rounded-4 mb-5">
                                                    <div class="card-header px-3 px-lg-7 pt-5 border-0 bg-light">
                                                        <h1 class="card-title fw-bolder text-gray-900 align-items-start">
                                                            Pengunjung 1
                                                        </h1>
                                                        <div class="card-toolbar">
                                                            <div
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <label class="form-check-label me-3"
                                                                    for="flexSwitchDefault">
                                                                    Samakan dengan Pemesan
                                                                </label>

                                                                <input class="form-check-input px-9 sameOrder"
                                                                    type="checkbox" value=""
                                                                    id="flexSwitchDefault" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-3 px-lg-7 pt-3">
                                                        <div class="fv-row mb-5 input-text">
                                                            <label class="form-label">Nomor Indentitas</label>
                                                            <input type="text" class="form-control form-control-lg"
                                                                id="identity_number1" name="identity_number"
                                                                placeholder="Masukan nomor identitas Anda" value=""
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                min="0" maxlength="16" />
                                                            <span class="ms-1 fs-9 text-gray-500">Dapat memakai No
                                                                NIK KTP/Paspor (tanpa tanda baca dan gelar)</span>
                                                        </div>
                                                        <div class="fv-row mb-5 input-text">
                                                            <label class="form-label">Nama</label>
                                                            <input type="text" class="form-control form-control-lg"
                                                                id="name1" name="name"
                                                                placeholder="Masukan nama lengkap" value="" />
                                                        </div>
                                                        <div class="fv-row mb-5 input-text">
                                                            <label class="form-label">Alamat</label>
                                                            <textarea class="form-control form-control-lg" data-kt-autosize="true" id="address1" name="address"
                                                                placeholder="Masukan alamat lengkap" value=""></textarea>
                                                        </div>
                                                        <div class="fv-row mb-5 input-text">
                                                            <label class="form-label">No Telepon</label>
                                                            <input type="number" class="form-control form-control-lg"
                                                                id="phone1" name="phone"
                                                                placeholder="Masukan nomor telepon"
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                min="0" maxlength="13" value="" />
                                                        </div>
                                                        <div class="fv-row mb-5 input-text">
                                                            <label class="form-label">Email Aktif</label>
                                                            <input type="email" class="form-control form-control-lg"
                                                                id="email1" name="email"
                                                                placeholder="Masukan nomor telepon" value="" />
                                                            <span class="ms-1 fs-9 text-gray-500">
                                                                E-ticket akan dikirim ke email pemesan ini.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($total)
                                                    @for ($i = 0; $i < $total - 1; $i++)
                                                        <div class="card border rounded-4 mb-5">
                                                            <div class="card-header px-3 px-lg-7 pt-5 border-0 bg-light">
                                                                <h1
                                                                    class="card-title fw-bolder text-gray-900 align-items-start">
                                                                    Pengunjung {{ $i + 2 }}
                                                                </h1>
                                                            </div>
                                                            <div class="card-body px-3 px-lg-7 pt-3">
                                                                <div class="fv-row mb-5 input-text">
                                                                    <label class="form-label">Nomor Indentitas</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        name="identity_number"
                                                                        placeholder="Masukan nomor identitas Anda"
                                                                        value="" />
                                                                    <span class="ms-1 fs-9 text-gray-500">Dapat memakai No
                                                                        NIK KTP/Paspor (tanpa tanda baca dan gelar)</span>
                                                                </div>
                                                                <div class="fv-row mb-5 input-text">
                                                                    <label class="form-label">Nama</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        name="name" placeholder="Masukan nama lengkap"
                                                                        value="" />
                                                                </div>
                                                                <div class="fv-row mb-5 input-text">
                                                                    <label class="form-label">Alamat</label>
                                                                    <textarea class="form-control form-control-lg" data-kt-autosize="true" name="address"
                                                                        placeholder="Masukan alamat lengkap" value=""></textarea>
                                                                </div>
                                                                <div class="fv-row mb-5 input-text">
                                                                    <label class="form-label">No Telepon</label>
                                                                    <input type="number"
                                                                        class="form-control form-control-lg"
                                                                        name="phone" placeholder="Masukan nomor telepon"
                                                                        value="" />
                                                                </div>
                                                                <div class="fv-row mb-5 input-text">
                                                                    <label class="form-label">Email Aktif</label>
                                                                    <input type="email"
                                                                        class="form-control form-control-lg"
                                                                        name="email" placeholder="Masukan nomor telepon"
                                                                        value="" />
                                                                    <span class="ms-1 fs-9 text-gray-500">
                                                                        E-ticket akan dikirim ke email pemesan ini.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                @endif
                                            </div>
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
                                                        @foreach ($banks as $bank)
                                                            <label
                                                                class="border border-solid boder-secondary rounded-3 p-5 form-check-label mb-5 w-100"
                                                                for="mandiri">
                                                                <div class="d-flex justify-content-between flex-wrap px-2">
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="symbol symbol-50px px-1 me-5">
                                                                            <div class="symbol-label symbol-label-fit"
                                                                                style="background-image:url('{{ asset($bank->logos) }}')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex flex-column">
                                                                            <div
                                                                                class="fs-3 fw-bolder text-gray-900 lh-1 mb-2">
                                                                                {{ $bank->name }}
                                                                            </div>
                                                                            <span class="text-muted fs-6">
                                                                                Transfer ke rekening {{ $bank->name }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="radio"
                                                                            id="{{ $bank->name }}" name="bank"
                                                                            value="" />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        @endforeach

                                                        {{-- <label
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
                                                        </label> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Accordion-->
                                    </div>
                                    <!--begin::Step 2-->

                                    <!--begin::Step 3-->
                                    <div class="flex-column" data-kt-stepper-element="content">
                                        <div class="d-flex justify-content-center flex-wrap">
                                            <div class="row justify-content-center my-5 my-lg-15">
                                                <div class="col-xl-12 col-xxl-10 text-center">
                                                    <img class="w-25 mw-50 mw-lg-50 h-auto text-center mx-auto mb-10"
                                                        alt=""
                                                        src="{{ asset('/assets/media/bank/mandiri.png') }}">
                                                    <h4 class="fw-bold text-gray-800">TATA CARA PEMBAYARAN MELALUI BANK ...
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--begin::Step 3-->
                                </div>
                                <!--end::Group-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack mt-15">
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
                <div class="card card-flush position-fixed card-checkout">
                    <div class="card-header">
                        <h3 class="card-title fw-bolder">INFORMASI PESANAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-2 px-0">
                                <div class="border border-secondary border shadow-xs rounded-1 px-2 my-auto">
                                    <div class="bgi-no-repeat bgi-size-contain bgi-position-center w-100 min-h-40px"
                                        style="background-image:url('{{ asset('/assets/media/logos/wonogiri-fest-logo.png') }}')">
                                    </div>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex flex-column flex-wrap mb-3">
                                        <div class="fs-3 fw-bolder text-gray-800">
                                            {{ $ticket_type->name }}
                                        </div>
                                        <div class="fs-6 text-muted">
                                            {{ $ticket_type->detail }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="fs-6 text-gray-800">
                                        Jumlah ticket <span class="fw-bold text-gray-700">(x{{ $total }})</span>
                                    </div>
                                    <div class="fs-4 fw-semibold text-gray-800 my-auto">
                                        {{ format_rupiah($ticket_type->price) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="separator separator-dashed border-secondary my-5"></div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="fs-2 text-gray-700 fw-semibold">
                                Total Pembayaran
                            </div>
                            <div class="fs-3 text-primary fw-bolder">
                                {{ format_rupiah($hasil) }}
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

        $('.sameOrder').on('change', function() {
            if ($(this).is(':checked')) {
                document.getElementById('identity_number1').value = $("[name=identity_number_order]").val();
                document.getElementById('name1').value = $("[name=name_order]").val();
                document.getElementById('address1').value = $("[name=address_order]").val();
                document.getElementById('phone1').value = $("[name=phone_order]").val();
                document.getElementById('email1').value = $("[name=email_order]").val();
            } else {
                $('.input-text > input').val("");
            }
        });
    </script>
@endsection
