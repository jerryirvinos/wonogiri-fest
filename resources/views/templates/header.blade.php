<div id="kt_header" class="header bg-base py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-offset="{lg: '300px'}">
    <div class="header-container container-xxl">
        <div
            class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
            <h1 class="d-flex flex-column text-dark fw-bold my-1">
                <span class="text-white fs-1">Kamis, 21 November 2022</span>
                <small class="text-gray-300 fs-5 fw-normal pt-2">
                    Hallo <span class="fs-4 fw-bolder">{{ session()->get('user')['name'] }}</span>, terimakasih sudah
                    berjuang hari
                    ini <span class="fs-1 ms-2 my-auto">&#128513;</span>
                </small>
            </h1>
        </div>
        <div class="d-flex align-items-center flex-wrap">
            <div class="d-flex align-items-center py-3 py-lg-0">
                <a href="#" class="btn btn-warning rounded-pill">
                    <span class="fs-4 fw-bolder">{{ session()->get('user')['role_name'] }}</span>
                </a>
            </div>
        </div>
    </div>
    <div class="header-offset"></div>
</div>
