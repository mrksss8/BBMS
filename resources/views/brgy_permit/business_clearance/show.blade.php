@extends('layouts.app')
@section('title')
Brgy Business Clearance Records
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Issue Business Clearance</h3>
        </div>
        <div class="section-body">
        
                <div class="row">
                    <div class="col-6">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4>Business Information
                                </h4>
                            </div>
                            <div class="card-body">
                                <p><strong>  Business: </strong> {{ $business->business_name }}</p>
                                @if ($business->business_owner_id != null)
                                <p><strong>  Business Owner: </strong> {{$business->residence->last_name}}, {{$business->residence->first_name}} {{$business->residence->suffix_name }}</p>
                                @endif
                                <p><strong>  Business Owner: </strong>{{$business->business_owner_not_resident}}</p>
                                <p><strong>  Business Address: </strong> {{ $business->business_address }}</p>
                                <p><strong>  Business Type: </strong> Gulay Trading</p>
                            </div>
                            <div class="card-footer">
                                <p><strong>  Date Register: </strong>{{ \Carbon\Carbon::parse($business->regs_date)->format('F d, Y') }}</p>
                                
                            </div>
                        </div>
                        
                    </div>

                    

                    <div class="col-6">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4 class = "text-center">Issue Business Clearance</h4>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">

                                        <form action="{{route('business_clearance.show_clearance', $business->id)}}" method="POST" >
                                    @csrf
                                        <div class="form-group">
                                            <label>OR Number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="or_number" class="form-control phone-number"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="amount" class="form-control phone-number"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>

                            <div class = "d-flex justify-content-center">
                                <button type = "submit"class="btn btn-success">Generate Certificate</button>
                            </div>
                        </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

