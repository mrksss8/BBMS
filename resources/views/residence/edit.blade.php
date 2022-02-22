@extends('layouts.app')
@section('title')
    Residents Update
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"> Update Resident </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card" id="border-blue">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 ">

                                    <form action="{{ route('residence.update', $resident->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="card-header rounded mt-5 mb-3" style="background: #017cfd">
                                                    <h4 class="text-dark">Resident Picture</h4>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class = "d-flex flex-column align-items-center ">
                                                    <div id="my_camera"></div>
                                                        <div>
                                                            <input type=button class="btn btn-sm btn-primary" value="Capture"
                                                            onClick="take_snapshot()">
                                                        </div>
                                                    </div>
                                                        <input type="hidden" name="image" class="image-tag">
                                                    </div>

                                                <div class="col-md-6">
                                                    <div id="results"></div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="card-header rounded mt-5 mb-3" style="background: #017cfd">
                                                    <h4 class="text-dark">Personal Information</h4>
                                                </div>

                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>Last name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" name="last_name"
                                                                value="{{ $resident->last_name }}"
                                                                class="form-control phone-number" required>
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
                                                            <input type="text" name="first_name"
                                                                value="{{ $resident->first_name }}"
                                                                class="form-control phone-number" required>
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
                                                            <input type="text" name="middle_name"
                                                                value="{{ $resident->middle_name }}"
                                                                class="form-control phone-number" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sex</label>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-venus-mars"></i>
                                                            </div>
                                                            <select class="form-control" name="gender" required>

                                                                <option
                                                                    {{ $resident->gender == 'Male' ? 'selected' : '' }}
                                                                    value="Male">Male</option>
                                                                <option
                                                                    {{ $resident->gender == 'Female' ? 'selected' : '' }}
                                                                    value="Female">Female</option>
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
                                                            <input type="date" name="birthday"
                                                                value="{{ $resident->birthday }}"
                                                                class="form-control phone-number" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>Birth Place</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-address-card"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" name="birthplace"
                                                            value="{{ $resident->birthplace }}"
                                                                class="form-control phone-number" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>Civil Status</label>

                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-id-badge"></i>
                                                            </div>
                                                            <select class="form-control" name="civil_status">

                                                                <option
                                                                    {{ $resident->civil_status == 'Single' ? 'selected' : '' }}
                                                                    value="Single">Single</option>
                                                                <option
                                                                    {{ $resident->civil_status == 'Married' ? 'selected' : '' }}
                                                                    value="Married">Married</option>
                                                                <option
                                                                    {{ $resident->civil_status == 'Annulled' ? 'selected' : '' }}
                                                                    value="Annulled">Annulled</option>
                                                                <option
                                                                    {{ $resident->civil_status == 'Widowed' ? 'selected' : '' }}
                                                                    value="Widowed">Widowed</option>
                                                                <option
                                                                    {{ $resident->civil_status == 'Separated' ? 'selected' : '' }}
                                                                    value="Separated">Separated</option>
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
                                                            <input type="text" name="occupation"
                                                                value="{{ $resident->occupation }}"
                                                                class="form-control phone-number" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>Student</label>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-address-card"></i>
                                                            </div>
                                                            <select class="form-control" name="student">

                                                                <option
                                                                    {{ $resident->student == 'N/A' ? 'selected' : '' }}
                                                                    value="N/A"> N/A </option>
                                                                <option
                                                                    {{ $resident->student == 'Elementary' ? 'selected' : '' }}
                                                                    value="Elementary">Elementary</option>
                                                                <option
                                                                    {{ $resident->student == 'High School' ? 'selected' : '' }}
                                                                    value="High School">High School</option>
                                                                <option
                                                                    {{ $resident->student == 'College' ? 'selected' : '' }}
                                                                    value="College">College</option>
                                                                <option
                                                                    {{ $resident->student == 'Other' ? 'selected' : '' }}
                                                                    value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>






                                                <div class="card-header rounded mt-5 mb-3" style="background: #017cfd">
                                                    <h4 class="text-dark"> Address</h4>
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
                                                            <input type="text" name="house_number"
                                                                value="{{ $resident->house_number }}"
                                                                class="form-control phone-number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>Purok</label>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-address-card"></i>
                                                            </div>
                                                            <select class="form-control" name="purok">

                                                                <option value="1"
                                                                    {{ $resident->purok == '1' ? 'selected' : '' }}>Purok
                                                                    1</option>
                                                                <option value="2"
                                                                    {{ $resident->purok == '2' ? 'selected' : '' }}>Purok
                                                                    2</option>
                                                                <option value="3"
                                                                    {{ $resident->purok == '3' ? 'selected' : '' }}>Purok
                                                                    3</option>
                                                                <option value="4"
                                                                    {{ $resident->purok == '4' ? 'selected' : '' }}>Purok
                                                                    4</option>
                                                                <option value="5"
                                                                    {{ $resident->purok == '5' ? 'selected' : '' }}>Purok
                                                                    5</option>

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
                                                            <input type="text" name="street"
                                                                value="{{ $resident->street }}"
                                                                class="form-control phone-number" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>Type of house</label>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-address-card"></i>
                                                            </div>
                                                            <select class="form-control" name="type_of_house">

                                                                <option value="Owned"
                                                                    {{ $resident->type_of_house == 'Owned' ? 'selected' : '' }}>
                                                                    Owned</option>
                                                                <option value="Rental"
                                                                    {{ $resident->type_of_house == 'Rental' ? 'selected' : '' }}>
                                                                    Rental</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-header rounded mt-5 mb-3" style="background: #017cfd">
                                                    <h4 class="text-dark text-center"> Other Information</h4>
                                                </div>


                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>PWD</label>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-venus-mars"></i>
                                                            </div>
                                                            <select class="form-control" name="pwd">

                                                                <option value="Yes"
                                                                    {{ $resident->pwd == 'Yes' ? 'selected' : '' }}>Yes
                                                                </option>
                                                                <option value="No"
                                                                    {{ $resident->pwd == 'No' ? 'selected' : '' }}>No
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>Subsidy Program</label>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-venus-mars"></i>
                                                            </div>
                                                            <select class="form-control" name="membership_prog">

                                                                <option value="None"
                                                                    {{ $resident->membership_prog == 'None' ? 'selected' : '' }}>
                                                                    None</option>
                                                                <option value="4Ps"
                                                                    {{ $resident->membership_prog == '4Ps' ? 'selected' : '' }}>
                                                                    4Ps</option>
                                                                <option value="TUPAD"
                                                                    {{ $resident->membership_prog == 'TUPAD' ? 'selected' : '' }}>
                                                                    TUPAD</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                        <div class="container d-flex justify-content-center">
                                            <a href="{{ route('residence.show', $resident->id) }}"
                                                class="btn btn-icon icon-left btn-danger mr-3"><i
                                                    class="fas fa-ban"></i>
                                                Cancel</a>
                                            <button type="submit" class="btn btn-icon icon-left btn-primary mr-3"><i
                                                    class="far fa-save"></i> Update</button>

                                        </div>
                                    </form>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
        <!-- Configure a few settings and attach camera -->
        <script language="JavaScript">
            Webcam.set({
                width: 490,
                height: 390,
                image_format: 'jpeg',
                jpeg_quality: 90
            });
            Webcam.attach('#my_camera');

            function take_snapshot() {
                Webcam.snap(function(data_uri) {
                    $(".image-tag").val(data_uri);
                    document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
                });
            }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </section>
@endsection
