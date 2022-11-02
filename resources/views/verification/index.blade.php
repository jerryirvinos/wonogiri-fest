@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Verifikasi Ticket</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk verifikasi hasil pembelian ticket dari
                    User</span>
            </h3>
            <div class="card-toolbar">

            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-rounded table-striped border gy-7 gs-7" id="_datatables_1">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>No</th>
                                <th>ID Ticket</th>
                                <th>Nama Pembeli</th>
                                <th>Tanggal Pembelian</th>
                                <th class="text-center">Jenis</th>
                                <th class="text-center">Jumlah</th>
                                <th>Total Harga</th>
                                <th>No Telepon</th>
                                <th class="text-center"><i class="fa-light fa-grip-dots-vertical"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-50px align-middle text-center">
                                    1
                                </td>
                                <td class="align-middle">
                                    <div class="fs-3 text-dark fw-bolder text-hover-primary mb-1">
                                        WF-002354
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-column">
                                            <div class="fs-4 fw-bolder text-gray-800">
                                                Huda Prima Sentosa
                                            </div>
                                            <div class="fs-6 fw-semibold text-gray-500">
                                                3404061124514905
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <div class="fs-7 fw-semibold text-gray-700">
                                            Rabu
                                        </div>
                                        <div class="fs-5 fw-bold text-gray-800">
                                            2 November 2022
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="badge badge-light-warning rounded-pill px-6 py-3">
                                        <span class="fs-6 fw-bold">Presale</span>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="fs-3 fw-bolder text-gray-700">
                                        3
                                    </div>
                                </td>
                                <td class="align-middle text-end">
                                    <span class="fs-5 text-gray-900">
                                        Rp 200.000,00
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <span class="fs-5 text-gray-900">
                                        081456789012
                                    </span>
                                </td>
                                <td class="align-middle text-end">
                                    <a href="#" class="btn btn-icon btn-warning me-1">
                                        <i class="fa-duotone fa-check-to-slot fa-lg"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-primary-custom me-1">
                                        <i class="fa-duotone fa-eyes fa-lg"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-danger me-1">
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
