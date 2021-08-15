@extends('layouts.app')
@section('title')
Dashboard
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Gender Chart</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-size-monitor"
                                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                <div class="chartjs-size-monitor-expand"
                                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                    <div
                                                        style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                    </div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink"
                                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                    </div>
                                                </div>
                                            </div>
                                            <canvas id="myChart"></canvas>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{$female_Cnt }},
                            {{$male_Cnt }}
                            // 40,
                            // 30,
                            // 20,
                        ],
                        backgroundColor: [
                            '#191d21',
                            '#63ed7a'
                            // '#ffa426',
                            // '#fc544b',
                            // '#6777ef',
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        'Female',
                        'Male'
                    //     'Yellow',
                    //     'Red',
                    //     'Blue'
                     ],
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'bottom',
                    },
                }
            });
        </script>

    </section>

@endsection
