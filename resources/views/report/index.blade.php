@extends('layouts.app')
@section('title')
    Students Report
@endsection


@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">Reports</h3>
        </div>
        <div class="section-body">
            <div class = "row">
                    <div class="col-md-4">
                        <a href="{{ route('residents.report') }}" style = "text-decoration: none;">
                            <div class="card text-center" id = "border-blue">
                                <div class="card-body  d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Resident Reports</h5>
                                    <img src="{{ '../img/Site Stats-amico.png' }}" alt="" style="width: 24em; margin-left: 30px;">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('blotters.report') }}"  style = "text-decoration: none;">
                            <div class="card text-center" id = "border-blue">
                                <div class="card-body d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Blotter Reports</h5>
                                    <img src="{{ '../img/Secure Login-rafiki.png' }}" alt="" style="width: 24em; margin-left: 15px;">
                                </div>
                            </div>
                        </a>
                    </div>   
                    <div class="col-md-4">
                        <a href="{{ route('senior-citizen.report') }}"  style = "text-decoration: none;">
                            <div class="card text-center" id = "border-blue">
                                <div class="card-body d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Senior Citizen Reports</h5>
                                    <img src="{{ '../img/Nursing home-rafiki.png' }}" alt="" style="width: 24em; margin-left: 15px;">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('PWD.report') }}"  style = "text-decoration: none;">
                            <div class="card text-center" id = "border-blue">
                                <div class="card-body d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">PWD Reports</h5>
                                    <img src="{{ '../img/Load more-pana.png' }}" alt="" style="width: 24em; margin-left: 15px;">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('student.report') }}"  style = "text-decoration: none;">
                            <div class="card text-center" id = "border-blue">
                                <div class="card-body d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Student Report</h5>
                                    <img src="{{ '../img/At the office-amico.png' }}" alt="" style="width: 24em; margin-left: 15px;">
                                </div>
                            </div>
                        </a>
                    </div>   

                    <div class="col-md-4">
                        <a href="{{ route('membership-program.report') }}"  style = "text-decoration: none;">
                            <div class="card text-center" id = "border-blue">
                                <div class="card-body d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Subsidy Program Report</h5>
                                    <img src="{{ '../img/Analyze-rafiki.png' }}" alt="" style="width: 24em; margin-left: 15px;">
                                </div>
                            </div>
                        </a>
                    </div> 

                    <div class="col-md-4">
                        <a href="{{ route('residents-occupation.report') }}"  style = "text-decoration: none;">
                            <div class="card text-center" id = "border-blue">
                                <div class="card-body d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Occupation Report</h5>
                                    <img src="{{ '../img/audit-pana.png' }}" alt="" style="width: 24em; margin-left: 15px;">
                                </div>
                            </div>
                        </a>
                    </div> 
            </div>
        </div>
    </section>



@endsection
