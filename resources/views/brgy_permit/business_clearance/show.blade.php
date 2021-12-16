@extends('layouts.app')
@section('title')
    Business
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Business</h3>
        </div>
        <div class="section-body">
        
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Business Information</h4>
                            </div>
                            <div class="card-body">
                                <p><strong>  Business: </strong> {{ $business->business_name }}</p>
                                <p><strong>  Business Owner: </strong> {{$business->residence->last_name}}, {{$business->residence->first_name}}</p>
                                <p><strong>  Business Address: </strong> {{ $business->business_address }}</p>
                                <p><strong>  Business Type: </strong> Gulay Trading</p>
                            </div>
                            <div class="card-footer">
                                <p><strong>  Date Register: </strong>{{ \Carbon\Carbon::parse($business->regs_date)->format('F d, Y') }}</p>
                                
                            </div>
                        </div>
                        
                    </div>

                    

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class = "text-center">Issue Business Clearance</h4>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{route('business_clearance.show_clearance', $business->id)}}" class="btn btn-success">Generate Certificate</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

