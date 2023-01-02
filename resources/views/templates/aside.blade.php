<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">

    {{-- <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
        data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle"> --}}
    <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
        <a href="/">
            <img alt="Logo" src="{{ asset('/assets/media/logos/wonogiri-fest-logo.png') }}" class="p-2 h-40px" />
        </a>
    </div>
    <div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
        <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y scroll-ps d-flex" data-kt-scroll="true"
            data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
            data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
            <div id="kt_aside_menu"
                class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-semibold fs-6 my-auto"
                data-kt-menu="true">
                <div class="menu-item py-2 {{ request()->routeIs('dashboard.index') ? 'here' : '' }}">
                    <a href="#"
                        class="menu-link menu-center flex-column {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                        <span class="menu-icon me-0 mb-3">
                            <i class="fa-light fa-chart-pie fs-2x"></i>
                        </span>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </div>
                <div class="menu-item py-2 {{ request()->routeIs('verification.index') ? 'here' : '' }}">
                    <a href="{{ route('verification.index') }}"
                        class="menu-link menu-center flex-column {{ request()->routeIs('verification.index') ? 'active' : '' }}">
                        <span class="menu-icon me-0 mb-3">
                            <i class="fa-light fa-ballot-check fs-2x"></i>
                        </span>
                        <div class="menu-title">Verifikasi</div>
                    </a>
                </div>
                <div class="menu-item py-2 {{ request()->routeIs('ticket.index') ? 'here' : '' }}">
                    <a href="{{ route('ticket.index') }}"
                        class="menu-link menu-center flex-column {{ request()->routeIs('ticket.index') ? 'active' : '' }}">
                        <span class="menu-icon me-0 mb-3">
                            <i class="fa-light fa-file-invoice-dollar fs-2x"></i>
                        </span>
                        <div class="menu-title">Ticket</div>
                    </a>
                </div>
                <div class="menu-item py-2 {{ request()->routeIs('scan.index') ? 'here' : '' }}">
                    <a href="{{ route('scan.index') }}"
                        class="menu-link menu-center flex-column {{ request()->routeIs('scan.index') ? 'active' : '' }}">
                        <span class="menu-icon me-0 mb-3">
                            <i class="fa-light fa-qrcode fs-2x"></i>
                        </span>
                        <div class="menu-title">Scan</div>
                    </a>
                </div>
                @if (session()->get('user')['role'] == '1')
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item py-2 {{ request()->routeIs('user.index') || request()->routeIs('tickettype.index') ? 'here' : '' }}">
                    <span class="menu-link menu-center flex-column">
                        <span class="menu-icon me-0 mb-3">
                            <i class="fa-light fa-database fs-2x"></i>
                        </span>
                        <div class="menu-title">Master</div>
                    </span>
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-dropdown py-4 w-200px w-lg-225px">
                        <div class="menu-item">
                            <div class="menu-content">
                                <span class="menu-section fs-5 fw-bolder text-gray-800 ps-1 py-1">Master</span>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('user.index') ? 'active' : '' }}"
                                href="{{ route('user.index') }}">
                                <span class="menu-icon me-3">
                                    <i class="fa-light fa-users fs-lg"></i>
                                </span>
                                <span class="menu-title">User</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('tickettype.index') ? 'active' : '' }}"
                                href="{{ route('tickettype.index') }}">
                                <span class="menu-icon me-3">
                                    <i class="fa-light fa-users fs-lg"></i>
                                </span>
                                <span class="menu-title">Tiket</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
        <div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip" data-bs-placement="right"
            data-bs-dismiss="click" title="Logout">
            <a href="{{ route('user.logout') }}" class="btn btn-custom" data-kt-menu-trigger="click"
                data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                <i class="fa-light fa-right-from-bracket fs-2x"></i>
            </a>
        </div>
    </div>
</div>