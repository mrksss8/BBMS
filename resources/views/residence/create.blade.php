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
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class = "text-dark">Personal Information</h4>
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
                                                                            <i class="fas fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name ="last_name" class="form-control phone-number" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>First name</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "first_name" class="form-control phone-number" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Middle name</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "middle_name" class="form-control phone-number" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            {{-- <div class="form-group">
                                                                <label>Gender</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-venus-mars"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "gender" class="form-control phone-number">
                                                                </div>
                                                            </div> --}}
                                                            <div class="form-group">
                                                                <label>Gender</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fas fa-venus-mars"></i>
                                                                    </div>
                                                                    <select class="form-control" name = "gender">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                      </select>
                                                                </div>
                                                                
                                                              </div>
                                                        </div>
                                                        

                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Birthday</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-calendar"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="date" name = "birthday" class="form-control phone-number" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Civil Status</label>
                                                                {{-- <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-id-badge"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "civil_status" class="form-control phone-number">
                                                                </div> --}}

                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fas fa-id-badge"></i>
                                                                    </div>
                                                                    <select class="form-control"  name = "civil_status">
                                                                        <option value = "Single">Single</option>
                                                                        <option value = "Married">Married</option>
                                                                        <option value = "Divorced">Divorced</option>
                                                                        <option value = "Widowed">Widowed</option>
                                                                        <option value = "Separated">Separated</option>
                                                                      </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Occupation</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-briefcase"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "occupation" class="form-control phone-number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Image</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-briefcase"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="file" name = "image" class="form-control phone-number">
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
                                                                            <i class="fas fa-address-card"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="number" name = "house_number" class="form-control phone-number" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Purok</label>
                                                                {{-- <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-address-card"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "purok" class="form-control phone-number">
                                                                </div> --}}
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fas fa-address-card"></i>
                                                                    </div>
                                                                    <select class="form-control"  name = "purok">
                                                                        <option value = "Purok1">Purok 1</option>
                                                                        <option value = "Purok2">Purok 2</option>
                                                                        <option value = "Purok3">Purok 4</option>
                                                                        <option value = "Purok4">Purok 5</option>
                                                                        <option value = "Purok5">Purok 6</option>
                                                                      </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Street</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-address-card"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "street" class="form-control phone-number" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Type of house</label>
                                                                {{-- <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-address-card"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" name = "type_of_house" class="form-control phone-number">
                                                                </div> --}}
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fas fa-address-card"></i>
                                                                    </div>
                                                                    <select class="form-control" name = "type_of_house" >
                                                                        <option value = "Owned">Owned</option>
                                                                        <option value = "Rental">Rental</option>                                                       
                                                                      </select>
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
