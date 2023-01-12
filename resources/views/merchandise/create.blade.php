@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush shadow-sm">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Tambah Merchandise</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk menambah Merchandise</span>
            </h3>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <form class="form fv-plugins-bootstrap fv-plugins-framework mt-5" method="POST" enctype="multipart/form-data"
                action="{{ route('merchandise.store') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-sm-12 mb-10 mb-lg-2">
                        <div class="mb-5">
                            <label class="form-label fs-7 text-gray-700">Kode Produk</label>
                            <input type="text" class="form-control form-control-lg" name="code" value=""
                                placeholder="1WB">
                            <small class="text-danger">
                                @error('code')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="mb-5">
                            <label class="form-label fs-7 text-gray-700">Harga</label>
                            <input type="number" class="form-control form-control-lg" name="price" value=""
                                min="0" placeholder="20000">
                            <small class="text-danger">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="mb-5">
                            <label class="form-label fs-7 text-gray-700">Link WA</label>
                            <textarea class="form-control form-control-lg" name="link" placeholder="https://wa.me/62831648xxxx"></textarea>
                            <small class="text-danger">
                                @error('link')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="mb-5">
                            <div class="row justify-content-start">
                                <div class="col-xl-12 col-xxl-7">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div><label class="form-label fs-7 text-gray-700">Gambar Thumbnail</label></div>
                                            <div class="image-input image-input-empty border border-white border-5 shadow-sm"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ asset('/assets/media/avatars/blank.png') }})">
                                                <div class="image-input-wrapper w-250px h-250px"></div>

                                                <label
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Change thumbnail">
                                                    <i class="bi bi-pencil-fill fs-7"></i>

                                                    <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="thumbnail_remove" />
                                                </label>

                                                <span
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Cancel thumbnail">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>

                                                <span
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Remove thumbnail">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                            </div>
                                            <small class="text-danger">
                                                @error('thumbnail')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div><label class="form-label fs-7 text-gray-700">Gambar Detail</label></div>
                                            <div class="image-input image-input-empty border border-white border-5 shadow-sm"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ asset('/assets/media/avatars/blank.png') }})">
                                                <div class="image-input-wrapper w-250px h-250px"></div>

                                                <label
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>

                                                    <input type="file" name="path" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="path_remove" />
                                                </label>

                                                <span
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>

                                                <span
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                            </div>
                                            <small class="text-danger">
                                                @error('path')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="separator separator-dashed border-secondary my-8"></div>
                        <div class="d-flex justify-content-end flex-wrap">
                            <a href="{{ route('merchandise.index') }}" class="btn btn-light px-5 ms-3">
                                <span class="fw-semibold text-primary">Kembali</span>
                            </a>
                            <button type="submit" class="btn btn-primary px-5 ms-3">
                                <span class="fw-bold">Simpan</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
