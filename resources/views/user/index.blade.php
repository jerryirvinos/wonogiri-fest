@extends('templates.master')

@section('styles')
@endsection

@section('content')
<div class="card card-flush">
    <div class="card-header pt-lg-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fs-2 fw-bolder text-gray-800">User</span>
            <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk manajemen User</span>
        </h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-lg btn-warning">
                <span class="fs-5 fw-bolder">Tambah</span>
            </button>
        </div>
    </div>
    <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-rounded table-striped border gy-7 gs-7" id="_datatables_1">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>STATUS</th>
                            <th>TERDAFTAR OLEH</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50px align-middle">
                                1
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <div class="symbol-label">
                                        <div class="symbol-label"
                                            style="background-image:url('{{ asset('/assets/media/avatars/blank.png') }}')">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fs-4 fw-bolder text-gray-800 text-hover-primary">
                                        Huda Prima Sentosa
                                    </div>
                                    <div class="fs-6 fw-semibold text-gray-500">
                                        Super Admin
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span class="badge badge-light-primary-custom rounded-pill px-6 py-3">
                                    <span class="fs-6 fw-bold">Aktif</span>
                                </span>
                            </td>
                            <td class="align-middle">
                                <div class="fs-6 fw-bold text-gray-600">
                                    Yeremia Satrio
                                </div>
                            </td>
                            <td class="align-middle">
                                <a href="#" class="btn btn-icon btn-warning me-2">
                                    <i class="fa-duotone fa-check-to-slot fa-lg"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-primary-custom me-2">
                                    <i class="fa-duotone fa-eyes fa-lg"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-danger me-2">
                                    <i class="fa-duotone fa-trash fa-lg"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection