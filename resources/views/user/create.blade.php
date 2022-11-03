@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Tambah User</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk menambah user</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('user.index') }}" class="btn btn-active-light-danger">
                    <span class="text-danger fw-bolder">Batal</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                <form class="form fv-plugins-bootstrap fv-plugins-framework mt-5" method="POST"
                    action="{{ route('user.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-10 mb-lg-2">
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Nama</label>
                                <input type="text" class="form-control form-control-lg" name="name" value="">
                                <small class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">ID Identitas</label>
                                <input type="number" name="identity_number" class="form-control form-control-lg"
                                    value="" maxlength="16"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <small class="text-danger">
                                    @error('identity_number')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Alamat</label>
                                <textarea class="form-control form-control-lg" data-kt-autosize="true" name="address"></textarea>
                                <small class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">No Handphone</label>
                                <input type="number" class="form-control form-control-lg" name="phone"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    placeholder="Masukkan No HP" maxlength="13" value="">
                                <small class="text-danger">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Role</label>
                                <select class="form-select form-select-lg" data-control="select2"
                                    id="kt_docs_select2_rich_content" data-placeholder="Silahkan pilih salah satu"
                                    name="role">
                                    <option value=""></option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="text-danger">
                                    @error('role')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <a href="{{ route('user.index') }}"
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
