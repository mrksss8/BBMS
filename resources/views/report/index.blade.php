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
                        <a href="{{ route('residents.report') }}" style = "text-decoration: none;">
                            <div class="card text-center" style=" border: 1px solid #017cfd;">
                                <div class="card-body  d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Resident Reports</h5>
                                    <img src="{{ '../img/Site Stats-amico.png' }}" alt="" style="width: 30em; margin-left: 30px;">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('blotters.report') }}"  style = "text-decoration: none;">
                            <div class="card text-center"
                                style=" border: 1px solid #017cfd;">
                                <div class="card-body d-flex justify-content-center flex-column align-items-center">
                                    <h5 class="card-title">Blotter Reports</h5>
                                    <img src="{{ '../img/Secure Login-rafiki.png' }}" alt="" style="width: 30em; margin-left: 15px;">
                                </div>
                            </div>
                        </a>
                    </div>
                    
            </div>
        </div>
    </section>

@endsection
