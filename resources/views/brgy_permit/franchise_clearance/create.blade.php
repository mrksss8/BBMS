@extends('layouts.app')
@section('title')
    Franchise
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Add Franchise Clearance</h3>
        </div>
        <div class="section-body">
            <div class="card" id = "border-blue">
                <div class="row">
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4>Franchise Clearance Information</h4>
                            </div>

                            <form action="{{route('franchise_clearance.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Name of requestor</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                        <select name = "resident" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" style="width: 470px">
                                                            @foreach ($residents as $resident)
                                                            <option value = {{$resident->id}}> {{$resident->last_name}} {{$resident->first_name}} </option>     
                                                            @endforeach                                 
                                                          </select>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>                    
                                        
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Motor Number</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="motor_number" class="form-control phone-number"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Chasis Number</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="chasis_number" class="form-control phone-number"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Plate Number</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="plate_number" class="form-control phone-number"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <div class="container d-flex justify-content-center">
                                        <button type="submit" class="btn btn-icon icon-left btn-primary mr-3"><i
                                                class="far fa-save"></i> Save</button>
                                        <a href="{{route('franchise_clearance.index')}}"
                                            class="btn btn-icon icon-left btn-danger mr-3"><i class="fas fa-ban"></i>
                                            Cancel</a>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
