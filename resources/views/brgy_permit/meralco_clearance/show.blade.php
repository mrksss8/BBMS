@extends('layouts.app')
@section('title')
    Meralco Clearance
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Issue Meralco Clearance</h3>
        </div>
        <div class="section-body">
        
                <div class="row">
                    <div class="col-8">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4>Meralco Clearance Information</h4>
                            </div>
                            <div class="card-body">
                                <p><strong>Meralco Clearance Control No.:</strong>    {{ $meralco->meralaco_clearance_number }}</p>
                                <p><strong>Meralco Clearance Requestor:</strong>  {{ $meralco->meralaco_clearance_applicant }}</p>
                                <p><strong>Building Type:</strong>      {{ $meralco->meralaco_clearance_building_type }}</p>
                                <p><strong>Building Address:</strong>    {{ $meralco->meralaco_clearance_address }}</p>
                            </div>
                        </div>
                        
                    </div>

                    

                    <div class="col-4">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4 class = "text-center">Issue Clearance</h4>
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

