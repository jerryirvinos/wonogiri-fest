<div id="kt_header" class="header bg-base py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-offset="{lg: '300px'}">
    <div class="header-container container-xxl">
        <div
            class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
            <h1 class="d-flex flex-column text-dark fw-bold my-1">
                @php
                    $unix_timestamp = strtotime(date('Y-m-d'));
                @endphp
                <span class="text-white fs-1">
                    {{ date('l', $unix_timestamp) }}
                </span>
                <small class="text-gray-300 fs-5 fw-normal pt-2">
                    Hallo <span class="fs-4 fw-bolder">{{ session()->get('user')['name'] }}</span>, terimakasih sudah
                    berjuang hari
                    ini <span class="fs-1 ms-2 my-auto">&#128513;</span>
                </small>
            </h1>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-wrap w-100 w-lg-auto"
            id="kt_header_user_menu_toggle">
            <div class="btn cursor-pointer btn-warning rounded-pill" data-kt-menu-trigger="click"
                data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <span class="fs-4 fw-bolder">{{ session()->get('user')['role_name'] }}</span>
            </div>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                data-kt-menu="true" style="">
                <div class="menu-item px-2">
                    <a href="{{ route('user.logout') }}" class="menu-link text-hover-danger px-5">
                        <i class="fa-duotone fa-right-from-bracket fs-1 me-2"></i>
                        Sign Out
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-offset"></div>
</div>
