<!DOCTYPE html>
<html>

<head>
    <title>Hi</title>
</head>
<style>
    .d-flex {
        display: flex !important;
    }

    .flex-column {
        flex-direction: column !important;
    }

    .flex-root {
        flex: 1;
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

    .pt-0 {
        padding-top: 0 !important;
    }

    .pt-lg-10 {
        padding-top: 2.5rem !important;
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

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .w-100 {
        width: 100% !important;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }
</style>

<body>
    <img class="mx-auto w-100 img-fluid" src="{{ asset('/assets/media/illustrations/bg_ticket.png') }}" alt="">
</body>

</html>
