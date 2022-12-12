<head>
    <link rel="shortcut icon" href="{{ asset('/assets/media/logos/logo-ramlan.png') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ultra" />

    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }

        ol {
            padding-left: 2rem;
        }

        ol {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        img {
            vertical-align: middle;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        tbody,
        td,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .container {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width:576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1140px;
            }
        }

        @media (min-width:1400px) {
            .container {
                max-width: 1320px;
            }
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x));
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y);
        }

        @media (min-width:1200px) {
            .col-xl-12 {
                flex: 0 0 auto;
                width: 100%;
            }
        }

        @media (min-width:1400px) {
            .col-xxl-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-xxl-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }
        }

        .card {
            --bs-card-spacer-y: 1rem;
            --bs-card-spacer-x: 1rem;
            --bs-card-title-spacer-y: 0.5rem;
            --bs-card-border-width: 1px;
            --bs-card-border-color: #eff2f5;
            --bs-card-border-radius: 0.95rem;
            --bs-card-box-shadow: 0px 0px 20px rgba(94, 98, 120, 0.04);
            --bs-card-inner-border-radius: calc(0.95rem - 1px);
            --bs-card-cap-padding-y: 0.5rem;
            --bs-card-cap-padding-x: 1rem;
            --bs-card-cap-bg: transparent;
            --bs-card-bg: #ffffff;
            --bs-card-img-overlay-padding: 1rem;
            --bs-card-group-margin: 0.75rem;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: var(--bs-card-height);
            word-wrap: break-word;
            background-color: var(--bs-card-bg);
            background-clip: border-box;
            border: var(--bs-card-border-width) solid var(--bs-card-border-color);
            border-radius: var(--bs-card-border-radius);
            box-shadow: var(--bs-card-box-shadow);
        }

        .card-body {
            flex: 1 1 auto;
            padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
            color: var(--bs-card-color);
        }

        .list-group {
            --bs-list-group-color: #181C32;
            --bs-list-group-bg: #ffffff;
            --bs-list-group-border-color: rgba(0, 0, 0, 0.125);
            --bs-list-group-border-width: 1px;
            --bs-list-group-border-radius: 0.95rem;
            --bs-list-group-item-padding-x: 1rem;
            --bs-list-group-item-padding-y: 0.5rem;
            --bs-list-group-action-color: #5E6278;
            --bs-list-group-action-hover-color: #5E6278;
            --bs-list-group-action-hover-bg: #f5f8fa;
            --bs-list-group-action-active-color: #181C32;
            --bs-list-group-action-active-bg: #eff2f5;
            --bs-list-group-disabled-color: #7E8299;
            --bs-list-group-disabled-bg: #ffffff;
            --bs-list-group-active-color: #ffffff;
            --bs-list-group-active-bg: #009ef7;
            --bs-list-group-active-border-color: #009ef7;
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: var(--bs-list-group-border-radius);
        }

        .list-group-numbered {
            list-style-type: none;
            counter-reset: section;
        }

        .list-group-numbered>.list-group-item::before {
            content: counters(section, ".") ". ";
            counter-increment: section;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
            color: var(--bs-list-group-color);
            background-color: var(--bs-list-group-bg);
            border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit;
        }

        .list-group-item:disabled {
            color: var(--bs-list-group-disabled-color);
            pointer-events: none;
            background-color: var(--bs-list-group-disabled-bg);
        }

        .list-group-item+.list-group-item {
            border-top-width: 0;
        }

        .d-flex {
            display: flex !important;
        }

        .shadow {
            box-shadow: 0 .5rem 1.5rem .5rem rgba(0, 0, 0, .075) !important;
        }

        .border {
            border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .border-white {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important;
        }

        .border-0 {
            --bs-border-width: 0;
        }

        .border-3 {
            --bs-border-width: 3px;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .mw-75 {
            max-width: 75% !important;
        }

        .mw-100 {
            max-width: 100% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .h-auto {
            height: auto !important;
        }

        .mh-200px {
            max-height: 200px !important;
        }

        .mh-350px {
            max-height: 350px !important;
        }

        .flex-wrap {
            flex-wrap: wrap !important;
        }

        .justify-content-end {
            justify-content: flex-end !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .align-content-center {
            align-content: center !important;
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-5 {
            margin-top: 1.25rem !important;
            margin-bottom: 1.25rem !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-2 {
            margin-bottom: .5rem !important;
        }

        .mb-3 {
            margin-bottom: .75rem !important;
        }

        .mb-5 {
            margin-bottom: 1.25rem !important;
        }

        .ms-2 {
            margin-left: .5rem !important;
        }

        .p-2 {
            padding: .5rem !important;
        }

        .p-5 {
            padding: 1.25rem !important;
        }

        .px-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important;
        }

        .px-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important;
        }

        .px-3 {
            padding-right: .75rem !important;
            padding-left: .75rem !important;
        }

        .py-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important;
        }

        .pt-0 {
            padding-top: 0 !important;
        }

        .fs-4 {
            font-size: 1.25rem !important;
        }

        .fs-6 {
            font-size: 1.075rem !important;
        }

        .fs-7 {
            font-size: .95rem !important;
        }

        .fs-8 {
            font-size: .85rem !important;
        }

        .fw-bold {
            font-weight: 600 !important;
        }

        .fw-semibold {
            font-weight: 500 !important;
        }

        .fw-bolder {
            font-weight: 700 !important;
        }

        .lh-base {
            line-height: 1.5 !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
        }

        .text-muted {
            --bs-text-opacity: 1;
            color: #a1a5b7 !important;
        }

        .bg-white {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-transparent {
            --bs-bg-opacity: 1;
            background-color: transparent !important;
        }

        .rounded-2 {
            border-radius: .95rem !important;
        }

        .rounded-3 {
            border-radius: 1.5rem !important;
        }

        .rounded-4 {
            border-radius: 2rem !important;
        }

        .ls-4 {
            letter-spacing: .25rem !important;
        }

        @media (min-width:992px) {
            .mw-lg-100 {
                max-width: 100% !important;
            }

            .mb-lg-5 {
                margin-bottom: 1.25rem !important;
            }

            .mb-lg-20 {
                margin-bottom: 5rem !important;
            }

            .p-lg-5 {
                padding: 1.25rem !important;
            }

            .p-lg-7 {
                padding: 1.75rem !important;
            }

            .px-lg-5 {
                padding-right: 1.25rem !important;
                padding-left: 1.25rem !important;
            }

            .px-lg-6 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-lg-15 {
                padding-right: 3.75rem !important;
                padding-left: 3.75rem !important;
            }

            .py-lg-5 {
                padding-top: 1.25rem !important;
                padding-bottom: 1.25rem !important;
            }

            .py-lg-6 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .pt-lg-2 {
                padding-top: .5rem !important;
            }

            .pt-lg-10 {
                padding-top: 2.5rem !important;
            }

            .fs-lg-1 {
                font-size: calc(1.3rem + .6vw) !important;
            }

            .fs-lg-2 {
                font-size: calc(1.275rem + .3vw) !important;
            }

            .fs-lg-4 {
                font-size: 1.25rem !important;
            }

            .fs-lg-3x {
                font-size: calc(1.425rem + 2.1vw) !important;
            }

            .fs-lg-4x {
                font-size: calc(1.525rem + 3.3vw) !important;
            }
        }

        @media (min-width:1200px) {
            .fs-lg-1 {
                font-size: 1.75rem !important;
            }

            .fs-lg-2 {
                font-size: 1.5rem !important;
            }

            .fs-lg-3x {
                font-size: 3rem !important;
            }

            .fs-lg-4x {
                font-size: 4rem !important;
            }
        }

        .card {
            border: 0;
            box-shadow: var(--kt-card-box-shadow);
            background-color: var(--kt-card-bg);
        }

        .card .card-body {
            padding: 2rem 2.25rem;
            color: var(--kt-card-color);
        }

        @media (min-width:992px) {

            div,
            ol,
            span {
                scrollbar-width: thin;
                scrollbar-color: var(--kt-scrollbar-color) transparent;
            }

            div::-webkit-scrollbar,
            ol::-webkit-scrollbar,
            span::-webkit-scrollbar {
                width: var(--kt-scrollbar-width);
                height: var(--kt-scrollbar-height);
            }

            div ::-webkit-scrollbar-track,
            ol ::-webkit-scrollbar-track {
                border-radius: .5rem;
            }

            div ::-webkit-scrollbar-thumb,
            ol ::-webkit-scrollbar-thumb {
                border-radius: .5rem;
            }

            div::-webkit-scrollbar-thumb,
            ol::-webkit-scrollbar-thumb,
            span::-webkit-scrollbar-thumb {
                background-color: var(--kt-scrollbar-color);
            }

            div::-webkit-scrollbar-corner,
            ol::-webkit-scrollbar-corner,
            span::-webkit-scrollbar-corner {
                background-color: transparent;
            }

            div:hover,
            ol:hover,
            span:hover {
                scrollbar-color: var(--kt-scrollbar-hover-color) transparent;
            }

            div:hover::-webkit-scrollbar-thumb,
            ol:hover::-webkit-scrollbar-thumb,
            span:hover::-webkit-scrollbar-thumb {
                background-color: var(--kt-scrollbar-hover-color);
            }

            div:hover::-webkit-scrollbar-corner,
            ol:hover::-webkit-scrollbar-corner,
            span:hover::-webkit-scrollbar-corner {
                background-color: transparent;
            }
        }

        .bg-white {
            --kt-bg-rgb-color: var(--kt-white-bg-rgb);
            background-color: #000 !important;
        }

        .bg-white {
            --kt-bg-rgb-color: var(--kt-white-rgb);
            background-color: var(--kt-white) !important;
        }

        .shadow {
            box-shadow: 0 0.5rem 1.5rem 0.5rem rgba(0, 0, 0, 0.075);
        }

        .text-white {
            color: #FFFFFF !important;
        }

        .text-muted {
            color: #A1A5B7 !important;
        }

        .text-gray-200 {
            color: #2B2B40 !important;
        }

        .text-gray-800 {
            color: #CDCDDE !important;
        }

        .text-gray-900 {
            color: #FFFFFF !important;
        }

        html {
            font-family: sans-serif;
            text-size-adjust: 100%;
        }

        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 13px !important;
            font-weight: 400;
            font-family: Poppins, Inter, Helvetica, sans-serif;
        }

        @media (max-width:991.98px) {

            body,
            html {
                font-size: 13px !important;
            }
        }

        @media (max-width:767.98px) {

            body,
            html {
                font-size: 12px !important;
            }
        }

        body {
            display: flex;
            flex-direction: column;
        }

        body {
            background-color: var(--kt-page-bg);
        }

        @media (min-width:992px) {
            .container {
                padding: 0 30px;
            }
        }

        @media (max-width:991.98px) {
            .container {
                max-width: none;
                padding: 0 15px;
            }
        }

        .bg-base-2 {
            background-color: rgba(186, 150, 50, 1) !important;
            color: #ffffff !important;
        }

        .font-title {
            font-family: Ultra !important;
        }

        .text-base-2 {
            color: #FEC012 !important;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDz8Z11lFd2JQEl8qw.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDz8Z1JlFd2JQEl8qw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDz8Z1xlFd2JQEk.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJbecnFHGPezSQ.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJnecnFHGPezSQ.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLGT9Z11lFd2JQEl8qw.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLGT9Z1JlFd2JQEl8qw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLGT9Z1xlFd2JQEk.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z11lFd2JQEl8qw.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z1JlFd2JQEl8qw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z1xlFd2JQEk.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z11lFd2JQEl8qw.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Ultra';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/ultra/v19/zOLy4prXmrtY-uT9wrKh68xE.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
</head>

<body>
    <div class="container pt-0 pt-lg-10">
        <div class="card rounded-4" style="background-color:#0d509f !important;">
            {{-- <img class="mx-auto w-100 img-fluid" src="{{ asset('/assets/media/illustrations/bg_ticket.jpg') }}"
                alt=""> --}}
            <img class="mx-auto w-100 img-fluid rounded-4"
                src="{{ asset('/assets/media/illustrations/bg_ticket_header.png') }}" alt="">
            <div class="card-body px-10 px-lg-15">
                <table>
                    <tr>
                        <td>
                            <div class="ms-15 p-5 p-lg-7" style="background-color:#E4E6EF !important;">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12 col-xxl-10">
                                        <div class="text-center">
                                            <img class="mw-75 mw-lg-100 w-50 h-auto mh-350px mb-5 mb-lg-20"
                                                alt=""
                                                src="{{ asset('/assets/media/logos/wonogiri-fest-logo.png') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xxl-8">
                                        <div class="fw-semibold fs-8 fs-lg-2 text-muted text-center mb-3 mb-lg-5">
                                            Hallo, <span
                                                class="fs-7 fs-lg-1 fw-bold text-gray-800 ms-2">{{ $data->name }}</span>
                                        </div>
                                        <div
                                            class="px-3 px-lg-6 py-1 py-lg-6 rounded-2 bg-base-2 lh-base flex-wrap mb-2 mb-lg-5">
                                            <div class="fs-8 fs-lg-1 fw-bolder text-gray-900">
                                                {{ $ticket_type->name }}
                                            </div>
                                        </div>
                                        <div
                                            class="px-3 px-lg-6 py-1 py-lg-6 rounded-2 bg-base-2 lh-base flex-wrap mb-2 mb-lg-5">
                                            <div class="fs-8 fs-lg-1 fw-bolder text-gray-900">
                                                2 Ticket
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="p-2 p-lg-5" style="background-color:#f1416c !important;">
                                <div class="d-flex align-content-center justify-content-end flex-wrap">
                                    <div
                                        class="text-center px-1 px-lg-5 py-1 py-lg-5 rounded-2 shadow border border-3 border-white bg-white mb-0 mb-lg-5 mx-auto">
                                        <img class="mw-100 mw-lg-100 w-100 h-auto mh-200px" alt=""
                                            src="{{ asset('/assets/media/qrcode-sample.png') }}">
                                    </div>
                                    <div class="fs-6 fs-lg-3x fw-bolder text-gray-200 text-center w-100">
                                        32441343
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="container">
                    <div class="fs-4 fs-lg-4x text-white font-title text-base-2 ls-4 text-center my-5"
                        style="color: #eff2f5 !important;">
                        INFORMASI PENTING
                    </div>
                    <div class="flex-wrap">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Ini adalah bukti pembelian tiket berupa voucher pembelian, harap agar disimpan
                                dengan baik.
                            </li>
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Voucher hanya berlaku untuk satu kali penukaran saja.
                            </li>
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Voucher tidak dapat dipindahtangankan.
                            </li>
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Voucher harus ditukarkan menjadi tiket gelang di lokasi acara
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Penukaran voucher dilayani di lokasi acara dari tanggal 25 Februari 2023 jam
                                09.00 WIB dengan menunjukkan voucher dan kartu identitas asli sesuai yang
                                tertera di voucher pembelian.
                            </li>
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Voucher tidak dapat ditukar dan diuangkan.
                            </li>
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Panitia Wonogiri Festival 2023 hanya menghubungi pembeli melalui email
                                Official Wonogiri Festival, dan nomor WA Official Ticketing Wonogiri Festival.
                            </li>
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Jangan menunjukkan voucher di media sosial untuk menghindari adanya
                                penyalahgunaan.
                            </li>
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Voucher mohon jangan dipindahtangankan.
                            </li>
                            <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                style="color: #eff2f5 !important;">
                                Panitia Wonogiri Festival 2023 tidak bertanggung jawab atas kerugian yang
                                timbul dari kelalaian pembeli.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <img class="mx-auto w-100 img-fluid rounded-4"
                src="{{ asset('/assets/media/illustrations/bg_ticket_footer.png') }}" alt="">
        </div>
    </div>
</body>
