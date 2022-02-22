@extends('layouts.app')
@section('title')
    Business
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Franchise</h3>
        </div>
        <div class="section-body">
        
                <div class="row">
                    <div class="col-8">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4>Franchise Information</h4>
                            </div>
                            <div class="card-body">
                                <p><strong>  Franchise Number: </strong> {{ $franchise->franchise_number }}</p>
                                <p><strong>  Plate Number: </strong> {{ $franchise->plate_number }}</p>
                                <p><strong>  Chasis Number: </strong>{{ $franchise->chasis_number }}</p>
                                <p><strong>  Motor Number: </strong> {{ $franchise->motor_number }}</p>
                            </div>
                            <div class="card-body">
                                <p><strong>  Name: </strong> {{ $franchise->resident->first_name }} {{ $franchise->resident->middle_name }} {{ $franchise->resident->last_name }} {{ $franchise->resident->suffix_name }}</p>
                                <p><strong>  Age: </strong> {{ \Carbon\Carbon::parse($franchise->resident->birthday)->diff(\Carbon\Carbon::now())->format('%y')}}</p>
                                <p><strong>  Address: </strong>{{ $franchise->resident->house_number }} purok
                                    {{ $franchise->resident->purok }} {{ $franchise->resident->street }}</p>
                               
                            </div>
                            <div class="card-footer">
                                <p><strong>  Date Issued: </strong> {{ \Carbon\Carbon::parse($franchise->created_at)->format('F d, Y') }}</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-4">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4 class = "text-center">Issue Business Clearance</h4>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{route('franchise_clearance.clearance',$franchise->id)}}" class="btn btn-success">Generate Certificate</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

