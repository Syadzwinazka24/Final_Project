@extends('template.base')
@section('content')
<!-- Content Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <h3 class="mb-4">Dashboard</h3>

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: -55px;">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Header -->

    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-solid fa-users fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Data Pasien</p>
                    <h6>Total {{ $dataPasien }} pasien</h6>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-solid fa-hospital fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Pasien Dirawat</p>
                    <h6>Total {{ $inap }} pasien</h6>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-solid fa-bed fa-3x text-primary"></i>

                <div class="ms-3">
                    <p class="mb-2">Rawat Jalan</p>
                    <h6>Total {{ $jalan }} pasien</h6>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-tablets fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Data Obat</p>
                    <h6>Total {{ $obat }} obat</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-1">
        <div id="chartRekap"></div>
    </div>
</div>
@stop

@section('footer')
<!-- Content Sale & Revenue End -->

<!-- chart -->
<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartRekap', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Rekap Bulanan Data Pasien'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
            ],
            accessibility: {
                description: 'Months of the year'
            }
        },
        yAxis: {
            title: {
                text: 'Pasien'
            },
            labels: {
                format: '{value}'
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'Jumlah Pasien',
            data: [5.2, 5.7, 8.7, 13.9, 18.2, 21.4, 25.0, {
                y: 26.4,
            }, 22.8, 17.5, 12.1, 7.6]

        }]
    });
</script> -->
@endsection