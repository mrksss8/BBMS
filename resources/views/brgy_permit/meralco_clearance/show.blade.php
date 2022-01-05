@extends('layouts.app')
@section('title')
    Business
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Building</h3>
        </div>
        <div class="section-body">
        
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Building Information</h4>
                            </div>
                            <div class="card-body">
                                <p> Meralco Clearance Control No.: <strong>  {{ $meralco->meralaco_clearance_number }}</strong></p>
                                <p> Meralco Clearance Requestor: <strong>{{ $meralco->meralaco_clearance_applicant }}</strong></p>
                                <p> Building Type: <strong>    {{ $meralco->meralaco_clearance_building_type }}</strong></p>
                                <p> Building Address: <strong>  {{ $meralco->meralaco_clearance_address }}</strong></p>
                            </div>
                        </div>
                        
                    </div>

                    

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class = "text-center">Issue Building Clearance</h4>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{route('meralco_clearance.clearance',$meralco->id)}}" class="btn btn-success">Generate Certificate</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

