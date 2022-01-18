@extends('layouts.app')
@section('title')
    Barangay Analytics
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Barangay Analytics</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>Residents General Analytics</h4>
                            </div>
                        </div>

                        <div class="card-body p-3">
                            <canvas id="generalAnalytics"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>


        <div class="row">
                <div class="col-lg-4">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>Residents By Age
                                </h4>
                            </div>
                        </div>

                        <div class="card-body p-1">
                            <canvas id="Age"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>Residents with Membership Program
                                </h4>
                            </div>
                        </div>

                        <div class="card-body p-1">
                            <canvas id="residenceMembership"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>Residents By Purok
                                </h4>
                            </div>
                        </div>

                        <div class="card-body p-1">
                            <canvas id="residencePerPurok"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>Students By Purok
                                </h4>
                            </div>
                        </div>

                        <div class="card-body p-1">
                            <canvas id="studentPerPurok"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>Senior By Purok
                                </h4>
                            </div>
                        </div>

                        <div class="card-body p-1">
                            <canvas id="seniorPerPurok"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>PWD by Purok
                                </h4>
                            </div>
                        </div>

                        <div class="card-body p-1">
                            <canvas id="pwdPerPurok"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>                
                <div class="col-lg-6">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>4ps Member By Purok
                                </h4>
                            </div>
                        </div>

                        <div class="card-body p-1">
                            <canvas id="4psPerPurok"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>Tupad Member By Purok
                                </h4>
                            </div>
                        </div>

                        <div class="card-body p-1" >
                            <canvas id="TUPADPerPurok"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            var ctx = document.getElementById('residenceMembership').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{$fourPs_Cnt}},
                            {{$tupad_Cnt}},
                            {{$MembershipProgram_None_Cnt}},
                        ],
                        backgroundColor: [
                            '#017cfd',
                            '#191d21',
                            '#63ed7a',
                        ],
                    }],
                    labels: [
                        '4ps',
                        'TUPAD',
                        'NONE',
                    ],

                },
                options: {
                    legend: {
                        position: 'top',
                        align: 'start',
                    },
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('generalAnalytics').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    datasets: [{
                        data: [
                            {{ $std_Cnt}},
                            {{ $senior_Cnt }},
                            {{ $pwd_Cnt }},
                            {{ $fourPs_Cnt }},
                            {{ $tupad_Cnt }},
                        ],
                        backgroundColor: [
                            '#017cfd',
                            '#191d21',
                            '#63ed7a',
                            '#ffa426',
                            '#fc544b',
                            '#017cfd',
                        ],
                        label: 'Residents General Analytics'
                    }],
                    labels: [
                        'Student',
                        'Senior',
                        'PWD',
                        '4ps Member',
                        'TUPAD Member',

                        //     'Yellow',
                        //     'Red',
                        //     'Blue'
                    ],


                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('residencePerPurok').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{ $purok_1_Cnt }},
                            {{ $purok_2_Cnt }},
                            {{ $purok_3_Cnt }},
                            {{ $purok_4_Cnt }},
                            {{ $purok_5_Cnt }},
                        ],
                        backgroundColor: [
                            '#017cfd',
                            '#191d21',
                            '#63ed7a',
                            '#ffa426',
                            '#fc544b',
                        ],
                    }],
                    labels: [
                        'Purok 1',
                        'Purok 2',
                        'Purok 3',
                        'Purok 4',
                        'Purok 5',




                        //     'Yellow',
                        //     'Red',
                        //     'Blue'
                    ],

                },
                options: {
                    legend: {
                        position: 'top',
                        align: 'start',
                    },
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('Age').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [

                            {{ $children_Cnt }},
                            {{ $teenage_Cnt }},
                            {{ $adult_Cnt }},
                            {{ $senior_Cnt }},
                        ],
                        backgroundColor: [
                            '#017cfd',
                            '#191d21',
                            '#63ed7a',
                            '#ffa426',
                            '#fc544b',
                        ],

                    }],
                    labels: [
                        'Children 0-12',
                        'Teen Age 13-19',
                        'Adult 20-59',
                        'Senior 60+',




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
            var ctx = document.getElementById('studentPerPurok').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{$purok1_student_Cnt}},
                            {{$purok2_student_Cnt}},
                            {{$purok3_student_Cnt}},
                            {{$purok4_student_Cnt}},
                            {{$purok5_student_Cnt}},
                        ],
                        backgroundColor: [
                            '#017cfd',
                            '#191d21',
                            '#63ed7a',
                            '#ffa426',
                            '#fc544b',
                        ],
                    }],
                    labels: [
                        'Purok 1',
                        'Purok 2',
                        'Purok 3',
                        'Purok 4',
                        'Purok 5',




                        //     'Yellow',
                        //     'Red',
                        //     'Blue'
                    ],

                },
                options: {
                    legend: {
                        position: 'top',
                        align: 'start',
                    },
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('seniorPerPurok').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{$purok1_senior_Cnt}},
                            {{$purok2_senior_Cnt}},
                            {{$purok3_senior_Cnt}},
                            {{$purok4_senior_Cnt}},
                            {{$purok5_senior_Cnt}},
                        ],
                        backgroundColor: [
                            '#017cfd',
                            '#191d21',
                            '#63ed7a',
                            '#ffa426',
                            '#fc544b',
                        ],
                    }],
                    labels: [
                        'Purok 1',
                        'Purok 2',
                        'Purok 3',
                        'Purok 4',
                        'Purok 5',




                        //     'Yellow',
                        //     'Red',
                        //     'Blue'
                    ],

                },
                options: {
                    legend: {
                        position: 'top',
                        align: 'start',
                    },
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('pwdPerPurok').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{$purok1_pwd_Cnt}},
                            {{$purok2_pwd_Cnt}},
                            {{$purok3_pwd_Cnt}},
                            {{$purok4_pwd_Cnt}},
                            {{$purok5_pwd_Cnt}},
                            
                        ],
                        backgroundColor: [
                            '#017cfd',
                            '#191d21',
                            '#63ed7a',
                            '#ffa426',
                            '#fc544b',
                        ],
                    }],
                    labels: [
                        'Purok 1',
                        'Purok 2',
                        'Purok 3',
                        'Purok 4',
                        'Purok 5',




                        //     'Yellow',
                        //     'Red',
                        //     'Blue'
                    ],

                },
                options: {
                    legend: {
                        position: 'top',
                        align: 'start',
                    },
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('4psPerPurok').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                           {{$purok1_4ps_Cnt}},
                           {{$purok2_4ps_Cnt}},
                           {{$purok3_4ps_Cnt}},
                           {{$purok4_4ps_Cnt}},
                           {{$purok5_4ps_Cnt}},
                           
                        ],
                        backgroundColor: [
                            '#017cfd',
                            '#191d21',
                            '#63ed7a',
                            '#ffa426',
                            '#fc544b',
                            '#017cfd',
                        ],
                    }],
                    labels: [
                        'Purok 1',
                        'Purok 2',
                        'Purok 3',
                        'Purok 4',
                        'Purok 5',




                        //     'Yellow',
                        //     'Red',
                        //     'Blue'
                    ],

                },
                options: {
                    legend: {
                        position: 'top',
                        align: 'start',
                    },
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('TUPADPerPurok').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            {{$purok1_TUPAD_Cnt}},
                            {{$purok2_TUPAD_Cnt}},
                            {{$purok3_TUPAD_Cnt}},
                            {{$purok4_TUPAD_Cnt}},
                            {{$purok5_TUPAD_Cnt}},
                        ],
                        backgroundColor: [
                            '#017cfd',
                            '#191d21',
                            '#63ed7a',
                            '#ffa426',
                            '#fc544b',
                            '#017cfd',
                        ],
                    }],
                    labels: [
                        'Purok 1',
                        'Purok 2',
                        'Purok 3',
                        'Purok 4',
                        'Purok 5',




                        //     'Yellow',
                        //     'Red',
                        //     'Blue'
                    ],

                },
                options: {
                    legend: {
                        position: 'top',
                        align: 'start',
                    },
                }
            });
        </script>








    </section>
@endsection
