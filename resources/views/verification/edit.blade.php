@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Verifikasi Ticket : {{ $bills->ticket_code }}</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk verifikasi hasil pembelian ticket online</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('verification.index') }}" class="btn btn-active-light-danger">
                    <span class="text-danger fw-bolder">Batal</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                <form class="w-100" method="post" action="{{ route('verification.update', $bills->id) }}"
                    novalidate="novalidate" id="kt_create_account_form">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 mb-10 mb-lg-2">
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">ID Ticket</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ $bills->ticket_code }}">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">ID Identitas</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ $bills->identity_number }}">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Nama Pembeli</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ $bills->name }}">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">No Handphone</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ $bills->phone }}">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Email</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ $bills->email }}">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Tanggal Pembelian</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ customTanggal($bills->created_at) }}">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Jenis</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ $ticket_type->name }}">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Total Harga Satuan</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ $bills->total_price }}">
                            </div>
                            <div class="mb-10">
                                <label for="" class="form-label">Alamat</label>
                                <textarea class="form-control form-control-lg form-control-solid" data-kt-autosize="true" readonly>{{ $bills->address }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 mb-10 mb-lg-2">
                            <div class="border border-light rounded-3 shadow-xs px-5 py-6">
                                <div class="mb-10">
                                    <label class="form-label fs-7 text-gray-700">Bank Pembayaran</label>
                                    <select class="form-select form-select-lg" data-control="select2"
                                        id="kt_docs_select2_rich_content" data-placeholder="Silahkan pilih salah satu">
                                        <option value=""></option>
                                        <option value="1" data-kt-rich-content-subcontent="12345678"
                                            data-kt-rich-content-icon="{{ asset('/assets/media/bank/mandiri.png') }}">
                                            Mandiri
                                        </option>
                                        <option value="2" data-kt-rich-content-subcontent="12345678"
                                            data-kt-rich-content-icon="{{ asset('/assets/media/bank/bca.png') }}">
                                            BCA
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fs-7 text-gray-700">Nomor Rekening</label>
                                    <input type="number"class="form-control form-control-lg"
                                        placeholder="Masukan Nomor Rekening Pembeli" value="">
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fs-7 text-gray-700">Total Transfer</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                        value="{{ $bills->total_pay }}">
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fs-7 text-gray-700">Status Pembayaran</label>
                                    <div class="d-flex flex-wrap border border-secondary rounded-2 p-3">
                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                            <label class="form-check-label text-gray-700" for="RBStatus">
                                                Belum Terbayar
                                            </label>
                                            <input class="form-check-input min-w-65px mx-3 status_bayar" type="checkbox"
                                                value="true" id="RBStatus" name="RBStatus" />
                                            <label class="form-check-label text-gray-800 fw-semibold" for="RBStatus">
                                                Sudah Terbayar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button"
                                    class="btn btn-warning btn-lg hover-scale rounded-3 w-100 py-5 my-5 d-none"
                                    id="btn-generate">
                                    <span class="fs-4 fw-bolder">Generate QR Code</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-lg rounded-3 w-100 py-5 my-5 d-none"
                                    id="btn-submit">
                                    <span class="fs-4 fw-bolder">Simpan</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 mb-10 mb-lg-2">
                            <div class="bg-secondary w-100 h-50 rounded-4">
                                <div class="d-flex justify-content-center align-content-center flex-wrap h-100">
                                    <span class="fs-4 fw-bolder text-gray-800">N/A</span>
                                </div>
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
            $('.status_bayar').on('change', function() {
                if ($(this).is(':checked')) {
                    $("#btn-generate").addClass("d-block").removeClass("d-none");
                    $("#btn-submit").addClass("d-block").removeClass("d-none");
                } else {
                    $("#btn-generate").addClass("d-none").removeClass("d-block");
                    $("#btn-submit").addClass("d-none").removeClass("d-block");
                }
            })



            // Format options
            const optionFormat = (item) => {
                if (!item.id) {
                    return item.text;
                }

                var span = document.createElement('span');
                var template = '';

                template += '<div class="d-flex align-items-center">';
                template +=
                    '<div class="symbol symbol-50px px-1 me-5"><div class="symbol-label symbol-label-fit" style="background-image:url(' +
                    "'" +
                    item.element.getAttribute('data-kt-rich-content-icon') + "'" +
                    '"alt="' + item.text + '" /></div></div>';
                template += '<div class="d-flex flex-column">'
                template += '<span class="fs-4 fw-bold lh-1 mb-2">' + item.text + '</span>';
                template += '<span class="text-muted fs-6">' + item.element.getAttribute(
                    'data-kt-rich-content-subcontent') + '</span>';
                template += '</div>';
                template += '</div>';

                span.innerHTML = template;

                return $(span);
            }

            $('#kt_docs_select2_rich_content').select2({
                placeholder: "Select an option",
                minimumResultsForSearch: Infinity,
                templateSelection: optionFormat,
                templateResult: optionFormat
            });
        });
    </script>

    <script></script>
@endsection
