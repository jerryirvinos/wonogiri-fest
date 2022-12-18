@extends('templates.master')

@section('styles')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-5">
            <div class="card card-flush rounded-4 shadow shadow-xs">
                <div class="card-body">
                    <div class="d-flex flex-column flex-wrap">
                        <i class="fa-duotone fa-money-check-dollar-pen fs-5x mb-5 text-warning"></i>
                        <div class="fs-5 fs-lg-2x fw-bolder text-gray-800">
                            666
                        </div>
                        <div class="fs-7 fs-lg-6 fw-normal text-gray-600">
                            Total Pendaftar
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-5">
            <div class="card card-flush rounded-4 shadow shadow-xs">
                <div class="card-body">
                    <div class="d-flex flex-column flex-wrap">
                        <i class="fa-duotone fa-ticket fs-5x mb-5 text-warning"></i>
                        <div class="fs-5 fs-lg-2x fw-bolder text-gray-800">
                            666
                        </div>
                        <div class="fs-7 fs-lg-6 fw-normal text-gray-600">
                            Total Ticket Terjual
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-5">
            <div class="card card-flush rounded-4 shadow shadow-xs">
                <div class="card-body">
                    <div class="d-flex flex-column flex-wrap">
                        <i class="fa-duotone fa-people-group fs-5x mb-5 text-warning"></i>
                        <div class="fs-5 fs-lg-2x fw-bolder text-gray-800">
                            666
                        </div>
                        <div class="fs-7 fs-lg-6 fw-normal text-gray-600">
                            Total Penonton
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-5">
            <div class="card card-flush rounded-4 shadow shadow-xs">
                <div class="card-body">
                    <div class="d-flex flex-column flex-wrap">
                        <i class="fa-duotone fa-sack-xmark fs-5x mb-5 text-warning"></i>
                        <div class="fs-5 fs-lg-2x fw-bolder text-gray-800">
                            666
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
                <div class="card-body">
                    <table class="table table-rounded table-striped border gy-7 gs-7" id="kt_datatable">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>No</th>
                                <th>ID Ticket</th>
                                <th>Nama Pembeli</th>
                                <th>Tanggal Pembelian</th>
                                <th class="text-center">Jenis</th>
                                <th>Jumlah Ticket</th>
                                <th class="text-center"><i class="fa-light fa-grip-dots-vertical"></i></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
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
