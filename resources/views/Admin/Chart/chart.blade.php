@extends('template.base')

@section('title', 'Chart User')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 style=" margin-top: 20px; margin-left: 10px;">Chart User</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: 20px;">
                    <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                    <li class="breadcrumb-item active">Chart User</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ENd Header -->

<!-- Chart -->

<section class="content">
    <div class="container">
        <div id="chart" style="margin-right: 15rem;"></div>
    </div>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/10/highcharts.js"></script>
<script type="text/javascript">
    var user = <?php echo json_encode($user) ?>;
    Highcharts.chart('chart', {
        title: {
            text: "Chart Data User"
        },
        xAxis: {
            categories: [ 'Admin', 'Petugas']
        },
        yAxis: {
            title: {
                text: "Jumlah User"
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
        },
        plotOptions: {
            series: {
                allowPointSelect: true,
            }
        },
        series: [{
            name: 'user',
            data:user
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom',
                    }
                },
            }],
        },
    });
</script>
</section>
<!-- End Chart -->
@endsection