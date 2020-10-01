@extends('layouts.app')

@section('title', 'Today Statistics')
@section('content')

    <style>
        #myChart {
            width: 100%;
            height: auto;
        }
    </style>
    <script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Dashborad</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin-home">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Daily Statistics</a></li>
            </ol>

        </div>
    </div>

    {{--

        <div class="row">
            <div class="col-lg-12 col-xl-8">
                <div class="card-box">
                    <h4 class="text-dark header-title m-t-0">Visitor Analytics</h4>

                    --}}{{-- <div id="morris-bar-stacked" style="height: 310px;"></div>--}}{{--
                    <canvas id="pie-chart"></canvas>
                </div>
            </div>
        </div>--}}

    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="card-box">
                <h4 class="text-dark header-title m-t-0">Visitor Analytics ({{date('d M, Y')}})</h4>

                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>




    <script>

        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: ["L(10)", "B(15)", "S(5)"],
                datasets: [{
                    label: "Population (millions)",

                    backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f",],
                    data: [5, 1, 15]

                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Statistics'
                }
            }
        });
    </script>

    @if(!is_null($visitor))
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["00 H","01 H", "02 H", "03 H", "04 H", "05 H", "06 H", "07 H", "08 H", "09 H", "10 H", "11 H", "12 H", "13 H", "14 H", "15 H", "16 H", "17 H", "18 H", "19 H", "20 H", "21 H", "22 H", "23 H"],
                    datasets: [{
                        label: '# of Daily Report',
                        data: [  {{$visitor->hour_00}},{{$visitor->hour_01}}, {{$visitor->hour_02}}, {{$visitor->hour_03}}, {{$visitor->hour_014}}, {{$visitor->hour_05}}, {{$visitor->hour_06}}, {{$visitor->hour_07}}, {{$visitor->hour_08}}, {{$visitor->hour_09}}, {{$visitor->hour_10}},
                            {{$visitor->hour_11}}, {{$visitor->hour_12}}, {{$visitor->hour_13}}, {{$visitor->hour_14}}, {{$visitor->hour_15}}, {{$visitor->hour_16}}, {{$visitor->hour_17}}, {{$visitor->hour_18}}, {{$visitor->hour_19}}, {{$visitor->hour_20}},
                            {{$visitor->hour_21}},
                            {{$visitor->hour_22}},
                            {{$visitor->hour_23}},

                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    scales: {
                        xAxes: [{
                            ticks: {
                                maxRotation: 90,
                                minRotation: 80
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    @else
        <p>Nothing found</p>

    @endif

@endsection