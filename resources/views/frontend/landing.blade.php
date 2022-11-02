@extends('frontend.templates.master')

@section('content')
    <section class="my-5 my-lg-10">
        <div class="py-5 py-lg-10">
            <div class="bgi-no-repeat bgi-size-cover bgi-position-center position-relative min-h-175px mw-100"
                style="background-image: url('{{ asset('/assets/media/illustrations/cloud-pattern.png') }}')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mb-12">
                                <div class="fs-5 text-muted fw-semibold mb-7" id="team"
                                    data-kt-scroll-offset="{default: 100, lg: 150}">
                                    Promoted by Ramlan Foundation
                                </div>
                                <img class="mw-75 h-auto mh-250px" alt=""
                                    src="{{ asset('/assets/media/logos/wonogiri-fest-logo.png') }}">
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

    @include('frontend.home.lineup')

    @include('frontend.home.rundown')

    @include('frontend.home.ticket')

    @include('frontend.home.youtube')

    @include('frontend.home.experience')

    @include('frontend.home.instagram')

    <section class="my-5 my-lg-10 bg-tagline">
        <div class="py-5 py-lg-10">
            <div class="container">
                <div class="row justify-content-center px-8 px-lg-10">
                    <div class="col-xl-10 col-xxl-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="d-flex justify-content-center flex-wrap h-100">
                                    <img src="{{ asset('/assets/media/illustrations/tagline.png') }}"
                                        class="mh-250px mw-100 mb-9 my-auto mx-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.home.sponsor')
@endsection
