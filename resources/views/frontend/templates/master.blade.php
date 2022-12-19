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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="Wonogiri Fest" />
    <meta property="og:url" content="https://wonogirifest.com" />
    <meta property="og:site_name" content="Wonogiri Fest" />
    <link rel="canonical" href="https://wonogirifest.com" />
    <link rel="shortcut icon" href="{{ asset('/assets/media/logos/wonogirifest-icon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = "{{ asset('/assets/plugins/global/plugins.bundle.css') }}";
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = "https://fonts.googleapis.com/css?family=Ultra";
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = "{{ asset('/assets/plugins/custom/fontawesome/css/all.min.css') }}";
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
    <!--end::Fonts-->
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = "{{ asset('/assets/plugins/global/plugins.bundle.css') }}";
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = "{{ asset('/assets/plugins/custom/fontawesome/css/all.min.css') }}";
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
    <link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/custom-me.css') }}" rel="stylesheet" type="text/css" />
    @yield('styles')
</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
    class="{{ Request::segment(1) == 'checkout' ? 'bg-light' : 'bg-base' }} position-relative">
    <div class="d-flex flex-column flex-root">
        @include('frontend.templates.header')
        @if (Request::segment(1) != 'checkout')
            <img src="{{ asset('/assets/media/illustrations/header-bg.svg') }}" alt=""
                class="position-fixed z-index-n2 top-0 w-100 gap-2">
        @endif
        @yield('content')
        @if (Request::segment(1) != 'checkout')
            @include('frontend.templates.footer')
        @endif
    </div>
    @include('frontend.templates.tools.scrolltop')
    <script>
        var hostUrl = "{{ asset('/') }}";
    </script>
    <script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    @yield('scripts')
    @if (session('success'))
        <script>
            $(document).ready(function() {
                toastr.success("{{ session('success') }}");
            });
        </script>
    @endif

    @if (session('warning'))
        <script>
            $(document).ready(function() {
                toastr.warning("{{ session('warning') }}");
            });
        </script>
    @endif
</body>

</html>
