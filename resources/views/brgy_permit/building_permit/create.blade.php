@extends('layouts.app')
@section('title')
    Residence Registration
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Add Building Permit</h3>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="row">
                    <div class="col-12 ">
                        <div class="card" id = "border-blue">
                            <div class="card-header">
                                <h4>Building Information</h4>
                            </div>
                            <form action="{{route('building_permit.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Building Owner</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="building_owner" class="form-control phone-number"
                                                    required>
                                                </div>
                                            </div>
                                        </div>        
                                        
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Buiding Type</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="building_type" class="form-control phone-number"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                  

                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Buiding Address</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="building_address" class="form-control phone-number"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Registration Date</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="date" name="reg_date" class="form-control phone-number"
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
                                        <a href="{{route('building_permit.index')}}"
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
