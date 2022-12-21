<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../" />
    <title>{{ env('APP_NAME') }}</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta property="og:title" content="{{ env('APP_NAME') }}" />
    <meta property="og:url" content="https://wonogirifest.co.id" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <link rel="canonical" href="https://wonogirifest.com" />
    <link rel="shortcut icon" href="{{ asset('/assets/media/logos/wonogirifest-icon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom-me.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <div class="d-flex flex-column flex-root ">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <div class="d-flex flex-lg-row-fluid">
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <img class="w-25 h-auto img-fluid" src="{{ asset('assets/media/logos/wonogiri-fest-logo.png') }}"
                        alt="" />
                    <div class="w-75">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
                            @csrf
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                            </div>
                            <div class="fv-row mb-5">
                                <input type="text" placeholder="Username" name="username" autocomplete="off"
                                    class="form-control form-control-lg" />
                            </div>
                            <div class="fv-row mb-5">
                                <input type="password" placeholder="Password" name="password" autocomplete="off"
                                    class="form-control form-control-lg" />
                            </div>

                            <div class="d-grid">
                                <button type="submit" id="kt_sign_in_submit"
                                    class="btn btn-warning btn-lg my-10 p-4 rounded-3">
                                    <span class="indicator-label fs-3 fw-bold">Masuk</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center justify-content-lg-end py-8 px-15">
                <div class="d-flex flex-center rounded-4 w-md-800px bg-base">
                    <div class="bgi-no-repeat bgi-size-cover bgi-position-center position-relative min-h-100px min-h-lg-200px mw-100 w-100 img-fluid h-100 rounded-4"
                        style="background-image: url('{{ asset('assets/media/illustrations/login-bg.jpg') }}')">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        var hostUrl = "assets/";
    </script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    @include('frontend.login-script')
</body>

</html>
