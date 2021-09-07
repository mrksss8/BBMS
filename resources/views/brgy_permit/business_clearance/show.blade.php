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
                        <div class="card-body bg-primary p-2">
                        <div class="card my-2">
                            <div class="card-header">
                                <h3> Business: <strong> {{ $business->business_name }}</strong></h3>
                            </div>
                            <div class="card-body">
                                <p> Business Owner: <strong> {{ $business->residence->last_name }},
                                        {{ $business->residence->first_name }}</strong></p>
                                <p> Business Address: <strong> {{ $business->business_address }}</strong></p>
                                <p> Business Type: <strong> Gulay Trading</strong></p>
                            </div>
                            <div class="card-footer">
                                <p>Date Register: September 8, 1999</p>
                                <p>Business no: 201231</p>
                                
                            </div>
                        </div>
                        
                    </div>

                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                Issue Certificate
                            </div>
                            <div class="card-body">
                                <a href="" class="btn btn-success">Generate Certificate</a>
                            </div>
                        </div>

                    </div>
                </div>

        </div>
    </section>
@endsection
