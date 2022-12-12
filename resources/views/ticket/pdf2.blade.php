<style>
    .mb-gunungan {
        margin-bottom: -13rem !important;
    }

    .ms-gunungan {
        margin-left: -6rem !important;
    }

    .me-gunungan {
        margin-right: -6rem !important;
    }

    .bottom-gunungan {
        bottom: -25px !important;
    }

    @media (min-width: 992px) {
        .mb-lg-gunungan {
            margin-bottom: -37rem !important;
        }

        .ms-lg-gunungan {
            margin-left: -11rem !important;
        }

        .me-lg-gunungan {
            margin-right: -11rem !important;
        }

        .bottom-lg-gunungan {
            bottom: -65px !important;
        }
    }
</style>

<style>
    :root {
        --bs-blue: #0d6efd;
        --bs-indigo: #6610f2;
        --bs-purple: #6f42c1;
        --bs-pink: #d63384;
        --bs-red: #dc3545;
        --bs-orange: #fd7e14;
        --bs-yellow: #ffc107;
        --bs-green: #198754;
        --bs-teal: #20c997;
        --bs-cyan: #0dcaf0;
        --bs-black: #000000;
        --bs-white: #ffffff;
        --bs-gray: #7E8299;
        --bs-gray-dark: #3F4254;
        --bs-gray-100: #f5f8fa;
        --bs-gray-200: #eff2f5;
        --bs-gray-300: #E4E6EF;
        --bs-gray-400: #B5B5C3;
        --bs-gray-500: #A1A5B7;
        --bs-gray-600: #7E8299;
        --bs-gray-700: #5E6278;
        --bs-gray-800: #3F4254;
        --bs-gray-900: #181C32;
        --bs-white: #ffffff;
        --bs-light: #f5f8fa;
        --bs-primary: #009ef7;
        --bs-secondary: #E4E6EF;
        --bs-success: #50cd89;
        --bs-info: #7239ea;
        --bs-warning: #ffc700;
        --bs-danger: #f1416c;
        --bs-dark: #181C32;
        --bs-white-rgb: 255, 255, 255;
        --bs-light-rgb: 245, 248, 250;
        --bs-primary-rgb: 0, 158, 247;
        --bs-secondary-rgb: 228, 230, 239;
        --bs-success-rgb: 80, 205, 137;
        --bs-info-rgb: 114, 57, 234;
        --bs-warning-rgb: 255, 199, 0;
        --bs-danger-rgb: 241, 65, 108;
        --bs-dark-rgb: 24, 28, 50;
        --bs-white-rgb: 255, 255, 255;
        --bs-black-rgb: 0, 0, 0;
        --bs-body-color-rgb: 24, 28, 50;
        --bs-body-bg-rgb: 255, 255, 255;
        --bs-font-sans-serif: Inter, Helvetica, "sans-serif";
        --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
        --bs-body-font-family: var(--bs-font-sans-serif);
        --bs-body-font-size: 1rem;
        --bs-body-font-weight: 400;
        --bs-body-line-height: 1.5;
        --bs-body-color: #181C32;
        --bs-body-bg: #ffffff;
        --bs-border-width: 1px;
        --bs-border-style: solid;
        --bs-border-color: #eff2f5;
        --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
        --bs-border-radius: 0.95rem;
        --bs-border-radius-sm: 0.425rem;
        --bs-border-radius-lg: 1.5rem;
        --bs-border-radius-xl: 2rem;
        --bs-border-radius-2xl: 2rem;
        --bs-border-radius-pill: 50rem;
        --bs-link-color: #009ef7;
        --bs-link-hover-color: #0095e8;
        --bs-code-color: #b93993;
        --bs-highlight-bg: #fff3cd;
    }

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

    .col-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }

    .col-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }

    @media (min-width:576px) {
        .col-sm-12 {
            flex: 0 0 auto;
            width: 100%;
        }
    }

    @media (min-width:1200px) {
        .col-xl-10 {
            flex: 0 0 auto;
            width: 83.33333333%;
        }

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

    .position-relative {
        position: relative !important;
    }

    .position-absolute {
        position: absolute !important;
    }

    .top-25 {
        top: 25% !important;
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

    .h-125px {
        height: 125px !important;
    }

    .mh-350px {
        max-height: 350px !important;
    }

    .mh-450px {
        max-height: 450px !important;
    }

    .flex-column {
        flex-direction: column !important;
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

    .justify-content-between {
        justify-content: space-between !important;
    }

    .align-content-center {
        align-content: center !important;
    }

    .mx-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .my-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
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

    .ms-7 {
        margin-left: 1.75rem !important;
    }

    .px-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .px-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important;
    }

    .px-3 {
        padding-right: .75rem !important;
        padding-left: .75rem !important;
    }

    .px-8 {
        padding-right: 2rem !important;
        padding-left: 2rem !important;
    }

    .py-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important;
    }

    .pt-0 {
        padding-top: 0 !important;
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

    .fs-4x {
        font-size: calc(1.525rem + 3.3vw) !important;
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

    .bg-secondary {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
    }

    .bg-danger {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
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

    .z-index-2 {
        z-index: 2 !important;
    }

    .ls-4 {
        letter-spacing: .25rem !important;
    }

    @media (min-width:576px) {
        .mt-sm-n20 {
            margin-top: -5rem !important;
        }
    }

    @media (min-width:992px) {
        .mw-lg-100 {
            max-width: 100% !important;
        }

        .h-lg-350px {
            height: 350px !important;
        }

        .h-lg-400px {
            height: 400px !important;
        }

        .mx-lg-5 {
            margin-right: 1.25rem !important;
            margin-left: 1.25rem !important;
        }

        .my-lg-5 {
            margin-top: 1.25rem !important;
            margin-bottom: 1.25rem !important;
        }

        .my-lg-15 {
            margin-top: 3.75rem !important;
            margin-bottom: 3.75rem !important;
        }

        .mb-lg-5 {
            margin-bottom: 1.25rem !important;
        }

        .mb-lg-10 {
            margin-bottom: 2.5rem !important;
        }

        .mb-lg-20 {
            margin-bottom: 5rem !important;
        }

        .ms-lg-0 {
            margin-left: 0 !important;
        }

        .px-lg-5 {
            padding-right: 1.25rem !important;
            padding-left: 1.25rem !important;
        }

        .px-lg-6 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .px-lg-10 {
            padding-right: 2.5rem !important;
            padding-left: 2.5rem !important;
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
    }

    @media (min-width:1200px) {
        .fs-4x {
            font-size: 4rem !important;
        }

        .fs-lg-1 {
            font-size: 1.75rem !important;
        }

        .fs-lg-2 {
            font-size: 1.5rem !important;
        }

        .fs-lg-3x {
            font-size: 3rem !important;
        }
    }

    :root {
        --kt-xs: 0;
        --kt-sm: 576px;
        --kt-md: 768px;
        --kt-lg: 992px;
        --kt-xl: 1200px;
        --kt-xxl: 1400px;
        --kt-white: #ffffff;
        --kt-white-bg-rgb: 255, 255, 255;
        --kt-black: #000000;
        --kt-black-bg-rgb: 0, 0, 0;
        --kt-text-muted: #A1A5B7;
        --kt-gray-100: #f5f8fa;
        --kt-gray-200: #eff2f5;
        --kt-gray-300: #E4E6EF;
        --kt-gray-400: #B5B5C3;
        --kt-gray-500: #A1A5B7;
        --kt-gray-600: #7E8299;
        --kt-gray-700: #5E6278;
        --kt-gray-800: #3F4254;
        --kt-gray-900: #181C32;
        --kt-gray-100-rgb: 245, 248, 250;
        --kt-gray-200-rgb: 239, 242, 245;
        --kt-gray-300-rgb: 228, 230, 239;
        --kt-gray-400-rgb: 181, 181, 195;
        --kt-gray-500-rgb: 161, 165, 183;
        --kt-gray-600-rgb: 126, 130, 153;
        --kt-gray-700-rgb: 94, 98, 120;
        --kt-gray-800-rgb: 63, 66, 84;
        --kt-gray-900-rgb: 24, 28, 50;
        --kt-white: #ffffff;
        --kt-light: #f5f8fa;
        --kt-primary: #009ef7;
        --kt-secondary: #E4E6EF;
        --kt-success: #50cd89;
        --kt-info: #7239ea;
        --kt-warning: #ffc700;
        --kt-danger: #f1416c;
        --kt-dark: #181C32;
        --kt-primary-active: #0095e8;
        --kt-secondary-active: #B5B5C3;
        --kt-light-active: #eff2f5;
        --kt-success-active: #47be7d;
        --kt-info-active: #5014d0;
        --kt-warning-active: #f1bc00;
        --kt-danger-active: #d9214e;
        --kt-dark-active: #131628;
        --kt-primary-light: #f1faff;
        --kt-secondary-light: #f5f8fa;
        --kt-success-light: #e8fff3;
        --kt-info-light: #f8f5ff;
        --kt-warning-light: #fff8dd;
        --kt-danger-light: #fff5f8;
        --kt-dark-light: #eff2f5;
        --kt-primary-inverse: #ffffff;
        --kt-secondary-inverse: #3F4254;
        --kt-light-inverse: #7E8299;
        --kt-success-inverse: #ffffff;
        --kt-info-inverse: #ffffff;
        --kt-warning-inverse: #ffffff;
        --kt-danger-inverse: #ffffff;
        --kt-dark-inverse: #ffffff;
        --kt-white-rgb: 255, 255, 255;
        --kt-light-rgb: 245, 248, 250;
        --kt-primary-rgb: 0, 158, 247;
        --kt-secondary-rgb: 228, 230, 239;
        --kt-success-rgb: 80, 205, 137;
        --kt-info-rgb: 114, 57, 234;
        --kt-warning-rgb: 255, 199, 0;
        --kt-danger-rgb: 241, 65, 108;
        --kt-dark-rgb: 24, 28, 50;
        --kt-text-white: #ffffff;
        --kt-text-primary: #009ef7;
        --kt-text-secondary: #E4E6EF;
        --kt-text-light: #f5f8fa;
        --kt-text-success: #50cd89;
        --kt-text-info: #7239ea;
        --kt-text-warning: #ffc700;
        --kt-text-danger: #f1416c;
        --kt-text-dark: #181C32;
        --kt-text-muted: #A1A5B7;
        --kt-text-gray-100: #f5f8fa;
        --kt-text-gray-200: #eff2f5;
        --kt-text-gray-300: #E4E6EF;
        --kt-text-gray-400: #B5B5C3;
        --kt-text-gray-500: #A1A5B7;
        --kt-text-gray-600: #7E8299;
        --kt-text-gray-700: #5E6278;
        --kt-text-gray-800: #3F4254;
        --kt-text-gray-900: #181C32;
        --kt-body-bg: #ffffff;
        --kt-body-bg-rgb: 255, 255, 255;
        --kt-body-color: #181C32;
        --kt-link-color: #009ef7;
        --kt-link-hover-color: #0095e8;
        --kt-border-color: #eff2f5;
        --kt-border-dashed-color: #E4E6EF;
        --kt-component-active-color: #ffffff;
        --kt-component-active-bg: #009ef7;
        --kt-component-hover-color: #009ef7;
        --kt-component-hover-bg: #F4F6FA;
        --kt-component-checked-color: #ffffff;
        --kt-component-checked-bg: #009ef7;
        --kt-box-shadow-xs: 0 0.1rem 0.75rem 0.25rem rgba(0, 0, 0, 0.05);
        --kt-box-shadow-sm: 0 0.1rem 1rem 0.25rem rgba(0, 0, 0, 0.05);
        --kt-box-shadow: 0 0.5rem 1.5rem 0.5rem rgba(0, 0, 0, 0.075);
        --kt-box-shadow-lg: 0 1rem 2rem 1rem rgba(0, 0, 0, 0.1);
        --kt-headings-color: #181C32;
        --kt-table-color: #181C32;
        --kt-table-bg: transparent;
        --kt-table-striped-color: #181C32;
        --kt-table-striped-bg: rgba(245, 248, 250, 0.75);
        --kt-table-accent-bg: transparent;
        --kt-table-active-color: #181C32;
        --kt-table-active-bg: #f5f8fa;
        --kt-table-hover-colorr: #181C32;
        --kt-table-hover-bg: #f5f8fa;
        --kt-table-border-color: #eff2f5;
        --kt-table-caption-color: #A1A5B7;
        --kt-table-loading-message-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
        --kt-table-loading-message-bg: #ffffff;
        --kt-table-loading-message-color: #5E6278;
        --kt-input-btn-focus-color: rgba(0, 158, 247, 0.25);
        --kt-input-btn-focus-box-shadow: 0 0 0 0.25rem rgba(0, 158, 247, 0.25);
        --kt-input-btn-focus-color-opacity: 0.25;
        --kt-input-color: #5E6278;
        --kt-input-placeholder-color: #A1A5B7;
        --kt-input-plaintext-color: #5E6278;
        --kt-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
        --kt-btn-focus-box-shadow: 0 0 0 0.25rem rgba(0, 158, 247, 0.25);
        --kt-btn-active-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --kt-btn-disabled-opacity: 0.65;
        --kt-btn-link-color: #009ef7;
        --kt-btn-link-hover-color: #0095e8;
        --kt-btn-link-disabled-color: #7E8299;
        --kt-form-label-color: #3F4254;
        --kt-form-text-color: #A1A5B7;
        --kt-input-bg: #ffffff;
        --kt-input-disabled-bg: #eff2f5;
        --kt-input-disabled-border-color: #E4E6EF;
        --kt-input-color: #5E6278;
        --kt-input-border-color: #E4E6EF;
        --kt-input-focus-bg: #ffffff;
        --kt-input-focus-border-color: #B5B5C3;
        --kt-input-focus-color: #5E6278;
        --kt-input-solid-bg: #f5f8fa;
        --kt-input-solid-bg-focus: #eef3f7;
        --kt-input-solid-placeholder-color: #A1A5B7;
        --kt-input-solid-color: #5E6278;
        --kt-form-check-label-color: #A1A5B7;
        --kt-form-check-label-color-checked: #5E6278;
        --kt-form-check-input-active-filter: brightness(90%);
        --kt-form-check-input-bg: transparent;
        --kt-form-check-input-bg-solid: #eff2f5;
        --kt-form-check-input-border: 1px solid #E4E6EF;
        --kt-form-check-input-focus-border: #B5B5C3;
        --kt-form-check-input-focus-box-shadow: none;
        --kt-form-check-input-checked-color: #ffffff;
        --kt-form-check-input-checked-bg-color: #009ef7;
        --kt-form-check-input-checked-bg-color-solid: #009ef7;
        --kt-form-check-input-checked-border-color: #009ef7;
        --kt-form-check-input-checked-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 13 11' width='13' height='11' fill='none'%3e%3cpath d='M11.0426 1.02893C11.3258 0.695792 11.8254 0.655283 12.1585 0.938451C12.4917 1.22162 12.5322 1.72124 12.249 2.05437L5.51985 9.97104C5.23224 10.3094 4.72261 10.3451 4.3907 10.05L0.828197 6.88335C0.50141 6.59288 0.471975 6.09249 0.762452 5.7657C1.05293 5.43891 1.55332 5.40948 1.88011 5.69995L4.83765 8.32889L11.0426 1.02893Z' fill='%23ffffff'/%3e%3c/svg%3e");
        --kt-form-check-radio-checked-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23ffffff'/%3e%3c/svg%3e");
        --kt-form-check-input-indeterminate-color: #ffffff;
        --kt-form-check-input-indeterminate-bg-color: #009ef7;
        --kt-form-check-input-indeterminate-border-color: #009ef7;
        --kt-form-check-input-indeterminate-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
        --kt-form-check-input-disabled-opacity: 0.5;
        --kt-form-check-label-disabled-opacity: 0.5;
        --kt-form-check-btn-check-disabled-opacity: 0.65;
        --kt-form-switch-color: rgba(0, 0, 0, 0.25);
        --kt-form-switch-color-solid: #ffffff;
        --kt-form-switch-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
        --kt-form-switch-bg-image-solid: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ffffff'/%3e%3c/svg%3e");
        --kt-form-switch-focus-color: #B5B5C3;
        --kt-form-switch-focus-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23B5B5C3'/%3e%3c/svg%3e");
        --kt-form-switch-checked-color: #ffffff;
        --kt-form-switch-checked-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ffffff'/%3e%3c/svg%3e");
        --kt-input-group-addon-color: #5E6278;
        --kt-input-group-addon-bg: #f5f8fa;
        --kt-input-group-addon-border-color: #E4E6EF;
        --kt-form-select-color: #5E6278;
        --kt-form-select-bg: #ffffff;
        --kt-form-select-disabled-bg: #eff2f5;
        --kt-form-select-disabled-border-color: #E4E6EF;
        --kt-form-select-indicator-color: #7E8299;
        --kt-form-select-indicator: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%237E8299' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
        --kt-form-select-border-color: #E4E6EF;
        --kt-form-select-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
        --kt-form-select-focus-border-color: #B5B5C3;
        --kt-form-select-focus-box-shadow: 0 0 0 0.25rem rgba(0, 158, 247, 0.25);
        --kt-form-file-button-color: #5E6278;
        --kt-form-file-button-bg: #f5f8fa;
        --kt-form-file-button-hover-bg: shade-color(#f5f8fa, 5%);
        --kt-nav-tabs-border-color: #eff2f5;
        --kt-nav-tabs-link-hover-border-color: #eff2f5 #eff2f5 #eff2f5;
        --kt-nav-tabs-link-active-color: #5E6278;
        --kt-nav-tabs-link-active-bg: #ffffff;
        --kt-nav-tabs-link-active-border-color: #E4E6EF #E4E6EF #ffffff;
        --kt-nav-pills-link-active-color: #ffffff;
        --kt-nav-pills-link-active-bg: #009ef7;
        --kt-dropdown-color: #181C32;
        --kt-dropdown-bg: #ffffff;
        --kt-dropdown-divider-bg: #f5f8fa;
        --kt-dropdown-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
        --kt-dropdown-link-color: #181C32;
        --kt-dropdown-link-hover-color: shade-color(#181C32, 10%);
        --kt-dropdown-link-hover-bg: #eff2f5;
        --kt-dropdown-link-active-color: #ffffff;
        --kt-dropdown-link-active-bg: #009ef7;
        --kt-dropdown-link-disabled-color: #A1A5B7;
        --kt-dropdown-header-color: #7E8299;
        --kt-pagination-item-bg: #ffffff;
        --kt-pagination-color: #5E6278;
        --kt-pagination-bg: transparent;
        --kt-pagination-border-color: transparent;
        --kt-pagination-focus-color: #009ef7;
        --kt-pagination-focus-bg: #F4F6FA;
        --kt-pagination-focus-box-shadow: none;
        --kt-pagination-focus-outline: 0;
        --kt-pagination-hover-color: #009ef7;
        --kt-pagination-hover-bg: #F4F6FA;
        --kt-pagination-hover-border-color: transparent;
        --kt-pagination-active-color: #ffffff;
        --kt-pagination-active-bg: #009ef7;
        --kt-pagination-active-border-color: transparent;
        --kt-pagination-disabled-color: #B5B5C3;
        --kt-pagination-disabled-bg: transparent;
        --kt-card-bg: #ffffff;
        --kt-card-box-shadow: 0px 0px 20px rgba(94, 98, 120, 0.04);
        --kt-card-border-color: #eff2f5;
        --kt-card-border-dashed-color: #E4E6EF;
        --kt-card-cap-bg: transparent;
        --kt-accordion-color: #181C32;
        --kt-accordion-bg: #ffffff;
        --kt-accordion-border-color: #eff2f5;
        --kt-accordion-button-bg: #ffffff;
        --kt-accordion-button-color: #181C32;
        --kt-accordion-button-active-bg: #f5f8fa;
        --kt-accordion-button-active-color: #009ef7;
        --kt-accordion-button-focus-border-color: #eff2f5;
        --kt-accordion-button-focus-box-shadow: none;
        --kt-accordion-icon-color: #181C32;
        --kt-accordion-icon-active-color: #009ef7;
        --kt-accordion-button-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23181C32'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        --kt-accordion-button-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23009ef7'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        --kt-tooltip-color: #3F4254;
        --kt-tooltip-bg: #ffffff;
        --kt-tooltip-opacity: 1;
        --kt-tooltip-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
        --kt-popover-bg: #ffffff;
        --kt-popover-border-color: #ffffff;
        --kt-popover-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
        --kt-popover-header-bg: #ffffff;
        --kt-popover-header-color: #3F4254;
        --kt-popover-header-border-color: #eff2f5;
        --kt-popover-body-color: #3F4254;
        --kt-dropdown-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
        --kt-dropdown-bg: #ffffff;
        --kt-toast-background-color: rgba(255, 255, 255, 0.85);
        --kt-toast-box-shadow: 0 0.5rem 1.5rem 0.5rem rgba(0, 0, 0, 0.075);
        --kt-toast-header-color: #7E8299;
        --kt-toast-header-background-color: rgba(255, 255, 255, 0.85);
        --kt-toast-header-border-color: rgba(0, 0, 0, 0.05);
        --kt-badge-color: #ffffff;
        --kt-modal-bg: #ffffff;
        --kt-modal-border-color: var(--bs-border-color-translucent);
        --kt-modal-box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.05);
        --kt-modal-content-bg: #ffffff;
        --kt-modal-content-border-color: var(--bs-border-color-translucent);
        --kt-modal-content-box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.05);
        --kt-modal-content-box-shadow-xs: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
        --kt-modal-content-box-shadow-sm-up: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        --kt-modal-header-border-color: #eff2f5;
        --kt-modal-footer-border-color: #eff2f5;
        --kt-modal-backdrop-bg: #000000;
        --kt-modal-backdrop-opacity: 0.3;
        --kt-progress-bg: #f5f8fa;
        --kt-progress-box-shadow: none;
        --kt-list-group-color: #181C32;
        --kt-list-group-bg: #ffffff;
        --kt-list-group-border-color: rgba(0, 0, 0, 0.125);
        --kt-list-group-hover-bg: #f5f8fa;
        --kt-list-group-active-color: #ffffff;
        --kt-list-group-active-bg: #009ef7;
        --kt-list-group-active-border-colorg: #009ef7;
        --kt-list-group-disabled-color: #7E8299;
        --kt-list-group-disabled-bg: #ffffff;
        --kt-list-group-action-colorg: #5E6278;
        --kt-list-group-action-hover-color: #5E6278;
        --kt-list-group-action-active-color: #181C32;
        --kt-list-group-action-active-bg: #eff2f5;
        --kt-thumbnail-bg: #ffffff;
        --kt-thumbnail-border-color: #eff2f5;
        --kt-thumbnail-box-shadow: 0 0.1rem 1rem 0.25rem rgba(0, 0, 0, 0.05);
        --kt-figure-caption-color: #7E8299;
        --kt-breadcrumb-divider-color: #7E8299;
        --kt-breadcrumb-active-color: #009ef7;
        --kt-carousel-custom-indicator-default-bg-color: #eff2f5;
        --kt-carousel-custom-indicator-active-bg-color: #B5B5C3;
        --kt-carousel-custom-bullet-indicator-default-bg-color: #B5B5C3;
        --kt-carousel-custom-bullet-indicator-active-bg-color: #7E8299;
        --kt-code-bg: #F1F3F8;
        --kt-code-box-shadow: 0px 3px 9px rgba(0, 0, 0, 0.08);
        --kt-code-color: #b93993;
        --kt-btn-close-color: #000000;
        --kt-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
        --kt-offcanvas-border-color: var(--bs-border-color-translucent);
        --kt-offcanvas-bg-color: #ffffff;
        --kt-offcanvas-box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
        --kt-offcanvas-backdrop-bg: #000000;
        --kt-offcanvas-backdrop-opacity: 0.3;
        --kt-symbol-label-color: #3F4254;
        --kt-symbol-label-bg: #f5f8fa;
        --kt-symbol-border-color: rgba(255, 255, 255, 0.5);
        --kt-bullet-bg-color: #B5B5C3;
        --kt-scrolltop-opacity: 0;
        --kt-scrolltop-opacity-on: 0.3;
        --kt-scrolltop-opacity-hover: 1;
        --kt-scrolltop-box-shadow: 0 0.5rem 1.5rem 0.5rem rgba(0, 0, 0, 0.075);
        --kt-scrolltop-bg-color: #009ef7;
        --kt-scrolltop-bg-color-hover: #009ef7;
        --kt-scrolltop-icon-color: #ffffff;
        --kt-scrolltop-icon-color-hover: #ffffff;
        --kt-drawer-box-shadow: 0px 1px 9px -3px rgba(0, 0, 0, 0.05);
        --kt-drawer-bg-color: #ffffff;
        --kt-drawer-overlay-bg-color: rgba(0, 0, 0, 0.2);
        --kt-menu-dropdown-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
        --kt-menu-dropdown-bg-color: #ffffff;
        --kt-menu-heading-color: #A1A5B7;
        --kt-menu-link-color-hover: #009ef7;
        --kt-menu-link-color-show: #009ef7;
        --kt-menu-link-color-here: #009ef7;
        --kt-menu-link-color-active: #009ef7;
        --kt-menu-link-bg-color-hover: #F4F6FA;
        --kt-menu-link-bg-color-show: #F4F6FA;
        --kt-menu-link-bg-color-here: #F4F6FA;
        --kt-menu-link-bg-color-active: #F4F6FA;
        --kt-feedback-popup-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
        --kt-feedback-popup-background-color: #ffffff;
        --kt-scrollbar-color: #eff2f5;
        --kt-scrollbar-hover-color: #e9edf1;
        --kt-scrollbar-width: 0.4rem;
        --kt-scrollbar-height: 0.4rem;
        --kt-scrollbar-space: 0.5rem;
        --kt-overlay-bg: rgba(0, 0, 0, 0.05);
        --kt-blockui-overlay-bg: rgba(0, 0, 0, 0.05);
        --kt-rating-color-default: #B5B5C3;
        --kt-rating-color-active: #FFAD0F;
        --kt-ribbon-label-box-shadow: 0px -1px 5px 0px rgba(24, 28, 50, 0.1);
        --kt-ribbon-label-bg: #009ef7;
        --kt-ribbon-label-border-color: #005d91;
        --kt-ribbon-clip-bg: #181C32;
        --kt-engage-btn-bg: #ffffff;
        --kt-engage-btn-color: #7E8299;
        --kt-engage-btn-color-active: #3F4254;
    }

    .list-group {
        --bs-list-group-color: var(--kt-list-group-color);
        --bs-list-group-bg: var(--kt-list-group-bg);
        --bs-list-group-border-color: var(--kt-list-group-border-color);
        --bs-list-group-action-color: var(--kt-list-group-action-color);
        --bs-list-group-action-hover-color: var(--kt-list-group-action-hover-color);
        --bs-list-group-action-hover-bg: var(--kt-list-group-hover-bg);
        --bs-list-group-action-active-color: var(--kt-list-group-action-active-color);
        --bs-list-group-action-active-bg: var(--kt-list-group-action-active-bg);
        --bs-list-group-disabled-color: var(--kt-list-group-disabled-color);
        --bs-list-group-disabled-bg: var(--kt-list-group-disabled-bg);
        --bs-list-group-active-color: var(--kt-list-group-active-color);
        --bs-list-group-active-bg: var(--kt-list-group-active-bg);
        --bs-list-group-active-border-color: var(--kt-list-group-active-border-color);
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

    .bg-secondary {
        --kt-bg-rgb-color: var(--kt-secondary-rgb);
        background-color: var(--kt-secondary) !important;
    }

    .bg-danger {
        --kt-bg-rgb-color: var(--kt-danger-rgb);
        background-color: var(--kt-danger) !important;
    }

    .flex-root {
        flex: 1;
    }

    .shadow {
        box-shadow: var(--kt-box-shadow);
    }

    .text-white {
        color: var(--kt-text-white) !important;
    }

    .text-muted {
        color: var(--kt-text-muted) !important;
    }

    .text-gray-200 {
        color: var(--kt-text-gray-200) !important;
    }

    .text-gray-800 {
        color: var(--kt-text-gray-800) !important;
    }

    .text-gray-900 {
        color: var(--kt-text-gray-900) !important;
    }

    html:not([data-theme=dark]) {
        --kt-page-bg: #F9FAFB;
        --kt-header-general-bg-color: #2C294B;
        --kt-header-general-box-shadow: 0px 10px 30px 0px rgba(82, 63, 105, 0.05);
        --kt-header-search-icon-color: #ffffff;
        --kt-header-search-bg-color: #403E5D;
        --kt-header-search-placeholder-color: #7E8299;
        --kt-header-search-font-color: #878aa0;
        --kt-header-button-icon-color: #ffffff;
        --kt-header-button-bg-color: #403E5E;
        --kt-header-button-icon-color-active: #009ef7;
        --kt-header-mobile-bg-color: #ffffff;
        --kt-aside-bg-color: #ffffff;
        --kt-aside-box-shadow: 0px 0px 80px 50px rgba(206, 213, 225, 0.12);
        --kt-aside-menu-icon-bg-color: rgba(245, 248, 250, 0.8);
        --kt-aside-menu-icon-bg-color-active: #009ef7;
        --kt-aside-menu-icon-icon-color: #5E6278;
        --kt-aside-menu-icon-icon-color-active: #ffffff;
        --kt-aside-menu-icon-icon-color-hover: #009ef7;
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

    @media (max-width: 576px) {
        .col-sm-12 {
            flex: 0 0 auto;
            width: 100%;
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

    /*! CSS Used from: Embedded */
    .mb-gunungan {
        margin-bottom: -13rem !important;
    }

    .ms-gunungan {
        margin-left: -6rem !important;
    }

    .me-gunungan {
        margin-right: -6rem !important;
    }

    .bottom-gunungan {
        bottom: -25px !important;
    }

    @media (min-width: 992px) {
        .mb-lg-gunungan {
            margin-bottom: -37rem !important;
        }

        .ms-lg-gunungan {
            margin-left: -11rem !important;
        }

        .me-lg-gunungan {
            margin-right: -11rem !important;
        }

        .bottom-lg-gunungan {
            bottom: -65px !important;
        }
    }

    /*! CSS Used fontfaces */
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


<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled"
    style="box-sizing: border-box; --bs-blue: #0d6efd; --bs-indigo: #6610f2; --bs-purple: #6f42c1; --bs-pink: #d63384; --bs-red: #dc3545; --bs-orange: #fd7e14; --bs-yellow: #ffc107; --bs-green: #198754; --bs-teal: #20c997; --bs-cyan: #0dcaf0; --bs-black: #000000; --bs-white: #ffffff; --bs-gray: #7E8299; --bs-gray-dark: #3F4254; --bs-gray-100: #f5f8fa; --bs-gray-200: #eff2f5; --bs-gray-300: #E4E6EF; --bs-gray-400: #B5B5C3; --bs-gray-500: #A1A5B7; --bs-gray-600: #7E8299; --bs-gray-700: #5E6278; --bs-gray-800: #3F4254; --bs-gray-900: #181C32; --bs-white: #ffffff; --bs-light: #f5f8fa; --bs-primary: #009ef7; --bs-secondary: #E4E6EF; --bs-success: #50cd89; --bs-info: #7239ea; --bs-warning: #ffc700; --bs-danger: #f1416c; --bs-dark: #181C32; --bs-white-rgb: 255, 255, 255; --bs-light-rgb: 245, 248, 250; --bs-primary-rgb: 0, 158, 247; --bs-secondary-rgb: 228, 230, 239; --bs-success-rgb: 80, 205, 137; --bs-info-rgb: 114, 57, 234; --bs-warning-rgb: 255, 199, 0; --bs-danger-rgb: 241, 65, 108; --bs-dark-rgb: 24, 28, 50; --bs-white-rgb: 255, 255, 255; --bs-black-rgb: 0, 0, 0; --bs-body-color-rgb: 24, 28, 50; --bs-body-bg-rgb: 255, 255, 255; --bs-font-sans-serif: Inter, Helvetica, 'sans-serif'; --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace; --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0)); --bs-body-font-family: var(--bs-font-sans-serif); --bs-body-font-size: 1rem; --bs-body-font-weight: 400; --bs-body-line-height: 1.5; --bs-body-color: #181C32; --bs-body-bg: #ffffff; --bs-border-width: 1px; --bs-border-style: solid; --bs-border-color: #eff2f5; --bs-border-color-translucent: rgba(0, 0, 0, 0.175); --bs-border-radius: 0.95rem; --bs-border-radius-sm: 0.425rem; --bs-border-radius-lg: 1.5rem; --bs-border-radius-xl: 2rem; --bs-border-radius-2xl: 2rem; --bs-border-radius-pill: 50rem; --bs-link-color: #009ef7; --bs-link-hover-color: #0095e8; --bs-code-color: #b93993; --bs-highlight-bg: #fff3cd; line-height: var(--bs-body-line-height); color: var(--bs-body-color); text-align: var(--bs-body-text-align); -webkit-text-size-adjust: 100%; -webkit-tap-highlight-color: transparent; --kt-xs: 0; --kt-sm: 576px; --kt-md: 768px; --kt-lg: 992px; --kt-xl: 1200px; --kt-xxl: 1400px; --kt-white: #ffffff; --kt-white-bg-rgb: 255, 255, 255; --kt-black: #000000; --kt-black-bg-rgb: 0, 0, 0; --kt-text-muted: #A1A5B7; --kt-gray-100: #f5f8fa; --kt-gray-200: #eff2f5; --kt-gray-300: #E4E6EF; --kt-gray-400: #B5B5C3; --kt-gray-500: #A1A5B7; --kt-gray-600: #7E8299; --kt-gray-700: #5E6278; --kt-gray-800: #3F4254; --kt-gray-900: #181C32; --kt-gray-100-rgb: 245, 248, 250; --kt-gray-200-rgb: 239, 242, 245; --kt-gray-300-rgb: 228, 230, 239; --kt-gray-400-rgb: 181, 181, 195; --kt-gray-500-rgb: 161, 165, 183; --kt-gray-600-rgb: 126, 130, 153; --kt-gray-700-rgb: 94, 98, 120; --kt-gray-800-rgb: 63, 66, 84; --kt-gray-900-rgb: 24, 28, 50; --kt-white: #ffffff; --kt-light: #f5f8fa; --kt-primary: #009ef7; --kt-secondary: #E4E6EF; --kt-success: #50cd89; --kt-info: #7239ea; --kt-warning: #ffc700; --kt-danger: #f1416c; --kt-dark: #181C32; --kt-primary-active: #0095e8; --kt-secondary-active: #B5B5C3; --kt-light-active: #eff2f5; --kt-success-active: #47be7d; --kt-info-active: #5014d0; --kt-warning-active: #f1bc00; --kt-danger-active: #d9214e; --kt-dark-active: #131628; --kt-primary-light: #f1faff; --kt-secondary-light: #f5f8fa; --kt-success-light: #e8fff3; --kt-info-light: #f8f5ff; --kt-warning-light: #fff8dd; --kt-danger-light: #fff5f8; --kt-dark-light: #eff2f5; --kt-primary-inverse: #ffffff; --kt-secondary-inverse: #3F4254; --kt-light-inverse: #7E8299; --kt-success-inverse: #ffffff; --kt-info-inverse: #ffffff; --kt-warning-inverse: #ffffff; --kt-danger-inverse: #ffffff; --kt-dark-inverse: #ffffff; --kt-white-rgb: 255, 255, 255; --kt-light-rgb: 245, 248, 250; --kt-primary-rgb: 0, 158, 247; --kt-secondary-rgb: 228, 230, 239; --kt-success-rgb: 80, 205, 137; --kt-info-rgb: 114, 57, 234; --kt-warning-rgb: 255, 199, 0; --kt-danger-rgb: 241, 65, 108; --kt-dark-rgb: 24, 28, 50; --kt-text-white: #ffffff; --kt-text-primary: #009ef7; --kt-text-secondary: #E4E6EF; --kt-text-light: #f5f8fa; --kt-text-success: #50cd89; --kt-text-info: #7239ea; --kt-text-warning: #ffc700; --kt-text-danger: #f1416c; --kt-text-dark: #181C32; --kt-text-muted: #A1A5B7; --kt-text-gray-100: #f5f8fa; --kt-text-gray-200: #eff2f5; --kt-text-gray-300: #E4E6EF; --kt-text-gray-400: #B5B5C3; --kt-text-gray-500: #A1A5B7; --kt-text-gray-600: #7E8299; --kt-text-gray-700: #5E6278; --kt-text-gray-800: #3F4254; --kt-text-gray-900: #181C32; --kt-body-bg: #ffffff; --kt-body-bg-rgb: 255, 255, 255; --kt-body-color: #181C32; --kt-link-color: #009ef7; --kt-link-hover-color: #0095e8; --kt-border-color: #eff2f5; --kt-border-dashed-color: #E4E6EF; --kt-component-active-color: #ffffff; --kt-component-active-bg: #009ef7; --kt-component-hover-color: #009ef7; --kt-component-hover-bg: #F4F6FA; --kt-component-checked-color: #ffffff; --kt-component-checked-bg: #009ef7; --kt-box-shadow-xs: 0 0.1rem 0.75rem 0.25rem rgba(0, 0, 0, 0.05); --kt-box-shadow-sm: 0 0.1rem 1rem 0.25rem rgba(0, 0, 0, 0.05); --kt-box-shadow: 0 0.5rem 1.5rem 0.5rem rgba(0, 0, 0, 0.075); --kt-box-shadow-lg: 0 1rem 2rem 1rem rgba(0, 0, 0, 0.1); --kt-headings-color: #181C32; --kt-table-color: #181C32; --kt-table-bg: transparent; --kt-table-striped-color: #181C32; --kt-table-striped-bg: rgba(245, 248, 250, 0.75); --kt-table-accent-bg: transparent; --kt-table-active-color: #181C32; --kt-table-active-bg: #f5f8fa; --kt-table-hover-colorr: #181C32; --kt-table-hover-bg: #f5f8fa; --kt-table-border-color: #eff2f5; --kt-table-caption-color: #A1A5B7; --kt-table-loading-message-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15); --kt-table-loading-message-bg: #ffffff; --kt-table-loading-message-color: #5E6278; --kt-input-btn-focus-color: rgba(0, 158, 247, 0.25); --kt-input-btn-focus-box-shadow: 0 0 0 0.25rem rgba(0, 158, 247, 0.25); --kt-input-btn-focus-color-opacity: 0.25; --kt-input-color: #5E6278; --kt-input-placeholder-color: #A1A5B7; --kt-input-plaintext-color: #5E6278; --kt-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075); --kt-btn-focus-box-shadow: 0 0 0 0.25rem rgba(0, 158, 247, 0.25); --kt-btn-active-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125); --kt-btn-disabled-opacity: 0.65; --kt-btn-link-color: #009ef7; --kt-btn-link-hover-color: #0095e8; --kt-btn-link-disabled-color: #7E8299; --kt-form-label-color: #3F4254; --kt-form-text-color: #A1A5B7; --kt-input-bg: #ffffff; --kt-input-disabled-bg: #eff2f5; --kt-input-disabled-border-color: #E4E6EF; --kt-input-color: #5E6278; --kt-input-border-color: #E4E6EF; --kt-input-focus-bg: #ffffff; --kt-input-focus-border-color: #B5B5C3; --kt-input-focus-color: #5E6278; --kt-input-solid-bg: #f5f8fa; --kt-input-solid-bg-focus: #eef3f7; --kt-input-solid-placeholder-color: #A1A5B7; --kt-input-solid-color: #5E6278; --kt-form-check-label-color: #A1A5B7; --kt-form-check-label-color-checked: #5E6278; --kt-form-check-input-active-filter: brightness(90%); --kt-form-check-input-bg: transparent; --kt-form-check-input-bg-solid: #eff2f5; --kt-form-check-input-border: 1px solid #E4E6EF; --kt-form-check-input-focus-border: #B5B5C3; --kt-form-check-input-focus-box-shadow: none; --kt-form-check-input-checked-color: #ffffff; --kt-form-check-input-checked-bg-color: #009ef7; --kt-form-check-input-checked-bg-color-solid: #009ef7; --kt-form-check-input-checked-border-color: #009ef7; --kt-form-check-input-checked-bg-image: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 13 11' width='13' height='11' fill='none'%3e%3cpath d='M11.0426 1.02893C11.3258 0.695792 11.8254 0.655283 12.1585 0.938451C12.4917 1.22162 12.5322 1.72124 12.249 2.05437L5.51985 9.97104C5.23224 10.3094 4.72261 10.3451 4.3907 10.05L0.828197 6.88335C0.50141 6.59288 0.471975 6.09249 0.762452 5.7657C1.05293 5.43891 1.55332 5.40948 1.88011 5.69995L4.83765 8.32889L11.0426 1.02893Z' fill='%23ffffff'/%3e%3c/svg%3e'); --kt-form-check-radio-checked-bg-image: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23ffffff'/%3e%3c/svg%3e'); --kt-form-check-input-indeterminate-color: #ffffff; --kt-form-check-input-indeterminate-bg-color: #009ef7; --kt-form-check-input-indeterminate-border-color: #009ef7; --kt-form-check-input-indeterminate-bg-image: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e'); --kt-form-check-input-disabled-opacity: 0.5; --kt-form-check-label-disabled-opacity: 0.5; --kt-form-check-btn-check-disabled-opacity: 0.65; --kt-form-switch-color: rgba(0, 0, 0, 0.25); --kt-form-switch-color-solid: #ffffff; --kt-form-switch-bg-image: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e'); --kt-form-switch-bg-image-solid: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ffffff'/%3e%3c/svg%3e'); --kt-form-switch-focus-color: #B5B5C3; --kt-form-switch-focus-bg-image: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23B5B5C3'/%3e%3c/svg%3e'); --kt-form-switch-checked-color: #ffffff; --kt-form-switch-checked-bg-image: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ffffff'/%3e%3c/svg%3e'); --kt-input-group-addon-color: #5E6278; --kt-input-group-addon-bg: #f5f8fa; --kt-input-group-addon-border-color: #E4E6EF; --kt-form-select-color: #5E6278; --kt-form-select-bg: #ffffff; --kt-form-select-disabled-bg: #eff2f5; --kt-form-select-disabled-border-color: #E4E6EF; --kt-form-select-indicator-color: #7E8299; --kt-form-select-indicator: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%237E8299' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e'); --kt-form-select-border-color: #E4E6EF; --kt-form-select-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075); --kt-form-select-focus-border-color: #B5B5C3; --kt-form-select-focus-box-shadow: 0 0 0 0.25rem rgba(0, 158, 247, 0.25); --kt-form-file-button-color: #5E6278; --kt-form-file-button-bg: #f5f8fa; --kt-form-file-button-hover-bg: shade-color(#f5f8fa, 5%); --kt-nav-tabs-border-color: #eff2f5; --kt-nav-tabs-link-hover-border-color: #eff2f5 #eff2f5 #eff2f5; --kt-nav-tabs-link-active-color: #5E6278; --kt-nav-tabs-link-active-bg: #ffffff; --kt-nav-tabs-link-active-border-color: #E4E6EF #E4E6EF #ffffff; --kt-nav-pills-link-active-color: #ffffff; --kt-nav-pills-link-active-bg: #009ef7; --kt-dropdown-color: #181C32; --kt-dropdown-bg: #ffffff; --kt-dropdown-divider-bg: #f5f8fa; --kt-dropdown-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15); --kt-dropdown-link-color: #181C32; --kt-dropdown-link-hover-color: shade-color(#181C32, 10%); --kt-dropdown-link-hover-bg: #eff2f5; --kt-dropdown-link-active-color: #ffffff; --kt-dropdown-link-active-bg: #009ef7; --kt-dropdown-link-disabled-color: #A1A5B7; --kt-dropdown-header-color: #7E8299; --kt-pagination-item-bg: #ffffff; --kt-pagination-color: #5E6278; --kt-pagination-bg: transparent; --kt-pagination-border-color: transparent; --kt-pagination-focus-color: #009ef7; --kt-pagination-focus-bg: #F4F6FA; --kt-pagination-focus-box-shadow: none; --kt-pagination-focus-outline: 0; --kt-pagination-hover-color: #009ef7; --kt-pagination-hover-bg: #F4F6FA; --kt-pagination-hover-border-color: transparent; --kt-pagination-active-color: #ffffff; --kt-pagination-active-bg: #009ef7; --kt-pagination-active-border-color: transparent; --kt-pagination-disabled-color: #B5B5C3; --kt-pagination-disabled-bg: transparent; --kt-card-bg: #ffffff; --kt-card-box-shadow: 0px 0px 20px rgba(94, 98, 120, 0.04); --kt-card-border-color: #eff2f5; --kt-card-border-dashed-color: #E4E6EF; --kt-card-cap-bg: transparent; --kt-accordion-color: #181C32; --kt-accordion-bg: #ffffff; --kt-accordion-border-color: #eff2f5; --kt-accordion-button-bg: #ffffff; --kt-accordion-button-color: #181C32; --kt-accordion-button-active-bg: #f5f8fa; --kt-accordion-button-active-color: #009ef7; --kt-accordion-button-focus-border-color: #eff2f5; --kt-accordion-button-focus-box-shadow: none; --kt-accordion-icon-color: #181C32; --kt-accordion-icon-active-color: #009ef7; --kt-accordion-button-icon: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23181C32'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e'); --kt-accordion-button-active-icon: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23009ef7'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e'); --kt-tooltip-color: #3F4254; --kt-tooltip-bg: #ffffff; --kt-tooltip-opacity: 1; --kt-tooltip-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15); --kt-popover-bg: #ffffff; --kt-popover-border-color: #ffffff; --kt-popover-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15); --kt-popover-header-bg: #ffffff; --kt-popover-header-color: #3F4254; --kt-popover-header-border-color: #eff2f5; --kt-popover-body-color: #3F4254; --kt-dropdown-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15); --kt-dropdown-bg: #ffffff; --kt-toast-background-color: rgba(255, 255, 255, 0.85); --kt-toast-box-shadow: 0 0.5rem 1.5rem 0.5rem rgba(0, 0, 0, 0.075); --kt-toast-header-color: #7E8299; --kt-toast-header-background-color: rgba(255, 255, 255, 0.85); --kt-toast-header-border-color: rgba(0, 0, 0, 0.05); --kt-badge-color: #ffffff; --kt-modal-bg: #ffffff; --kt-modal-border-color: var(--bs-border-color-translucent); --kt-modal-box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.05); --kt-modal-content-bg: #ffffff; --kt-modal-content-border-color: var(--bs-border-color-translucent); --kt-modal-content-box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.05); --kt-modal-content-box-shadow-xs: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1); --kt-modal-content-box-shadow-sm-up: 0 0.5rem 1rem rgba(0, 0, 0, 0.1); --kt-modal-header-border-color: #eff2f5; --kt-modal-footer-border-color: #eff2f5; --kt-modal-backdrop-bg: #000000; --kt-modal-backdrop-opacity: 0.3; --kt-progress-bg: #f5f8fa; --kt-progress-box-shadow: none; --kt-list-group-color: #181C32; --kt-list-group-bg: #ffffff; --kt-list-group-border-color: rgba(0, 0, 0, 0.125); --kt-list-group-hover-bg: #f5f8fa; --kt-list-group-active-color: #ffffff; --kt-list-group-active-bg: #009ef7; --kt-list-group-active-border-colorg: #009ef7; --kt-list-group-disabled-color: #7E8299; --kt-list-group-disabled-bg: #ffffff; --kt-list-group-action-colorg: #5E6278; --kt-list-group-action-hover-color: #5E6278; --kt-list-group-action-active-color: #181C32; --kt-list-group-action-active-bg: #eff2f5; --kt-thumbnail-bg: #ffffff; --kt-thumbnail-border-color: #eff2f5; --kt-thumbnail-box-shadow: 0 0.1rem 1rem 0.25rem rgba(0, 0, 0, 0.05); --kt-figure-caption-color: #7E8299; --kt-breadcrumb-divider-color: #7E8299; --kt-breadcrumb-active-color: #009ef7; --kt-carousel-custom-indicator-default-bg-color: #eff2f5; --kt-carousel-custom-indicator-active-bg-color: #B5B5C3; --kt-carousel-custom-bullet-indicator-default-bg-color: #B5B5C3; --kt-carousel-custom-bullet-indicator-active-bg-color: #7E8299; --kt-code-bg: #F1F3F8; --kt-code-box-shadow: 0px 3px 9px rgba(0, 0, 0, 0.08); --kt-code-color: #b93993; --kt-btn-close-color: #000000; --kt-btn-close-bg: url('data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e'); --kt-offcanvas-border-color: var(--bs-border-color-translucent); --kt-offcanvas-bg-color: #ffffff; --kt-offcanvas-box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1); --kt-offcanvas-backdrop-bg: #000000; --kt-offcanvas-backdrop-opacity: 0.3; --kt-symbol-label-color: #3F4254; --kt-symbol-label-bg: #f5f8fa; --kt-symbol-border-color: rgba(255, 255, 255, 0.5); --kt-bullet-bg-color: #B5B5C3; --kt-scrolltop-opacity: 0; --kt-scrolltop-opacity-on: 0.3; --kt-scrolltop-opacity-hover: 1; --kt-scrolltop-box-shadow: 0 0.5rem 1.5rem 0.5rem rgba(0, 0, 0, 0.075); --kt-scrolltop-bg-color: #009ef7; --kt-scrolltop-bg-color-hover: #009ef7; --kt-scrolltop-icon-color: #ffffff; --kt-scrolltop-icon-color-hover: #ffffff; --kt-drawer-box-shadow: 0px 1px 9px -3px rgba(0, 0, 0, 0.05); --kt-drawer-bg-color: #ffffff; --kt-drawer-overlay-bg-color: rgba(0, 0, 0, 0.2); --kt-menu-dropdown-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15); --kt-menu-dropdown-bg-color: #ffffff; --kt-menu-heading-color: #A1A5B7; --kt-menu-link-color-hover: #009ef7; --kt-menu-link-color-show: #009ef7; --kt-menu-link-color-here: #009ef7; --kt-menu-link-color-active: #009ef7; --kt-menu-link-bg-color-hover: #F4F6FA; --kt-menu-link-bg-color-show: #F4F6FA; --kt-menu-link-bg-color-here: #F4F6FA; --kt-menu-link-bg-color-active: #F4F6FA; --kt-feedback-popup-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15); --kt-feedback-popup-background-color: #ffffff; --kt-scrollbar-color: #eff2f5; --kt-scrollbar-hover-color: #e9edf1; --kt-scrollbar-width: 0.4rem; --kt-scrollbar-height: 0.4rem; --kt-scrollbar-space: 0.5rem; --kt-overlay-bg: rgba(0, 0, 0, 0.05); --kt-blockui-overlay-bg: rgba(0, 0, 0, 0.05); --kt-rating-color-default: #B5B5C3; --kt-rating-color-active: #FFAD0F; --kt-ribbon-label-box-shadow: 0px -1px 5px 0px rgba(24, 28, 50, 0.1); --kt-ribbon-label-bg: #009ef7; --kt-ribbon-label-border-color: #005d91; --kt-ribbon-clip-bg: #181C32; --kt-engage-btn-bg: #ffffff; --kt-engage-btn-color: #7E8299; --kt-engage-btn-color-active: #3F4254; height: 100%; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; font-weight: 400; font-family: Poppins, Inter, Helvetica, sans-serif; display: flex; flex-direction: column; background-color: var(--kt-page-bg); font-size: 13px;">
    <div class="d-flex flex-column flex-root"
        style="box-sizing: border-box; flex: 1; display: flex; flex-direction: column;">
        <div class="container pt-0 pt-lg-10"
            style="box-sizing: border-box; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; width: 100%; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-right: auto; margin-left: auto; padding-top: 0;">
            <div class="card"
                style="box-sizing: border-box; --bs-card-spacer-y: 1rem; --bs-card-spacer-x: 1rem; --bs-card-title-spacer-y: 0.5rem; --bs-card-border-width: 1px; --bs-card-border-color: #eff2f5; --bs-card-border-radius: 0.95rem; --bs-card-box-shadow: 0px 0px 20px rgba(94, 98, 120, 0.04); --bs-card-inner-border-radius: calc(0.95rem - 1px); --bs-card-cap-padding-y: 0.5rem; --bs-card-cap-padding-x: 1rem; --bs-card-cap-bg: transparent; --bs-card-bg: #ffffff; --bs-card-img-overlay-padding: 1rem; --bs-card-group-margin: 0.75rem; position: relative; display: flex; flex-direction: column; min-width: 0; height: var(--bs-card-height); word-wrap: break-word; background-clip: border-box; border-radius: var(--bs-card-border-radius); border: 0; box-shadow: var(--kt-card-box-shadow); background-color: var(--kt-card-bg);">
                <img class="mx-auto w-100 img-fluid" src="{{ asset('/assets/media/illustrations/bg_ticket.jpg') }}"
                    alt=""
                    style="box-sizing: border-box; vertical-align: middle; max-width: 100%; height: auto; width: 100%; margin-right: auto; margin-left: auto;.z-index: 1 !important">
                <div class="card-body position-absolute top-25 left-50"
                    style="box-sizing: border-box; flex: 1 1 auto; padding: 2rem 2.25rem; color: var(--kt-card-color); position: absolute !important; top: 25% !important;z-index: 2 !important">
                    <div class="row justify-content-center my-5 px-0 my-lg-15 px-lg-10 mt-sm-n20 ms-7 ms-lg-0"
                        style="box-sizing: border-box; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; display: flex; flex-wrap: wrap; margin-right: calc(-.5 * var(--bs-gutter-x)); justify-content: center; margin-top: 1.25rem; margin-bottom: 1.25rem; margin-left: 1.75rem; padding-right: 0; padding-left: 0;">
                        <div class="col-sm-12 col-xl-10 col-xxl-10"
                            style="box-sizing: border-box; flex-shrink: 0; width: 100%; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-top: var(--bs-gutter-y);">
                            <div class="row mb-2 mb-lg-10"
                                style="box-sizing: border-box; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; display: flex; flex-wrap: wrap; margin-top: calc(-1 * var(--bs-gutter-y)); margin-right: calc(-.5 * var(--bs-gutter-x)); margin-left: calc(-.5 * var(--bs-gutter-x)); margin-bottom: .5rem;">
                                <div class="col-8 bg-secondary py-1"
                                    style="box-sizing: border-box; flex-shrink: 0; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-top: var(--bs-gutter-y); flex: 0 0 auto; width: 66.66666667%; --bs-bg-opacity: 1; --kt-bg-rgb-color: var(--kt-secondary-rgb); padding-top: .25rem; padding-bottom: .25rem; background-color: var(--kt-secondary);">
                                    <div class="row justify-content-center my-0 my-lg-5 px-8 px-lg-10 mt-sm-n20"
                                        style="box-sizing: border-box; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; display: flex; flex-wrap: wrap; margin-right: calc(-.5 * var(--bs-gutter-x)); margin-left: calc(-.5 * var(--bs-gutter-x)); justify-content: center; margin-top: 0; margin-bottom: 0; padding-right: 2rem; padding-left: 2rem;">
                                        <div class="col-xl-12 col-xxl-10"
                                            style="box-sizing: border-box; flex-shrink: 0; width: 100%; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-top: var(--bs-gutter-y);">
                                            <div class="text-center"
                                                style="box-sizing: border-box; text-align: center;">
                                                <img class="mw-75 mw-lg-100 w-50 h-auto mh-350px mb-5 mb-lg-20"
                                                    alt=""
                                                    src="{{ asset('/assets/media/logos/wonogiri-fest-logo.png') }}"
                                                    style="box-sizing: border-box; vertical-align: middle; width: 50%; max-width: 75%; height: auto; max-height: 350px; margin-bottom: 1.25rem;">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-xxl-8"
                                            style="box-sizing: border-box; flex-shrink: 0; width: 100%; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-top: var(--bs-gutter-y);">
                                            <div class="fw-semibold fs-8 fs-lg-2 text-muted text-center mb-3 mb-lg-5"
                                                style="box-sizing: border-box; --bs-text-opacity: 1; margin-bottom: .75rem; font-size: .85rem; font-weight: 500; text-align: center; color: var(--kt-text-muted);">
                                                Hallo, <span class="fs-7 fs-lg-1 fw-bold text-gray-800 ms-2"
                                                    style="box-sizing: border-box; margin-left: .5rem; font-size: .95rem; font-weight: 600; color: var(--kt-text-gray-800);">Huda
                                                    Primagama</span>
                                            </div>
                                            <div class="px-3 px-lg-6 py-1 py-lg-6 rounded-2 bg-base-2 lh-base flex-wrap mb-2 mb-lg-5"
                                                style="box-sizing: border-box; flex-wrap: wrap; margin-bottom: .5rem; padding-right: .75rem; padding-left: .75rem; padding-top: .25rem; padding-bottom: .25rem; line-height: 1.5; border-radius: .95rem; background-color: rgba(186, 150, 50, 1); color: #ffffff;">
                                                <div class="fs-8 fs-lg-1 fw-bolder text-gray-900"
                                                    style="box-sizing: border-box; font-size: .85rem; font-weight: 700; color: var(--kt-text-gray-900);">
                                                    Daily Pass
                                                </div>
                                            </div>
                                            <div class="px-3 px-lg-6 py-1 py-lg-6 rounded-2 bg-base-2 lh-base flex-wrap mb-2 mb-lg-5"
                                                style="box-sizing: border-box; flex-wrap: wrap; margin-bottom: .5rem; padding-right: .75rem; padding-left: .75rem; padding-top: .25rem; padding-bottom: .25rem; line-height: 1.5; border-radius: .95rem; background-color: rgba(186, 150, 50, 1); color: #ffffff;">
                                                <div class="fs-8 fs-lg-1 fw-bolder text-gray-900"
                                                    style="box-sizing: border-box; font-size: .85rem; font-weight: 700; color: var(--kt-text-gray-900);">
                                                    2 Ticket
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 bg-danger"
                                    style="box-sizing: border-box; flex-shrink: 0; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-top: var(--bs-gutter-y); flex: 0 0 auto; width: 33.33333333%; --bs-bg-opacity: 1; --kt-bg-rgb-color: var(--kt-danger-rgb); background-color: var(--kt-danger);">
                                    <div class="d-flex align-content-center justify-content-end flex-wrap h-100"
                                        style="box-sizing: border-box; display: flex; height: 100%; flex-wrap: wrap; justify-content: flex-end; align-content: center;">
                                        <div class="text-center mx-0 mx-lg-5 px-1 px-lg-5 py-1 py-lg-5 rounded-3 shadow border border-3 border-white bg-white mb-0 mb-lg-5"
                                            style="box-sizing: border-box; --bs-border-opacity: 1; --bs-border-width: 3px; --bs-bg-opacity: 1; --kt-bg-rgb-color: var(--kt-white-rgb); box-shadow: 0 .5rem 1.5rem .5rem rgba(0, 0, 0, .075); border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color); border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)); margin-right: 0; margin-left: 0; margin-bottom: 0; padding-right: .25rem; padding-left: .25rem; padding-top: .25rem; padding-bottom: .25rem; text-align: center; border-radius: 1.5rem; background-color: var(--kt-white);">
                                            <img class="mw-100 mw-lg-100 w-100 h-auto mh-450px" alt=""
                                                src="{{ asset('/assets/media/qrcode-sample.png') }}"
                                                style="box-sizing: border-box; vertical-align: middle; width: 100%; max-width: 100%; height: auto; max-height: 450px;">
                                        </div>
                                        <div class="fs-6 fs-lg-3x fw-bolder text-gray-200 text-center w-100"
                                            style="box-sizing: border-box; width: 100%; font-size: 1.075rem; font-weight: 700; text-align: center; color: var(--kt-text-gray-200);">
                                            32441343
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fs-4x text-white font-title text-base-2  ls-4"
                                style="box-sizing: border-box; --bs-text-opacity: 1; font-size: calc(1.525rem + 3.3vw); letter-spacing: .25rem; font-family: Ultra; color: #FEC012;">
                                INFORMASI PENTING
                            </div>
                            <div class="flex-wrap" style="box-sizing: border-box; flex-wrap: wrap;">
                                <ol class="list-group list-group-numbered"
                                    style="box-sizing: border-box; margin-top: 0; --bs-list-group-border-width: 1px; --bs-list-group-border-radius: 0.95rem; --bs-list-group-item-padding-x: 1rem; --bs-list-group-item-padding-y: 0.5rem; display: flex; flex-direction: column; padding-left: 0; margin-bottom: 0; border-radius: var(--bs-list-group-border-radius); list-style-type: none; counter-reset: section; --bs-list-group-color: var(--kt-list-group-color); --bs-list-group-bg: var(--kt-list-group-bg); --bs-list-group-border-color: var(--kt-list-group-border-color); --bs-list-group-action-color: var(--kt-list-group-action-color); --bs-list-group-action-hover-color: var(--kt-list-group-action-hover-color); --bs-list-group-action-hover-bg: var(--kt-list-group-hover-bg); --bs-list-group-action-active-color: var(--kt-list-group-action-active-color); --bs-list-group-action-active-bg: var(--kt-list-group-action-active-bg); --bs-list-group-disabled-color: var(--kt-list-group-disabled-color); --bs-list-group-disabled-bg: var(--kt-list-group-disabled-bg); --bs-list-group-active-color: var(--kt-list-group-active-color); --bs-list-group-active-bg: var(--kt-list-group-active-bg); --bs-list-group-active-border-color: var(--kt-list-group-active-border-color);">
                                    <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                        style="box-sizing: border-box; position: relative; display: block; padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x); --bs-border-width: 0; --bs-text-opacity: 1; --bs-bg-opacity: 1; border-top-left-radius: inherit; border-top-right-radius: inherit; border: 0; padding-top: 0; font-size: .85rem; font-weight: 600; background-color: transparent; color: var(--kt-text-white);">
                                        Ini adalah bukti pembelian tiket berupa voucher pembelian, harap agar disimpan
                                        dengan baik.
                                    </li>
                                    <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                        style="box-sizing: border-box; position: relative; display: block; padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x); --bs-border-width: 0; --bs-text-opacity: 1; --bs-bg-opacity: 1; border-top-width: 0; border: 0; padding-top: 0; font-size: .85rem; font-weight: 600; background-color: transparent; color: var(--kt-text-white);">
                                        Voucher hanya berlaku untuk satu kali penukaran saja.
                                    </li>
                                    <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                        style="box-sizing: border-box; position: relative; display: block; padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x); --bs-border-width: 0; --bs-text-opacity: 1; --bs-bg-opacity: 1; border-top-width: 0; border: 0; padding-top: 0; font-size: .85rem; font-weight: 600; background-color: transparent; color: var(--kt-text-white);">
                                        Voucher tidak dapat dipindahtangankan.
                                    </li>
                                    <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                        style="box-sizing: border-box; position: relative; display: block; padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x); --bs-border-width: 0; --bs-text-opacity: 1; --bs-bg-opacity: 1; border-top-width: 0; border: 0; padding-top: 0; font-size: .85rem; font-weight: 600; background-color: transparent; color: var(--kt-text-white);">
                                        Voucher harus ditukarkan menjadi tiket gelang di lokasi acara
                                    </li>
                                    <li class="list-group-item bg-transparent border-0 text-white fs-8 fs-lg-4 fw-bold pt-0 pt-lg-2"
                                        style="box-sizing: border-box; position: relative; display: block; padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x); --bs-border-width: 0; --bs-text-opacity: 1; --bs-bg-opacity: 1; border-bottom-right-radius: inherit; border-bottom-left-radius: inherit; border-top-width: 0; border: 0; padding-top: 0; font-size: .85rem; font-weight: 600; background-color: transparent; color: var(--kt-text-white);">
                                        Penukaran voucher dilayani di lokasi acara dari tanggal 25 Februari 2023 jam
                                        09.00 WIB dengan menunjukkan voucher dan kartu identitas asli sesuai yang
                                        tertera di voucher pembelian.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
