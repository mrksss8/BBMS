@extends('layouts.app')
@section('title')
    Reports
@endsection


@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Reports</h3>
        </div>
        <div class="section-body ">
            <div class="row d-flex justify-content-around">
                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around">
                    <a href="{{ route('residents.report') }}">
                        <div class="card text-center" style="width: 24rem; border: 5px solid rgb(6, 123, 233); padding-bottom: 1.5rem;">
                            <div class="card-body">
                                <h5 class="card-title">Residents Reports</h5>
                                <img src="{{ '../img/report.png' }}" alt="" style="width: 12.5em;" class="mt-3 ml-5">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around">
                    <a href="{{ route('blotters.report') }}">
                        <div class="card text-center" style="width: 24rem; border: 5px solid rgb(6, 123, 233);">
                            <div class="card-body">
                                <h5 class="card-title">Blotters Report</h5>
                                <img src="{{ '../img/case-study.png' }}" alt="" style="width: 14em;"
                                    class="mt-3 ml-3">

                            </div>
                        </div>
                    </a>
                </div>


            </div>
    </section>

@endsection
