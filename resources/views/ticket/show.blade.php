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
            <div class="card-body">
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
                                <select class="form-select form-select-lg form-select-solid" data-control="select2"
                                    id="kt_docs_select2_rich_content" data-placeholder="Silahkan pilih salah satu"
                                    name="bank" disabled>
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
                                <input type="text" class="form-control form-control-lg form-control-solid"
                                    placeholder="Masukan Nama Rekening Pembeli" value="{{ $order->account_name }}"
                                    name="account_name" readonly>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Nomor Rekening</label>
                                <input type="number" class="form-control form-control-lg form-control-solid" min="0"
                                    placeholder="Masukan Nomor Rekening Pembeli" value="{{ $order->account_number }}"
                                    name="account_number" readonly>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Total Transfer</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ format_rupiah($order->total_pay) }}">
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Status Pembayaran</label>
                                <div class="d-flex flex-wrap rounded-2 p-3">
                                    @if ($order->payment_status)
                                        <span
                                            class="badge badge-light-success border border-2 border-success rounded-3 px-6 py-3 w-50 mx-auto">
                                            <i class="fa-duotone fa-shield-check text-success fs-2x me-4"></i>
                                            <span class="fs-3 fw-bold">Terbayar</span>
                                        </span>
                                    @else
                                        <span
                                            class="badge badge-light-danger border border-2 border-danger rounded-3 px-6 py-3 w-50 mx-auto">
                                            <i class="fa-duotone fa-shield-xmark text-danger fs-2x me-4"></i>
                                            <span class="fs-3 fw-bold">Belum Terbayar</span>
                                        </span>
                                    @endif

                                </div>
                            </div>
                            {{-- <a href="#" class="btn btn-warning btn-lg hover-scale rounded-3 w-100 py-5 my-5 d-block"
                                id="btn-generate">Cetak</a> --}}
                            <a href="{{ route('ticket.cetak', ['id' => Crypt::encryptString($order->id)]) }}"
                                class="btn btn-warning btn-lg hover-scale rounded-3 w-100 py-5 my-5 fs-3  fw-bolder d-block"
                                id="btn-generate">Cetak</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-10 mb-lg-2">
                        <div class="w-100 h-auto rounded-4 px-5 px-lg-15">
                            <div
                                class="d-flex justify-content-center align-content-center flex-wrap h-100 bg-white border border-white border-4 shadow py-3 rounded-4">
                                <div class="d-block" id="qr-code">{!! QrCode::size(250)->generate(
                                    json_encode(['ticketCode' => $order->ticket_code, 'id' => $order->uuid, 'jns' => true]),
                                ) !!}</div>
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
                                                    <td>
                                                        {{ $item->address }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
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
