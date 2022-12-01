@extends('frontend.templates.master')

@section('content')
<section class="my-5 my-lg-10">
    <div class="container mt-10">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="fs-8 fs-lg-5 text-gray-200 fw-semibold mb-5 mb-lg-10" id="team"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        Promoted by <span class="fw-bold fs-4">Bedjo Rumah Kreatif</span>
                    </div>
                    <img class="mw-100 mw-lg-100 w-75 h-auto mh-450px" alt=""
                        src="{{ asset('/assets/media/logos/wonogiri-fest-logo.png') }}">
                    <div class="fs-4 fs-lg-2x fw-semibold text-gray-300 my-15">
                        25 - 26 Febuari | Lapangan Pringgodani, Wonogiri
                    </div>
                    <a href="#" class="btn btn-outline btn-outline btn-outline-warning btn-active-light-warning mb-10">
                        <span class="fw-bold fs-1">Beli Tiket</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.home.lineup')

@include('frontend.home.ticket')

@include('frontend.home.youtube')

@include('frontend.home.experience')

<section class="my-5 my-lg-10 bg-tagline">
    <div class="d-flex justify-content-center flex-wrap h-100">
        <img src="{{ asset('/assets/media/illustrations/tagline.png') }}" class="mh-auto w-100 mw-100 my-auto" alt="">
    </div>
</section>

@include('frontend.home.sponsor')

{{-- <div class="modal fade" tabindex="-1" id="modalcheckout">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content glassMorph">
            <div class="modal-body pb-3">
                <div class="fs-5 fs-lg-3 text-gray-800 fw-bold mb-5">
                    Jumlah Tiket
                </div>
                <div class="rounded border border-gray-200 bg-white shadow-xs p-6">
                    <div class="row">
                        <div class="col-lg-8 col-sm-6">
                            <div class="d-flex justify-content-between flex-column flex-wrap my-auto">
                                <div class="fs-7 fs-lg-5 text-gray-600">
                                    Harga Satuan
                                </div>
                                <div class="fs-5 fs-lg-3 text-gray-800 fw-bolder">
                                    Rp 0
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="d-flex flex-stack gap-5 h-100 my-auto">
                                <button type="button"
                                    class="btn btn-icon rounded-circle btn-outline btn-outline-warning btn-active-light-warning w-30px h-30px p-4">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <div class="fs-5 fs-lg-3 text-gray-800">
                                    1
                                </div>
                                <button type="button"
                                    class="btn btn-icon rounded-circle btn-outline btn-outline-warning btn-active-light-warning w-30px h-30px p-4">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center border-0 pt-0 pb-3">
                <button type="button" class="btn btn-warning me-2">Lanjut</button>
                <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div> --}}
@endsection