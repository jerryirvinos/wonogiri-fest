@extends('templates.master')

@section('styles')
    <link href="{{ asset('assets/js/custom/nestable/jquery.nestable.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Line UP</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk manajemen Line Up</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('lineup.create') }}" class="btn btn-lg btn-warning">
                    <span class="fs-5 fw-bolder">Tambah</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-title">
                <a class="btn btn-info btn-lg btn-shadow save">
                    <i class="fa-duotone fa-check me-1"></i>
                    <span class="fw-bold">Simpan Urutan</span>
                    <form method="post" class="d-flex pull-right" action="{{ route('lineup.save_order') }}">
                        @csrf
                        <textarea class="form-control nestable-output" name="menu" hidden></textarea>
                    </form>
                </a>
            </div>
            <div class="fs-5 fs-lg-8 fw-semibold text-danger fst-italic mt-3">
                *) Silahkan drag ke atas dan bawah data pada bagian anak panah biru muda untuk merubah urutan data. Apabila
                sudah selesai dalam melakukan pengurutan data, jangan lupa tekan tombol <span
                    class="fs-6 fw-bolder ms-1">Simpan Urutan</span>
            </div>
            <div class="dd nestable mt-8">
                <ol class="dd-list p-3 p-lg-6 bg-light rounded-2">
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/custom/nestable/jquery.nestable.js') }}"></script>
    @include('lineup.index_foot')
@endsection
