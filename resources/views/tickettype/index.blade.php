@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Jenis Tiket</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk manajemen Jenis Tiket</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('tickettype.create') }}" class="btn btn-lg btn-warning">
                    <span class="fs-5 fw-bolder">Tambah</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-rounded table-striped border gy-7 gs-7" id="kt_datatable">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>NO</th>
                                <th>CODE</th>
                                <th>NAMA</th>
                                <th>TITLE</th>
                                <th>DETAIL</th>
                                <th>HARGA</th>
                                <th>STATUS</th>
                                <th>IS RELEASE</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('tickettype.index_foot')
@endsection
