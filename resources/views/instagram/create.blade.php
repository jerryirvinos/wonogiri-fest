@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Tambah Instagram</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk menambah Post Instagram</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('instagram.index') }}" class="btn btn-active-light-danger">
                    <span class="text-danger fw-bolder">Batal</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                <form class="form fv-plugins-bootstrap fv-plugins-framework mt-5" method="POST"
                    enctype="multipart/form-data" action="{{ route('instagram.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-10 mb-lg-2">
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Link Instagram</label>
                                <input type="text" class="form-control form-control-lg" name="title" value="">
                                <small class="text-danger">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <a href="{{ route('instagram.index') }}"
                                    class="btn btn-light-primary font-weight-bolder px-5 py-2"><i
                                        class="fa fa-chevron-left"></i>
                                    Kembali</a>
                                <button type="submit" class="btn btn-success font-weight-bolder px-5 py-2"><i
                                        class="fa fa-check"></i>
                                    Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
