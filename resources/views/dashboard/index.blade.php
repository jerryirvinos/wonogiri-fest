@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-5">
            <div class="d-flex justify-content-end">
                <select class="form-select form-select-lg" data-control="select2" id="kt_docs_select2_rich_content"
                    data-placeholder="Silahkan pilih salah satu" name="ticket">
                    <option value="Semua" data-href="{{ URL::to('admin/dashboard?filter=Semua') }}"
                        {{ request()->get('filter') == 'Semua' || !request()->get('filter') ? 'selected' : '' }}>Semua
                    </option>
                    @foreach ($tickets as $ticket)
                        <option value="{{ $ticket->id }}"
                            data-href="{{ URL::to('admin/dashboard?filter=' . $ticket->id) }}"
                            {{ request()->get('filter') == $ticket->id ? 'selected' : '' }}>
                            {{ $ticket->name . ' ' . $ticket->title . ' ' . $ticket->detail }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-5">
            <div class="card card-flush rounded-4 shadow shadow-xs">
                <div class="card-body">
                    <div class="d-flex flex-column flex-wrap">
                        <i class="fa-duotone fa-ticket fs-5x mb-5 text-warning"></i>
                        <div class="fs-5 fs-lg-2x fw-bolder text-gray-800">
                            {{ $ticketSold }}
                        </div>
                        <div class="fs-7 fs-lg-6 fw-normal text-gray-600">
                            Total Ticket Terjual
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-5">
            <div class="card card-flush rounded-4 shadow shadow-xs">
                <div class="card-body">
                    <div class="d-flex flex-column flex-wrap">
                        <i class="fa-duotone fa-people-group fs-5x mb-5 text-warning"></i>
                        <div class="fs-5 fs-lg-2x fw-bolder text-gray-800">
                            {{ $ticketSoldToday }}
                        </div>
                        <div class="fs-7 fs-lg-6 fw-normal text-gray-600">
                            Tiket terjual hari ini
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-5">
            <div class="card card-flush rounded-4 shadow shadow-xs">
                <div class="card-body">
                    <div class="d-flex flex-column flex-wrap">
                        <i class="fa-duotone fa-sack-xmark fs-5x mb-5 text-warning"></i>
                        <div class="fs-5 fs-lg-2x fw-bolder text-gray-800">
                            {{ format_rupiah($income) }}
                        </div>
                        <div class="fs-7 fs-lg-6 fw-normal text-gray-600">
                            Total Income
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row g-5 mb-5 mb-xl-10">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-5">
            <div class="card card-flush rounded-4 shadow shadow-xs">
                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fs-3 fs-lg-2x fw-bolder text-gray-800">Statistik Ticket</span>
                        <span class="fs-7 fs-lg-5 fw-semibold text-gray-400 mt-1 mt-lg-2">
                            Data Statistik Penjualan Ticket
                        </span>
                    </h3>
                </div>
                <div class="card-body">
                    <div id="chart_stats" style="height: 350px;"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row mb-5 mb-xl-10">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-5">
            <div class="card card-flush rounded-4 shadow shadow-xs">
                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fs-3 fs-lg-2x fw-bolder text-gray-800">Penjualan Terkini</span>
                        <span class="fs-7 fs-lg-5 fw-semibold text-gray-400 mt-1 mt-lg-2">
                            Data Penjualan Ticket Terbaru
                        </span>
                    </h3>
                </div>
                <div class="card-body px-0 px-lg-3 px-0 px-lg-3">
                    <div class="table-responsive">
                        <table class="table table-rounded table-striped border gy-7 gs-7" id="kt_datatable">
                            <thead>
                                <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                    <th>No</th>
                                    <th>ID Ticket*hidden</th>
                                    <th>ID Ticket</th>
                                    <th>Nama Pembeli</th>
                                    <th>Tanggal Pembelian</th>
                                    <th class="text-center">Jenis</th>
                                    <th>Jumlah Ticket</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('select[name="ticket"]').on('change', function() {
            var link = $(this).find('option:selected').data('href');
            window.location.href = link;
        });

        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        const weekday = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

        const style = ["warning", "success", "info", "primary"]

        $(function() {
            var table = $('#kt_datatable').DataTable({
                processing: true,
                serverSide: true,
                paging: false,
                order: [1, 'asc'],
                ajax: "{{ route('dashboard.index') }}",
                columns: [{
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        orderable: true,
                        width: '4%',
                        className: 'text-center'
                    },
                    {
                        name: "created_at",
                        data: "created_at",
                        visible: false,
                    },
                    {
                        render: function(data, type, row) {
                            var html = `<div class="fs-3 text-dark fw-bolder text-hover-primary mb-1">
                                        ` + row.ticket_code + `
                                    </div>`;
                            return html
                        },
                        orderable: false,
                        className: 'text-center'
                    },
                    {
                        render: function(data, type, row) {
                            var html = `<div class="d-flex align-items-center">
                                        <div class="d-flex flex-column">
                                            <div class="fs-4 fw-bolder text-gray-800">
                                                ` + row.name + `
                                            </div>
                                            <div class="fs-6 fw-semibold text-gray-500">
                                                ` + row.identity_number + `
                                            </div>
                                        </div>
                                    </div>`;
                            return html
                        },
                        orderable: false,
                    },
                    {
                        render: function(data, type, row) {
                            var d = new Date(row.created_at);

                            var html = `<div class="d-flex flex-column">
                                        <div class="fs-7 fw-semibold text-gray-700">
                                            ` + weekday[d.getDay()] + `
                                        </div>
                                        <div class="fs-5 fw-bold text-gray-800">
                                            ` + d.getDate() + ' ' + monthNames[d.getUTCMonth()] + ' ' + d
                                .getUTCFullYear() + `
                                        </div>
                                    </div>`;
                            return html
                        },
                        orderable: false,
                    },
                    {
                        render: function(data, type, row) {
                            var index;
                            if (row.ticket_type == 1) {
                                index = 0;
                            } else if (row.ticket_type == 2) {
                                index = 1;
                            } else if (row.ticket_type == 3) {
                                index = 2;
                            } else {
                                index = 3;
                            }
                            var color = style[index]
                            var html = `<div class="badge badge-light-` + style[index] + ` rounded-pill px-6 py-3 flex-column">
                                        <div class="fs-6 fw-bolder mb-2">` + row.ticket_name + `</div>
                                        <div class="fs-7 fw-semibold mb-1">` + row.ticket_title + `</div>
                                        <div class="fs-8 fw-normal">` + row.ticket_detail + `</div>
                                    </div>`;
                            return html
                        },
                        orderable: false,
                        className: 'text-center'
                    },
                    {
                        render: function(data, type, row) {
                            var html = `<span class="fs-5 text-gray-900">
                                        ` + row.qty + `
                                    </span>`;
                            return html
                        },
                        orderable: false,
                        className: 'text-center'
                    },
                ]
            });
        });

        var element = document.getElementById('chart_stats');

        var height = parseInt(KTUtil.css(element, 'height'));
        var labelColor = KTUtil.getCssVariableValue('--kt-gray-500');
        var borderColor = KTUtil.getCssVariableValue('--kt-gray-200');
        var baseColor = 'rgba(255,199,0,1)';
        var lightColor = 'rgba(255,199,0,.15)';

        var options = {
            series: [{
                name: 'Ticket Terjual',
                data: [30, 40, 40, 90]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {

            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'solid',
                opacity: 1
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 3,
                colors: [baseColor]
            },
            xaxis: {
                categories: ['November', 'Desember', 'Januari', 'Februari'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                },
                crosshairs: {
                    position: 'front',
                    stroke: {
                        color: baseColor,
                        width: 1,
                        dashArray: 3
                    }
                },
                tooltip: {
                    enabled: true,
                    formatter: undefined,
                    offsetY: 0,
                    style: {
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function(val) {
                        return '$' + val + ' ticket'
                    }
                }
            },
            colors: [lightColor],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            markers: {
                strokeColor: baseColor,
                strokeWidth: 3
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();
    </script>
@endsection
