@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Verifikasi Ticket</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk verifikasi hasil pembelian ticket Online</span>
            </h3>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success text-center">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-rounded table-striped border gy-7 gs-7" id="kt_datatable">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>No</th>
                                <th>ID Ticket*hidden</th>
                                <th>ID Ticket</th>
                                <th>Nama Pembeli</th>
                                <th>Tanggal Pembelian</th>
                                <th class="text-center">Jenis</th>
                                <th>Jumlah Ticket</th>
                                <th class="text-center"><i class="fa-light fa-grip-dots-vertical"></i></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('verification.index_foot')
@endsection
