@extends('layouts.app')
@section('title')
    Residents Registration
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Residents Registration</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="border: 1px solid #6474ec;">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 ">
                                    <div class="card">
                                        <div class="card-header bg-primary rounded mt-5 mb-3">
                                            <h4 class="text-dark">Personal Information</h4>
                                        </div>
                                        <form action="{{ route('residence.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="my_camera"></div>
                                                        <br />
                                                        <input type=button class="btn btn-sm btn-primary" value="Take Snapshot"
                                                            onClick="take_snapshot()">
                                                        <input type="hidden" name="image" class="image-tag">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="results">Your captured image will appear here...</div>
                                                    </div>
                                                </div>

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
                                                                <input type="text" name="last_name"
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
                                                                    class="form-control phone-number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-venus-mars"></i>
                                                                </div>
                                                                <select class="form-control" name="gender" required>
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
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
                                                                <input type="date" name="birthday"
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
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
                                                                    <option value="Single">Single</option>
                                                                    <option value="Married">Married</option>
                                                                    <option value="Annulled">Annulled</option>
                                                                    <option value="Widowed">Widowed</option>
                                                                    <option value="Separated">Separated</option>
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
                                                                    <option selected="true" disabled="disabled"></option>
                                                                    <option value="N/A"> N/A </option>
                                                                    <option value="Elementary">Elementary</option>
                                                                    <option value="High School">High School</option>
                                                                    <option value="College">College</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- <div class="col-sm-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fas fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="cat_image" type="file" class="form-control"
                                                                    name="image">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <img src="#" id="category-img-tag" width="200px" />
                                                                <div id="results" name="image"></div>
                                                            </div>
                                                        </div>
                                                    </div> --}}




                                                    <div class="card-header bg-primary rounded mt-5 mb-3">
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
                                                                <input type="number" name="house_number"
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
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
                                                                    <option value="1">Purok 1</option>
                                                                    <option value="2">Purok 2</option>
                                                                    <option value="3">Purok 3</option>
                                                                    <option value="4">Purok 4</option>
                                                                    <option value="5">Purok 5</option>

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
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
                                                                    <option value="Owned">Owned</option>
                                                                    <option value="Rental">Rental</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="card-header bg-primary rounded mt-5 mb-3">
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
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
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
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
                                                                    <option value="None">None</option>
                                                                    <option value="4Ps">4Ps</option>
                                                                    <option value="TUPAD">TUPAD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="container d-flex justify-content-center">
                                                <button type="submit" class="btn btn-icon icon-left btn-primary mr-3"><i
                                                        class="far fa-save"></i> Save</button>
                                                <a href="{{ route('residence.index') }}"
                                                    class="btn btn-icon icon-left btn-danger mr-3"><i
                                                        class="fas fa-ban"></i>
                                                    Cancel</a>
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
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#category-img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#cat_image").change(function() {
                readURL(this);
            });
        </script>

    

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
    </section>
@endsection
