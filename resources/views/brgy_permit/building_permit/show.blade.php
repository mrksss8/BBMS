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
                                <p> Building Owner: <strong> {{ $building->building_owner }}</strong></p>
                                <p> Building Address: <strong> {{ $building->building_address }}</strong></p>
                                {{-- <p> Registration Date: <strong> {{ $business->business_address }}</strong></p> --}}
                                <p>Date Register: {{ \Carbon\Carbon::parse($building->regs_date)->format('F d, Y') }}</p>
                            </div>
                            <div class="card-footer">
                                
                                
                            </div>
                        </div>
                        
                    </div>

                    

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class = "text-center">Issue Building Clearance</h4>
                            </div>
                            <div class="card-body text-center">
                                <a href="" class="btn btn-success">Generate Certificate</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

