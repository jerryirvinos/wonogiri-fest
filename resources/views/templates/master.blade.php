<!DOCTYPE html>
<html lang="en">

<head>
    <base href="" />
    <title>
        Wonogiri Fest
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="Wonogiri Fest" />
    <meta name="keywords" content="Wonogiri Fest" />
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="Wonogiri Fest" />
    <meta property="og:url" content="https://wonogirifest.co.id" />
    <meta property="og:site_name" content="Wonogiri Fest" />
    <link rel="canonical" href="https://wonogirifest.com" />
    <link rel="shortcut icon" href="{{ asset('/assets/media/logos/logo-ramlan.png') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ultra" />
    <!--end::Fonts-->
    <link href="{{ asset('/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/plugins/custom/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/custom-me.css') }}" rel="stylesheet" type="text/css" />
    @yield('styles')
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            @include('templates.aside')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div class="header-mobile bg-base py-3">
                    <div class="container d-flex flex-stack">
                        <div class="d-flex  align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="#">
                                <img alt="Logo" src="{{ asset('/assets/media/logos/logo-ramlan.png') }}"
                                    class="h-35px" />
                            </a>
                        </div>
                        <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
                            <i class="fa-duotone fa-align-right text-white fa-2x"></i>
                        </button>
                    </div>
                </div>
                @include('templates.header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container-xxl" id="kt_content_container">
                        <div class="row g-5 g-xl-8">
                            @hasSection('content-dasboard')
                                @yield('content-dasboard')
                            @else
                                <div class="card">
                                    <div class="card-body p-0">
                                        @yield('content')
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @include('templates.footer')
            </div>
        </div>
    </div>
    @include('frontend.templates.tools.scrolltop')
    <script>
        var hostUrl = "{{ asset('/assets/') }}";
    </script>
    <script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('/assets/plugins/custom/fontawesome/js/all.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
