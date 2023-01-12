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
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <form class="form fv-plugins-bootstrap fv-plugins-framework mt-5" method="POST" enctype="multipart/form-data"
                action="{{ route('instagram.store') }}">
                @csrf
                <div class="mb-5">
                    <label class="form-label fs-7 text-gray-700">Caption</label>
                    <textarea type="text" class="form-control form-control-lg" data-kt-autosize="true" name="title"></textarea>
                    <small class="text-danger">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="mb-5">
                    <label class="form-label fs-7 text-gray-700">Link Postingan</label>
                    <input type="text" class="form-control form-control-lg" name="link" value="">
                    <small class="text-danger">
                        @error('link')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="mb-5">
                    <div class="row">
                        <div class="col-md-6 col-xl-6 col-sm-12">
                            <div><label class="form-label fs-7 text-gray-700">Gambar Thumbnail</label></div>
                            <div class="image-input image-input-empty border border-white border-5 shadow-sm"
                                data-kt-image-input="true"
                                style="background-image: url({{ asset('/assets/media/avatars/blank.png') }})">
                                <div class="image-input-wrapper w-225px h-225px">
                                </div>
                                <label
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Change thumbnail">
                                    <i class="bi bi-pencil-fill fs-7"></i>

                                    <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="thumbnail_remove" />
                                </label>

                                <span
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Cancel thumbnail">
                                    <i class="bi bi-x fs-2"></i>
                                </span>

                                <span
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Remove thumbnail">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                            <small class="text-danger">
                                @error('thumbnail')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                </div>
                <div class="separator separator-dashed border-secondary my-8"></div>
                <div class="d-flex justify-content-end flex-wrap">
                    <a href="{{ route('instagram.index') }}" class="btn btn-light px-5 ms-3">
                        <span class="fw-semibold text-primary">Kembali</span>
                    </a>
                    <button type="submit" class="btn btn-primary px-5 ms-3">
                        <span class="fw-bold">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
