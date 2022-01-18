@extends('layouts.app')
@section('title')
Building Permit
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Issue Building Permit</h3>
        </div>
        <div class="section-body">
        
                <div class="row">
                    <div class="col-8">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4>Building Information</h4>
                            </div>
                            <div class="card-body">
                                <p><strong>Building Owner:</strong>   {{ $building->building_owner }}</p>
                                <p><strong>Building Type:</strong>   {{ $building->building_type }}</p>
                                <p><strong>Building Address:</strong>   {{ $building->building_address }}</p>
                                <p><strong>Date Register:</strong>  {{ \Carbon\Carbon::parse($building->regs_date)->format('F d, Y') }}</strong></p>
                            </div>
                        </div>
                        
                    </div>

                    

                    <div class="col-4">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4 class = "text-center">Issue Building Clearance</h4>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{route('building_permit.clearance',$building->id)}}" class="btn btn-success">Generate Certificate</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

