@section('title')
    Suervei
@endsection

@section('css')
{{-- Fonts --}}
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">

<style type="text/css">
    .container-fluid {
        background-color: rgb(255, 204, 204) !important;
        font-family: 'Old Standard TT', serif;
    }

    .icon {
        font-size: 50px;
    }

    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }

</style>
@endsection

@extends('layouts.layout')

@section('content')
<div class="container-fluid">
    <div class="d-md-flex flex-md-equal w-100">
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <img src="{{ asset('resources/assets/img/statue.png') }}" width="80%" />
            </div>
        </div>
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <p class="lead">Rifziy, Meicoo, Dd, Smurf, Mgdgsd | 04216056</p>
                <p>Ini hanyalah sebuah tugas Praktikum Desain dan Pemograman Web, akan tetapi ini tetap merupakan proses awal dari inspirasi saya. Apabila anda ingin mengetahui inspirasi saya lebih lanjut untuk kedepannya, Please make sure you have my contact.</p>
                <br/>
                <p>"Age Doesn't Matter"</p>
                <p>Maturity is something that develops after experiences we face in life; you don't just magically become mature on your 25th birthday. You can mature at a very young age, or maybe, you never truly mature. But, society makes us feel that if we haven't figured out ourselves by our mid-20s, we have lived and are continuing to live incorrectly. The majority of us have future plans and hope to be at a certain point by a certain age, but that isn't always the reality of the situation.</p>
                <br/>
                <p>Supported By</p>
                    <img src="{{ asset('resources/assets/img/kkk-rebranding.jpg') }}" width="20%"/>
                </div>
            </div>
        </div><br/>
        <div class="offset-md-2 text-center">
            <div style="width: 75%">
                <canvas id="canvas"></canvas>
            </div>
        </div><br/><br/>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="http://www.chartjs.org/dist/2.7.2/Chart.bundle.js"></script>
<script type="text/javascript" src="http://www.chartjs.org/samples/latest/utils.js"></script>
<script>
var barChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'BTS',
        backgroundColor: window.chartColors.red,
        data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
        ]
    }, {
        label: 'EXO',
        backgroundColor: window.chartColors.blue,
        data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
        ]
    }, {
        label: 'BIGBANG',
        backgroundColor: window.chartColors.green,
        data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
        ]
    }]

};
window.onload = function() {
    var ctx = document.getElementById('canvas').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            title: {
                display: true,
                text: 'Toxic Agama kpop'
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
};
</script>
@endsection