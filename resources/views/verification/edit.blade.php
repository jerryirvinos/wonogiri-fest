@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Verifikasi Ticket : {{ $order->ticket_code }}</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk verifikasi hasil pembelian ticket online</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('verification.index') }}" class="btn btn-active-light-danger">
                    <span class="text-danger fw-bolder">Batal</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <form class="w-100" method="post" action="{{ route('verification.update', $order->id) }}"
                novalidate="novalidate" id="kt_create_account_form">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-4 col-sm-12 mb-10 mb-lg-2">
                        <div class="mb-10">
                            <label class="form-label fs-7 text-gray-700">ID Ticket</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                value="{{ $order->ticket_code }}">
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-7 text-gray-700">ID Identitas</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                value="{{ $order->identity_number }}">
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-7 text-gray-700">Nama Pembeli</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                value="{{ $order->name }}">
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-7 text-gray-700">No Handphone</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                value="{{ $order->phone }}">
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-7 text-gray-700">Email</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                value="{{ $order->email }}">
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-7 text-gray-700">Tanggal Pembelian</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                value="{{ customTanggal($order->created_at) }}">
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-7 text-gray-700">Jenis</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                value="{{ $ticket_type->name }}">
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-7 text-gray-700">Jumlah Tiket</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                value="{{ $order->qty }}">
                        </div>
                        <div class="mb-10">
                            <label for="" class="form-label">Alamat</label>
                            <textarea class="form-control form-control-lg form-control-solid" data-kt-autosize="true" readonly>{{ $order->address }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-10 mb-lg-2">
                        <div class="border border-light rounded-3 shadow-xs px-5 py-6">
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Bank Pembayaran</label>
                                <select class="form-select form-select-lg" data-control="select2"
                                    id="kt_docs_select2_rich_content" data-placeholder="Silahkan pilih salah satu"
                                    name="bank">
                                    <option value=""></option>
                                    @foreach ($banks as $bank)
                                        <option value="{{ $bank->id }}"
                                            {{ $order->bank == $bank->id ? 'selected' : '' }}
                                            data-kt-rich-content-subcontent="{{ $bank->account_number }}"
                                            data-kt-rich-content-icon="{{ asset($bank->logos) }}">
                                            {{ $bank->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="text-danger">
                                    @error('bank')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Pemilik Rekening</label>
                                <input type="text" class="form-control form-control-lg"
                                    placeholder="Masukan Nama Rekening Pembeli" value="{{ $order->account_name }}"
                                    name="account_name">
                                <small class="text-danger">
                                    @error('account_name')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Nomor Rekening</label>
                                <input type="number" class="form-control form-control-lg" min="0"
                                    placeholder="Masukan Nomor Rekening Pembeli" value="" name="account_number">
                                <small class="text-danger">
                                    @error('account_number')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Total Transfer</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ format_rupiah($order->total_pay) }}">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Status Pembayaran</label>
                                <div class="d-flex flex-wrap border border-secondary rounded-2 p-3">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <label class="form-check-label text-gray-700" for="RBStatus">
                                            Belum Terbayar
                                        </label>
                                        <input class="form-check-input min-w-65px mx-3 status_bayar" type="checkbox"
                                            value="true" id="RBStatus" name="payment_status" />
                                        <label class="form-check-label text-gray-800 fw-semibold" for="RBStatus">
                                            Sudah Terbayar
                                        </label>
                                    </div>
                                </div>
                                <small class="text-danger">
                                    @error('payment_status')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <input type="hidden" name="generateQr" value="">
                            <small class="text-danger">
                                @error('generateQr')
                                    {{ $message }}
                                @enderror
                            </small>
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
                        <div class="w-100 h-auto rounded-4 px-5 px-lg-15">
                            <div
                                class="d-flex justify-content-center align-content-center flex-wrap h-100 bg-white border border-white border-4 shadow py-3 rounded-4">
                                <div class="d-none" id="qr-code">{!! QrCode::size(250)->generate(
                                    json_encode(['ticketCode' => $order->ticket_code, 'id' => $order->uuid, 'jns' => true]),
                                ) !!}</div>
                                <span class="fs-4 fw-bolder text-gray-800 d-block" id="na">N/A</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="card card-flush rounded-3 shadow-xs">
                            <div class="card-header pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fs-2 fw-bolder text-gray-800">Daftar Pengunjung</span>
                                    <span class="fs-7 fw-normal text-gray-400 mt-2">
                                        Data-data calon pengunjung yang telah didaftarkan
                                    </span>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-rounded table-striped border gy-7 gs-7" id="kt_datatable">
                                        <thead>
                                            <tr class="fs-5 fw-bolder text-gray-700 border-bottom border-gray-200">
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No Telepon</th>
                                                <th class="w-500px">Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($visitors as $item)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <div
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-3">
                                                                {{ $item->name }}
                                                            </div>
                                                            <div class="text-gray-600 fw-semibold d-block fs-6">
                                                                {{ $item->identity_number }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-gray-600 fw-bold fs-6">
                                                            {{ $item->email }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="fs-5 fw-semibold ls-2">
                                                            {{ $item->phone }}

                                                    </td>
                                                    <td>{{ $item->address }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
            $('.status_bayar').on('change', function() {
                if ($(this).is(':checked')) {
                    $("#btn-generate").addClass("d-block").removeClass("d-none");
                    $("#btn-submit").addClass("d-block").removeClass("d-none");
                } else {
                    $("#btn-generate").addClass("d-none").removeClass("d-block");
                    $("#btn-submit").addClass("d-none").removeClass("d-block");
                    $("#qr-code").addClass("d-none").removeClass("d-block");
                    $("#na").addClass("d-block").removeClass("d-none");
                }
            })

            $('#btn-generate').on('click', function() {
                $("#qr-code").addClass("d-block").removeClass("d-none");
                $("#na").addClass("d-none").removeClass("d-block");
                $("[name=generateQr]").val(true);
            });

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
@endsection
