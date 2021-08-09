@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Residence Registration</h3>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="text-primary">Adding Residence</h3>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Personal Information</h4>
                                                </div>
                                                <form action ="{{route('residence.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Last name</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name ="last_name" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>First name</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "first_name" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Middle name</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "middle_name" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Gender</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "gender" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Birthday</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="date" name = "birthday" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Civil Status</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "civil_status" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Occupation</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "occupation" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card-header">
                                                            <h4>Address</h4>
                                                        </div>

                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>House Number</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="number" name = "house_number" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Purok</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "purok" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Street</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "street" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Type of house</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "type_of_house" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <div class="container d-flex justify-content-center">
                                    <button type = "submit"  class="btn btn-icon icon-left btn-primary mr-3"><i class="far fa-save"></i> Save</button>
                                    <a href="{{ route('home') }}" class="btn btn-icon icon-left btn-danger mr-3"><i class="fas fa-ban"></i> Cancel</a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
