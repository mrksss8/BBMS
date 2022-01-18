@extends('layouts.app')
@section('title')
Brgy Fencing 
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Issue Fencing Permit</h3>
        </div>
        <div class="section-body">
        
                <div class="row">
                    <div class="col-8">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4>Fencing Information</h4>
                            </div>
                            <div class="card-body">
                                <p><strong>  Fencing Number: </strong> {{$fencing->fencing_number}} </p>
                                <p><strong>  Name: </strong> {{$fencing->name}} </p>
                                <p><strong>  Address: </strong> {{$fencing->address}} </p>
                                <p><strong>  Fencing Location: </strong> {{$fencing->fencing_location}} </p>
                                <p><strong>  Purpose: </strong> {{$fencing->purpose}} </p>
                            </div>
                            <div class="card-footer">
                                <p><strong>  Date Issued: </strong> {{ \Carbon\Carbon::parse($fencing->created_at)->format('F d, Y') }}</p>
                                
                            </div>
                        </div>
                        
                    </div>

                    

                    <div class="col-4">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4 class = "text-center">Issue Fencing Permit</h4>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{route('fencing_permit.clearance', $fencing->id)}}" class="btn btn-success">Generate Certificate</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

