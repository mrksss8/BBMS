@extends('layouts.app')
@section('title')
    Dashboard
@endsection

@section('content')
    <style>

        .card-body {
            background-color: #071bb4
        }
        /* officials */
        .officials {
            background-color: whitesmoke;
            border: 1px solid #017cfd;
            border-radius: 3px;
        }

        .official-wrapper {
            padding: 5px;
            text-align: center;
        }

        .officials p {
            line-height: 20px;
            font-size: 15px;
        }

        #councelor-label {
            margin-bottom: 0;
            padding-bottom: 0;
            margin-bottom: 10px;
            margin-top: 30px;
        }

        #logo-img {
            width: 80px;
            height: auto;
            margin-bottom: 30px;
        }

        #brgy {
            text-align: center;
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }

    </style>
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">

                        <div class="card-body rounded" id="border-blue">
                            <div class="row">
                                
                               

                                <div class="col-lg-4">
                                    <div class="card card-primary" id="border-blue" >

                                        <div class="pt-2">
                                            <h5 class="text-center">Total Population</h5>
                                        </div>
                                        <div class="card-body py-2 px-2">
                                            <h1 class="text-center text-primary">{{ $total_res }}</h1>
                                                <canvas id="genderChart"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card card-primary" id="border-blue" >
                                        <div class="pt-2">
                                            <h5 class="text-center">Total Senior and PWD</h5>
                                        </div>
                                        <div class="card-body py-2 px-2">
                                            <h1 class="text-center text-primary">{{$senior_and_pwd_total_cnt }}</h1>
                                            <canvas id="seniorChart"></canvas>
                                        </div>
                                    </div>
                                </div>      
                                
                                <div class="col-lg-4"> 
                                    <div class="card card-primary" id="border-blue" >
                                        <div class="pt-2">
                                            <h5 class="text-center">No. of Blotters</h5>
                                        </div>
                                        <div class="card-body py-2 px-2">
                                            <h1 class="text-center text-primary">{{ $total_blotters }}</h1>
                                            <canvas id="blotterChart"></canvas>
                                        </div>     
                                    </div>
                                </div>
                                
                                <div class="col-lg-4" >
                                    <div class="card card-primary " id="border-blue" >
                                            <div class="card-body py-0">
                                                <img src="{{ '../img/Projections-bro.png' }}" alt="" style = "width: 200px;" class = "p-2">
                                            </div>
                                            <div class="pt-2">
                                                <h5 class="text-center">No. of Business</h5>
                                            </div>
                                            
                                     
                                        <div class="card-body py-2 ">
                                            <h1 class="text-center text-primary">{{ $total_business }}</h1>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="card card-primary" id="border-blue" >
                                        <div class="card-body py-0">
                                            <img src="{{ '../img/pwd-bro.png' }}" alt="" style = "width: 200px;">
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="text-center">No. of PWD</h5>
                                        </div>
                                        <div class="card-body py-2 ">
                                            <h1 class="text-center text-primary">{{ $senior_Cnt }}</h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card card-primary" id="border-blue" >
                                        <div class="card-body py-0">
                                            <img src="{{ '../img/Plain credit card-pana.png' }}" alt="" style = "width: 200px;">
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="text-center">No. of 4P's Beficiaries</h5>
                                        </div>
                                        <div class="card-body py-2 ">
                                            <h1 class="text-center text-primary">{{ $total_business }}</h1>
                                        </div>
                                    </div>
                                </div>
                                   

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="card ">
                        

                            <div class="officials">
                                <p id="brgy">Barangay Bayog <br> Officials
                                <p>
                                <div class="official-wrapper">
                                    <img id="logo-img" src="{{ asset('../img/brgy-bayog-logo.png') }}"
                                        alt="brgy-bayog-logo">

                                    @foreach ($b_officials as $b_official)    
                                                
                                       @if ($b_official->brgy_official_position == 'Barangay Chairman')
                                            <p>
                                                <strong>Hon. {{ $b_official->brgy_official_name }}</strong><br>
                                                {{ $b_official->brgy_official_position }}
                                            </p>

                                            <p id="councelor-label">
                                                <strong>COUNCILORS</strong><br>
                                            </p>

                                        
                                        @elseif($b_official->brgy_official_position == 'Barangay Secretary')
                                        <p>
                                            <strong>{{ $b_official->brgy_official_name }}</strong><br>
                                            {{ $b_official->brgy_official_role }}
                                        </p>

                                        @elseif($b_official->brgy_official_position == 'Barangay Treasurer')
                                        <p>
                                            <strong>{{ $b_official->brgy_official_name }}</strong><br>
                                            {{ $b_official->brgy_official_role }}
                                        </p>

                                        @elseif($b_official->brgy_official_position == 'Barangay Clerk')
                                        <p>
                                            <strong>{{ $b_official->brgy_official_name }}</strong><br>
                                            {{ $b_official->brgy_official_role }}
                                        </p>

                                        @else
                                            <p>
                                                <strong>Hon. {{ $b_official->brgy_official_name }}</strong><br>
                                                {{ $b_official->brgy_official_role }}
                                            </p>
                                            
                                        @endif
                                                         
                                    
                                    @endforeach

                                    {{-- <p>
                                        <strong>{{ $b_cap->brgy_official_name }}</strong><br>
                                        {{ $b_cap->brgy_official_position }}
                                    </p>

                                    </p>
                                    <p id="councelor-label">
                                        <strong>COUNCILORS</strong><br>
                                    </p>
                                    <p>
                                        <strong>{{ $b_councelor1->brgy_official_name }}</strong><br>
                                                {{ $b_councelor1->brgy_official_role }}
                                    </p>

                                    </p>
                                    <p>
                                        <strong>{{ $b_councelor2->brgy_official_name }}</strong><br>
                                        {{ $b_councelor2->brgy_official_role }}
                                    </p>

                                    <p>
                                        <strong>{{ $b_councelor3->brgy_official_name }}</strong><br>
                                        {{ $b_councelor3->brgy_official_role }}
                                    </p>

                                    <p>
                                        <strong>{{ $b_councelor4->brgy_official_name }}</strong><br>
                                        {{ $b_councelor4->brgy_official_role }}
                                    </p>

                                    <p>
                                        <strong>{{ $b_councelor5->brgy_official_name }}</strong><br>
                                        {{ $b_councelor5->brgy_official_role }}
                                    </p>

                                    <p>
                                        <strong>{{ $b_councelor6->brgy_official_name }}</strong><br>
                                        {{ $b_councelor6->brgy_official_role }}
                                    </p>

                                    <p>
                                        <strong>{{ $b_councelor7->brgy_official_name }}</strong><br>
                                        {{ $b_councelor7->brgy_official_role }}
                                    </p>

                                    <p>
                                        <strong>{{ $b_sk->brgy_official_name }}</strong><br>
                                        {{ $b_sk->brgy_official_position }} – {{ $b_sk->brgy_official_role }}
                                    </p>

                                    <p>
                                        <strong>{{ $b_sec->brgy_official_name }}</strong><br>
                                        {{ $b_sec->brgy_official_position }}
                                    </p>

                                    <p>
                                        <strong>{{ $b_tres->brgy_official_name }}</strong><br>
                                        {{ $b_tres->brgy_official_position }}
                                    </p>

                                    <p>
                                        <strong>{{ $b_clerk->brgy_official_name }}</strong><br>
                                        {{ $b_clerk->brgy_official_position }}
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            var ctx = document.getElementById('blotterChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{$unsettled_blotters}},
                            {{$settled_blotters}}
                            // 40,
                            // 30,
                            // 20,
                        ],
                        backgroundColor: [
                            '#191d21',
                            '#017cfd'
                            // '#ffa426',
                            // '#fc544b',
                            // '#6777ef',
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        'Unsettle',
                        'Settled'
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

        <script>
            var ctx = document.getElementById('genderChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{ $female_Cnt }},
                            {{ $male_Cnt }}
                            // 40,
                            // 30,
                            // 20,
                        ],
                        backgroundColor: [
                            '#191d21',
                            '#017cfd'
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

        <script>
            var ctx = document.getElementById('seniorChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{$senior_notpwd_Cnt}},
                            {{$senior_pwd_Cnt}},
                            {{$PWD_Cnt_two}},
                            // 40,
                            // 30,
                            // 20,
                        ],
                        backgroundColor: [
                            '#191d21',
                            '#017cfd',
                            '#455a64',
                            // '#ffa426',
                            // '#fc544b',
                            // '#6777ef',
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        'Senior',
                        'Senior/PWD',
                        'PWD',
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
