@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Tambah Merchandise</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk menambah Merchandise</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('merchandise.index') }}" class="btn btn-active-light-danger">
                    <span class="text-danger fw-bolder">Batal</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                <form class="form fv-plugins-bootstrap fv-plugins-framework mt-5" method="POST"
                    action="{{ route('merchandise.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-10 mb-lg-2">
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Kode</label>
                                <input type="text" class="form-control form-control-lg" name="code" value=""
                                    placeholder="1WB">
                                <small class="text-danger">
                                    @error('code')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Harga</label>
                                <input type="text" class="form-control form-control-lg" name="price" value=""
                                    placeholder="20000">
                                <small class="text-danger">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Link</label>
                                <textarea class="form-control form-control-lg" name="link" placeholder="https://wa.me/62831648xxxx"></textarea>
                                <small class="text-danger">
                                    @error('link')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <div><label class="form-label fs-7 text-gray-700">Gambar</label></div>

                                <!--begin::Image input-->
                                <div class="image-input image-input-empty" data-kt-image-input="true"
                                    style="background-image: url({{ asset('/assets/media/avatars/blank.png') }})">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-125px"></div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                        title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                        title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                        title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <small class="text-danger">
                                    @error('path')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <a href="{{ route('merchandise.index') }}"
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

@section('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
