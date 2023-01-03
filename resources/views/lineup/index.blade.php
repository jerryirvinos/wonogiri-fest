@extends('templates.master')

@section('styles')
    <link href="{{ asset('js/custom/nestable/jquery.nestable.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="card card-flush">
        <div class="card-header pt-lg-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fs-2 fw-bolder text-gray-800">Line UP</span>
                <span class="fs-6 fw-normal text-gray-400 mt-1">Modul untuk manajemen Line Up</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('lineup.create') }}" class="btn btn-lg btn-warning">
                    <span class="fs-5 fw-bolder">Tambah</span>
                </a>
            </div>
        </div>
        <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
            <div class="card-body">
                {{-- <div class="table-responsive">
                    <table class="table table-rounded table-striped border gy-7 gs-7" id="kt_datatable">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>NO</th>
                                <th>TITLE</th>
                                <th>THUMBNAIL</th>
                                <th>STATUS</th>
                                <th>IS RELEASE</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div> --}}
                <div class="card-title pr-4">
                    <button class="btn btn-warning btn-sm float-left exp mx-1" data-action="collapse-all">
                        Collapse Menu <i class="fa fa-chevron-up"></i>
                    </button>
                    <a class="btn btn-info btn-sm btn-shadow save">
                        <i class="fa fa-check"></i> Simpan Urutan
                        <form method="post" class="d-flex pull-right" action="{{ route('lineup.save_order') }}">
                            @csrf
                            <textarea class="form-control nestable-output" name="menu" hidden></textarea>
                        </form>
                    </a>
                </div>

                <div class="dd nestable mt-8">
                    <ol class="dd-list">
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/custom/nestable/jquery.nestable.js') }}"></script>
    @include('lineup.index_foot')
@endsection
