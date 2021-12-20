@extends('layouts.app')
@section('title')
    Reports
@endsection


@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Reports</h3>
        </div>
        <div class="section-body">
            <div class = "row" style="display:flex; justify-content: space-evenly;">

                    <div class="">
                        <a href="{{ route('residents.report') }}" target="_blank">
                            <div class="card text-center"
                                style="width: 18rem; border: 5px solid rgba(103,119,239,255); border-radius: 25px;">
                                <div class="card-body  d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Resident Reports</h5>
                                    <img src="{{ '../img/report.png' }}" alt="" style="width: 10em; margin-left: 30px;">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('blotters.report') }}">
                            <div class="card text-center"
                                style="width: 18rem; border: 5px solid rgba(103,119,239,255); border-radius: 25px;">
                                <div class="card-body d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Blotter Reports</h5>
                                    <img src="{{ '../img/case-study.png' }}" alt="" style="width: 10em; margin-left: 15px;">
                                </div>
                            </div>
                        </a>
                    </div>
                    
            </div>
        </div>
    </section>

@endsection
