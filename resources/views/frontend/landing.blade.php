@extends('frontend.templates.master')

@section('content')
    <img src="{{ asset('/assets/media/illustrations/header-bg.svg') }}" alt=""
        class="position-fixed z-index-n2 top-0 w-100 gap-2">
    <section class="my-5 my-lg-10">
        <div class="container mt-10">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="fs-8 fs-lg-5 text-gray-200 fw-semibold mb-5 mb-lg-10" id="team"
                            data-kt-scroll-offset="{default: 100, lg: 150}">
                            Promoted by <span class="fw-bold fs-4">Bedjo Rumah Kreatif</span>
                        </div>
                        <img class="mw-100 mw-lg-75 h-auto mh-250px" alt=""
                            src="{{ asset('/assets/media/logos/wonogiri-fest-logo.png') }}">
                        <div class="fs-4 fs-lg-2x fw-semibold text-gray-300 my-15">
                            25 - 26 Febuari | Lapangan Pringgodani, Wonogiri
                        </div>
                        <a href="#"
                            class="btn btn-outline btn-outline btn-outline-warning btn-active-light-warning mb-10">
                            <span class="fw-bold fs-1">Beli Tiket</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.home.lineup')

    @include('frontend.home.ticket')

    @include('frontend.home.rundown')

    @include('frontend.home.youtube')

    @include('frontend.home.experience')

    <section class="my-5 my-lg-10 bg-tagline">
        <div class="d-flex justify-content-center flex-wrap h-100">
            <img src="{{ asset('/assets/media/illustrations/tagline.png') }}" class="mh-auto w-100 mw-100 my-auto"
                alt="">
        </div>
    </section>

    @include('frontend.home.sponsor')
@endsection
