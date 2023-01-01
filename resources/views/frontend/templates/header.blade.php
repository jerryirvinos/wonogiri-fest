<div class="{{ Request::segment(1) != 'checkout' ? 'bg-header' : 'bg-white' }}">
    <div class="landing-header {{ Request::segment(1) != 'checkout' ? 'bg-landing' : 'bg-landing-checkout' }}"
        data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-equal">
                    @if (Request::segment(1) == '')
                        <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                            id="kt_landing_menu_toggle">
                            <i class="fa-duotone fa-bars-staggered fs-2x text-white"></i>
                        </button>
                    @endif
                    <a href="/">
                        @if (Request::segment(1) != 'checkout')
                            <img alt="Logo" src="{{ asset('/assets/media/logos/logo-wonogirifest.png') }}"
                                class="logo-default h-65px h-lg-75px my-auto" />
                            <img alt="Logo" src="{{ asset('/assets/media/logos/logo-wonogirifest.png') }}"
                                class="logo-sticky h-45px h-lg-65px my-auto" />
                        @else
                            <div class="fs-2hx fw-bolder text-gray-800">
                                <span class="text-primary">Mundhut</span> Ticket
                            </div>
                        @endif
                    </a>
                </div>
                <div class="d-lg-block" id="kt_header_nav_wrapper">
                    @if (Request::segment(1) == '')
                        <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                            data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                            data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                            data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                            <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-200 menu-state-title-warning nav nav-flush fs-5 fw-semibold"
                                id="kt_landing_menu">
                                <div class="menu-item">
                                    <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#lineup"
                                        data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                        Lineup
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#ticket"
                                        data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                        Tiket
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#merchandise"
                                        data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                        Merchandise
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="{{ url('/aboutus/') }}"
                                        data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                        About Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                @if (Request::segment(1) != 'checkout')
                    <div class="flex-equal text-end ms-1">
                        <a href="https://www.instagram.com/wonogirifest/" class="btn btn-icon">
                            <i
                                class="fa-brands fa-instagram fs-2x text-hover-warning d-none d-lg-block {{ Request::segment(1) == 'checkout' ? 'text-gray-700' : 'text-white' }}"></i>
                        </a>
                        <a href="https://www.facebook.com/wonogirifest" class="btn btn-icon">
                            <i
                                class="fa-brands fa-facebook fs-2x text-hover-warning d-none d-lg-block {{ Request::segment(1) == 'checkout' ? 'text-gray-700' : 'text-white' }}"></i>
                        </a>
                        <a href="https://twitter.com/wonogirifest" class="btn btn-icon">
                            <i
                                class="fa-brands fa-twitter fs-2x text-hover-warning d-none d-lg-block {{ Request::segment(1) == 'checkout' ? 'text-gray-700' : 'text-white' }}"></i>
                        </a>
                        <a href="https://www.tiktok.com/@wonogirifest/" class="btn btn-icon">
                            <i
                                class="fa-brands fa-tiktok fs-2x text-hover-warning d-none d-lg-block {{ Request::segment(1) == 'checkout' ? 'text-gray-700' : 'text-white' }}"></i>
                        </a>
                        <a href="https://www.youtube.com/@wonogirifest/" class="btn btn-icon">
                            <i
                                class="fa-brands fa-youtube fs-2x text-hover-warning d-none d-lg-block {{ Request::segment(1) == 'checkout' ? 'text-gray-700' : 'text-white' }}"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!--end::Header Section-->
