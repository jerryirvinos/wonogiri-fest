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
                <a href="{{ route('ticket.index') }}" class="btn btn-active-light-danger">
                    <span class="text-danger fw-bolder">Batal</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                <form class="w-100" method="post" action="{{ route('ticket.store') }}" novalidate="novalidate"
                    id="kt_create_account_form">
                    @csrf
                    <input type="hidden" name="qty" value="1">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-10 mb-lg-2">
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Ticket Box</label>
                                <select name="ticket_box" data-control="select2" data-placeholder="Pilih Ticket Box"
                                    data-dropdown-parent="#kt_create_account_form" class="form-select fw-bolder">
                                    <option value=""></option>
                                    @foreach ($ticketBoxs as $ticketBox)
                                        <option value="{{ $ticketBox->name }}" {{ old('ticket_box') ? 'selected' : '' }}>
                                            {{ $ticketBox->name }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger">
                                    @error('ticket_box')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">ID Identitas</label>
                                <input type="number"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    min="0" maxlength="16" class="form-control form-control-lg"
                                    name="identity_number" placeholder="masukkan identitas"
                                    value="{{ old('identity_number') }}">
                                <small class="text-danger">
                                    @error('identity_number')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Nama Pembeli</label>
                                <input type="text" class="form-control form-control-lg" name="name"
                                    placeholder="masukkan nama pembeli" value="{{ old('name') }}">
                                <small class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">No Handphone</label>
                                <input type="text" class="form-control form-control-lg"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    min="0" maxlength="13" placeholder="masukkan nohp" name="phone"
                                    value="{{ old('phone') }}">
                                <small class="text-danger">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Email</label>
                                <input type="email" class="form-control form-control-lg" placeholder="masukkan email"
                                    name="email" value="{{ old('email') }}">
                                <small class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Jenis</label>
                                <input type="hidden" name="code_ticket" value="{{ old('qty') }}">
                                <select name="ticket_type" data-control="select2" data-placeholder="Pilih Salah Satu"
                                    data-dropdown-parent="#kt_create_account_form" class="form-select fw-bolder">
                                    <option value=""></option>
                                    @foreach ($ticketTypes as $ticketType)
                                        <option value="{{ $ticketType->id }}" data-price="{{ $ticketType->price }}"
                                            data-code="{{ $ticketType->code }}"
                                            {{ old('ticket_type') ? 'selected' : '' }}>
                                            {{ $ticketType->name }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger">
                                    @error('ticket_type')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-7 text-gray-700">Total Harga</label>
                                <input type="text" name="total_price"
                                    class="form-control form-control-lg form-control-solid" readonly
                                    value="{{ old('total_price') }}">
                            </div>
                            <div class="mb-10">
                                <label for="" class="form-label">Alamat</label>
                                <textarea class="form-control form-control-lg" data-kt-autosize="true" placeholder="masukkan alamat" name="address">{{ old('address') }}</textarea>
                                <small class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg rounded-3 w-100 py-5 my-5"
                                id="btn-submit">
                                <span class="fs-4 fw-bolder">Simpan</span>
                            </button>
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

            $('select[name="ticket_type"]').on('change', function() {
                var name = $(this).find('option:selected').data();
                $('input[name=code_ticket]').val(name.code);
                $('input[name=total_price]').val(name.price);
            });
        });
    </script>

    <script></script>
@endsection
