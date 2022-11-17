@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Tambah Ticket</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk menambahkan tiket secara manual</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('verification.index') }}" class="btn btn-active-light-danger">
                    <span class="text-danger fw-bolder">Batal</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                <form class="w-100" method="post" action="{{ route('verification.store') }}" novalidate="novalidate"
                    id="kt_create_account_form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 mb-10 mb-lg-2">
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">ID Identitas</label>
                                <input type="number"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    min="0" maxlength="16" class="form-control form-control-lg"
                                    name="identity_number" value="">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Nama Pembeli</label>
                                <input type="text" class="form-control form-control-lg" name="name" value="">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">No Handphone</label>
                                <input type="text" class="form-control form-control-lg"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    min="0" maxlength="13" name="phone" value="">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Jenis</label>
                                <select name="ticket_type" aria-label="Pilih Jenis Pelanggaran" data-control="select2"
                                    data-placeholder="Pilih Salah Satu" data-dropdown-parent="#kt_create_account_form"
                                    class="form-select fw-bolder">
                                    <option value=""></option>
                                    @foreach ($ticketTypes as $ticketType)
                                        <option value="{{ $ticketType->id }}" data-price="{{ $ticketType->price }}">
                                            {{ $ticketType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Jumlah</label>
                                <input type="number" name="qty" min="1" class="form-control form-control-lg"
                                    value="">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Total Harga</label>
                                <input type="text" name="total_price"
                                    class="form-control form-control-lg form-control-solid" readonly value="">
                            </div>
                            <div class="mb-10">
                                <label for="" class="form-label">Alamat</label>
                                <textarea class="form-control form-control-lg" data-kt-autosize="true"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 mb-10 mb-lg-2">
                            <div class="border border-light rounded-3 shadow-xs px-5 py-6">
                                <div class="mb-10">
                                    <label class="form-label fs-7 text-gray-700">Bank Pembayaran</label>
                                    <select class="form-select form-select-lg" data-control="select2"
                                        id="kt_docs_select2_rich_content" data-placeholder="Silahkan pilih salah satu">
                                        <option value=""></option>
                                        @foreach ($banks as $bank)
                                            <option value="{{ $bank->id }}"
                                                data-kt-rich-content-subcontent="{{ $bank->account_number }}"
                                                data-kt-rich-content-icon="{{ asset($bank->logos) }}">
                                                {{ $bank->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fs-7 text-gray-700">Nomor Rekening</label>
                                    <input type="number" min="0" class="form-control form-control-lg"
                                        placeholder="Masukan Nomor Rekening Pembeli" value="">
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
                                <button type="submit" class="btn btn-primary btn-lg rounded-3 w-100 py-5 my-5 d-none"
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
            $('input[name="qty"]').on('keyup', function() {
                var name = $('select[name="ticket_type"]').find('option:selected').data();
                var qty = 0;
                if (name.price) {
                    qty = parseInt(name.price) * parseInt(this.value)
                }

                $('[name="total_price"]').val(qty);
            });

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
