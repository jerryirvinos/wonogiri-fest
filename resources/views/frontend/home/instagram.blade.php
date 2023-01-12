{{-- <section class="my-5 my-lg-10">
    <div class="container mt-10">
        <div class="row justify-content-center px-8 px-lg-10">
            <div class="col-xl-9 col-xxl-10">
                <div class="fs-4x fw-semibold text-center text-white font-title ls-3 mt-0 mt-lg-5 mb-5 mb-lg-15">
                    BERITA KAMI
                </div>
                <div class="row">
                    @foreach ($instagram as $item)
                        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-10">
                            <div class="card rounded-0 shadow shadow-sm h-100">
                                <div class="card-body p-0">
                                    <div class="bgi-no-repeat bgi-size-cover bgi-position-center position-relative min-h-150px min-h-lg-300px w-100 h-auto"
                                        style="background-image: url('{{ $item->path }}')">
                                    </div>
                                </div>
                                <div class="card-footer p-4 py-6">
                                    <div class="fs-7 fs-lg-5 text-gray-800 fw-bold lh-base mb-2">
                                        {{ $item->title }}
                                    </div>
                                    <div class="fs-8 fs-lg-6 text-gray-800 fw-normal">
                                        {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="my-5 my-lg-10">
    <div class="py-5 py-lg-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-12">
                        <div class="fs-4x text-white font-title ls-4 mb-7" id="news"
                            data-kt-scroll-offset="{default: 100, lg: 150}">
                            NEWS
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center px-8 px-lg-10">
                <div class="col-xl-10 col-xxl-12">
                    <div class="row">
                        @foreach ($instagram as $item)
                            <div class="col-lg-4 col-sm-6">
                                <div class="card card-flush shadow-lg">
                                    <div class="card-header px-4">
                                        <h3 class="card-title align-items-start flex-column">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-35px me-5">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('/assets/media/illustrations/instagram-profile.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <div class="text-dark fw-bold text-hover-primary fs-5">
                                                        wonogirifest
                                                    </div>
                                                    <div class="text-muted fw-semibold text-muted fs-7">
                                                        295 followers
                                                    </div>
                                                </div>
                                            </div>
                                        </h3>
                                    </div>
                                    <div class="card-body px-0 pt-0 pb-5">
                                        <div class="symbol symbol-200px w-100 mb-5">
                                            <div class="symbol-label rounded-0 w-100"
                                                style="background-image:url('{{ $item->path }}')">
                                            </div>
                                        </div>
                                        <div class="px-4">
                                            <div class="text-gray-800 fw-semibold lh-base">
                                                {{ $item->title }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer pt-0">
                                        <div class="d-flex justify-content-center w-100">
                                            <a href=" {{ $item->link }}" class="btn btn-sm btn-primary">View
                                                Profile</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-lg-3 col-sm-6">
                            <div class="card card-flush shadow-lg">
                                <div class="card-header px-4">
                                    <h3 class="card-title align-items-start flex-column">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-5">
                                                <img class="rounded-circle"
                                                    src="{{ asset('/assets/media/illustrations/instagram-profile.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <div class="text-dark fw-bold text-hover-primary fs-5">
                                                    wonogirifest
                                                </div>
                                                <div class="text-muted fw-semibold text-muted fs-7">
                                                    295 followers
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                                <div class="card-body px-0 pt-0 pb-5">
                                    <div class="symbol symbol-200px w-100 mb-5">
                                        <div class="symbol-label rounded-0 w-100"
                                            style="background-image:url('{{ asset('/assets/media/illustrations/instagram-post.jpg') }}')">
                                        </div>
                                    </div>
                                    <div class="px-4">
                                        <div class="text-gray-800 fw-semibold lh-base">
                                            Siap Menyambut Wonogiri Festival 2023 ?
                                            Berbicara tentang kuliner di Wonogiri..
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer pt-0">
                                    <div class="d-flex justify-content-center w-100">
                                        <a href="#" class="btn btn-sm btn-primary">View Profile</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-flush shadow-lg">
                                <div class="card-header px-4">
                                    <h3 class="card-title align-items-start flex-column">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-5">
                                                <img class="rounded-circle"
                                                    src="{{ asset('/assets/media/illustrations/instagram-profile.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <div class="text-dark fw-bold text-hover-primary fs-5">
                                                    wonogirifest
                                                </div>
                                                <div class="text-muted fw-semibold text-muted fs-7">
                                                    295 followers
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                                <div class="card-body px-0 pt-0 pb-5">
                                    <div class="symbol symbol-200px w-100 mb-5">
                                        <div class="symbol-label rounded-0 w-100"
                                            style="background-image:url('{{ asset('/assets/media/illustrations/instagram-post.jpg') }}')">
                                        </div>
                                    </div>
                                    <div class="px-4">
                                        <div class="text-gray-800 fw-semibold lh-base">
                                            Siap Menyambut Wonogiri Festival 2023 ?
                                            Berbicara tentang kuliner di Wonogiri..
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer pt-0">
                                    <div class="d-flex justify-content-center w-100">
                                        <a href="#" class="btn btn-sm btn-primary">View Profile</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-flush shadow-lg">
                                <div class="card-header px-4">
                                    <h3 class="card-title align-items-start flex-column">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-5">
                                                <img class="rounded-circle"
                                                    src="{{ asset('/assets/media/illustrations/instagram-profile.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <div class="text-dark fw-bold text-hover-primary fs-5">
                                                    wonogirifest
                                                </div>
                                                <div class="text-muted fw-semibold text-muted fs-7">
                                                    295 followers
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                                <div class="card-body px-0 pt-0 pb-5">
                                    <div class="symbol symbol-200px w-100 mb-5">
                                        <div class="symbol-label rounded-0 w-100"
                                            style="background-image:url('{{ asset('/assets/media/illustrations/instagram-post.jpg') }}')">
                                        </div>
                                    </div>
                                    <div class="px-4">
                                        <div class="text-gray-800 fw-semibold lh-base">
                                            Siap Menyambut Wonogiri Festival 2023 ?
                                            Berbicara tentang kuliner di Wonogiri..
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer pt-0">
                                    <div class="d-flex justify-content-center w-100">
                                        <a href="#" class="btn btn-sm btn-primary">View Profile</a>
                                    </div>

                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
