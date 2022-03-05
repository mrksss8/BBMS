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
                    <div class="card" id = "border-blue">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 ">
                                    <div class="card">
                                        
                                        
                                        <form action="{{ route('residence.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

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

                                                <div class="card-header rounded mt-5 mb-3" style="background: #017cfd">
                                                    <h4 class="text-dark">Personal Information</h4>
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
                                                                    class="form-control phone-number" value="{{old('last_name')}}">
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
                                                                    class="form-control phone-number" value="{{old('first_name')}}">
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
                                                                    class="form-control phone-number" value="{{old('middle_name')}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="col-sm-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Suffix name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fas fa-user"></i>
                                                                    </div>
                                                                </div>
                                                                <input type="text" name="suffix_name"
                                                                    class="form-control phone-number" value="{{old('suffix_name')}}">
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
                                                                <select class="form-control" name="gender">
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
                                                                     
                                                                    <option value="Male" {{ old('gender') === 'Male' ? 'selected' : '' }}>Male</option>
                                                                    <option value="Female" {{ old('gender') === 'Female' ? 'selected' : '' }}>Female</option>
                    
                                                                    {{-- <option value="Female">Female</option> --}}
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
                                                                    class="form-control phone-number" required value="{{old('birthday')}}">
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
                                                                    class="form-control phone-number" required value="{{old('birthplace')}}">
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
                                                                    <option value="Single" {{ old('civil_status') === 'Single' ? 'selected' : '' }} >Single</option>
                                                                    <option value="Married" {{ old('civil_status') === 'Married' ? 'selected' : '' }} >Married</option>
                                                                    <option value="Annulled" {{ old('civil_status') === 'Annulled' ? 'selected' : '' }} >Annulled</option>
                                                                    <option value="Widowed" {{ old('civil_status') === 'Widowed' ? 'selected' : '' }} >Widowed</option>
                                                                    <option value="Separated" {{ old('civil_status') === 'Separated' ? 'selected' : '' }} >Separated</option>
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
                                                                    class="form-control phone-number" required value="{{old('occupation')}}">
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
                                                                    <option value="N/A" {{ old('student') === 'N/A' ? 'selected' : '' }}> N/A </option>
                                                                    <option value="Elementary" {{ old('student') === 'Elementary' ? 'selected' : '' }}>Elementary</option>
                                                                    <option value="High School" {{ old('student') === 'High School' ? 'selected' : '' }}>High School</option>
                                                                    <option value="College" {{ old('student') === 'College' ? 'selected': '' }}>College</option>
                                                                    <option value="Other" {{ old('student') === 'Other' ? 'selected' : '' }}>Other</option>
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
                                                                    class="form-control phone-number" value="{{old('house_number')}}">
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
                                                                <select class="form-control" name="purok" ">
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
                                                                    <option value="1" {{ old('purok') === '1' ? 'Selected' : '' }}>Purok 1</option>
                                                                    <option value="2" {{ old('purok') === '2' ? 'Selected' : '' }}>Purok 2</option>
                                                                    <option value="3" {{ old('purok') === '3' ? 'Selected' : '' }}>Purok 3</option>
                                                                    <option value="4" {{ old('purok') === '4' ? 'Selected' : '' }}>Purok 4</option>
                                                                    <option value="5" {{ old('purok') === '5' ? 'Selected' : '' }}>Purok 5</option>

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
                                                                    class="form-control phone-number" required value="{{old('street')}}">
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
                                                                    <option value="Owned" {{ old('type_of_house') === 'Owned' ? 'Selected' : '' }}>Owned</option>
                                                                    <option value="Rental" {{ old('type_of_house') === 'Rental' ? 'Selected' : '' }}>Rental</option>
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
                                                                    <i class="fas fa-user"></i>
                                                                </div>
                                                                <select class="form-control" name="pwd">
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
                                                                    <option value="Yes" {{ old('pwd') === 'Yes' ? 'Selected' : '' }}>Yes</option>
                                                                    <option value="No" {{ old('pwd') === 'No' ? 'Selected' : '' }}>No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Subsidy Program</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-user"></i>
                                                                </div>
                                                                <select class="form-control" name="membership_prog">
                                                                    <option selected="true" disabled="disabled">
                                                                    </option>
                                                                    <option value="None" {{ old('membership_prog') === 'None' ? 'Selected' : '' }}>None</option>
                                                                    <option value="4Ps" {{ old('membership_prog') === '4Ps' ? 'Selected' : '' }}>4Ps</option>
                                                                    <option value="TUPAD" {{ old('membership_prog') === 'TUPAD' ? 'Selected' : '' }}>TUPAD</option>
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
