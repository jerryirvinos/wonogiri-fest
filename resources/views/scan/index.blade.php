@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Scan Ticket</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk scan ticket</span>
            </h3>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                <div style="width: 500px" id="reader"></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('/assets/js/html5-qrcode.min.js') }}"></script>
    @include('scan.index_foot')
@endsection
