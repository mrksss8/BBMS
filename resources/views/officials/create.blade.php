@extends('layouts.app')
@section('title')
    Residence Profile
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Barangay Officials</h3>
        </div>
        <div class="section-body">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">

            <div class="card" id="border-blue">
                <div class="card-header">
                    <h5 class="w-100 text-center  p-4">Register New Barangay Officials</h5>
                </div>
                <div class="container">
                    <form action="{{ route('officials.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex justify-content-end">
                            <div class="col-4">
                                <input type="number" class="form-control" id="border-blue" placeholder="Elected Year"
                                    name="batch_id" required>
                                <br>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bcap_img-tag">
                                            <input id="bcap_img" type="file" class="form-control" name="bcap_img">

                                            <h5 class="mb-0 mt-3">
                                                <input type="text" class="form-control" placeholder="Brgy Captain Name"
                                                    name="bcap_name" required>
                                            </h5>

                                            <p class="mt-3 mb-0">
                                                Barangay Captain
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">


                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc1_img-tag">
                                            <input id="bc1_img" type="file" class="form-control" name="bc1_img">


                                            <h5 class="mb-0 mt-3">
                                                <input type="text" class="form-control" placeholder="Councelor 1 Name"
                                                    name="bc1_name" required>
                                            </h5>
                                            <p class="mb-3 mt-1">
                                                <input type="text" class="form-control" placeholder="Role" name="bc1_role"
                                                    required>
                                            </p>

                                            <p class="mt-3 mb-0">
                                                Barangay Councelor 1
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc2_img-tag">
                                            <input id="bc2_img" type="file" class="form-control" name="bc2_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 2 Name" name="bc2_name" required></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc2_role" required></p>

                                            <p class="mt-3 mb-0">
                                                Barangay Councelor 2
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc3_img-tag">
                                            <input id="bc3_img" type="file" class="form-control" name="bc3_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 3 Name" name="bc3_name" required></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc3_role" required></p>

                                            <p class="mt-3 mb-0">
                                                Barangay Councelor 3
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc4_img-tag">
                                            <input id="bc4_img" type="file" class="form-control" name="bc4_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 4 Name" name="bc4_name" required></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc4_role" required></p>

                                            <p class="mt-3 mb-0">
                                                Barangay Councelor 4
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc5_img-tag">
                                            <input id="bc5_img" type="file" class="form-control" name="bc5_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 5 Name" name="bc5_name" required></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc5_role" required></p>

                                            <p class="mt-3 mb-0">
                                                Barangay Councelor 5
                                            </p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc6_img-tag">
                                            <input id="bc6_img" type="file" class="form-control" name="bc6_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 6 Name" name="bc6_name" required></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc6_role" required></p>
                                            <p class="mt-3 mb-0">
                                                Barangay Councelor 6
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc7_img-tag">
                                            <input id="bc7_img" type="file" class="form-control" name="bc7_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 7 Name" name="bc7_name" required></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc7_role" required></p>
                                            <p class="mt-3 mb-0">
                                                Barangay Councelor 7
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bsk_img-tag">
                                            <input id="bsk_img" type="file" class="form-control" name="bsk_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="SK Chairperson Name" name="bsk_name" required></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bsk_role" required></p>

                                            <p class="mt-3 mb-0">
                                                Barangay SK Chairman
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bsec_img-tag">
                                            <input id="bsec_img" type="file" class="form-control" name="bsec_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Brgy Secretary Name" name="bsec_name" required></h5>

                                            <p class="mt-3 mb-0">
                                                Barangay Secretary
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="btres_img-tag">
                                            <input id="btres_img" type="file" class="form-control" name="btres_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Brgy Treasurer Name" name="btres_name" required></h5>

                                            <p class="mt-3 mb-0">
                                                Barangay Treasurer
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar"
                                                id="bclerk_img-tag">
                                            <input id="bclerk_img" type="file" class="form-control" name="bclerk_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Brgy Clerk Name" name="bclerk_name" required></h5>

                                            <p class="mt-3 mb-0">
                                                Barangay Clerk
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">

                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar"
                                                id="bclerk1_img-tag">
                                            <input id="bclerk1_img" type="file" class="form-control" name="bclerk1_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Brgy Clerk Name" name="bclerk1_name" required></h5>

                                            <p class="mt-3 mb-0">
                                                Barangay Clerk
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="w-100 text-center p-3">
                            <button type="submit" class="btn btn-md btn-icon icon-left btn-success mr-3">
                                <i class="fas fa-save"></i> Save
                            </button>
                            <a href="{{ route('officials.index') }}" class="btn btn-md btn-icon icon-left btn-danger mr-3">
                                <i class="fas fa-ban"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

        <script>
            $(function() {

                $("#bcap_img").change(function() {
                    readURLForBrgyCaptain(this);
                });

                $("#bc1_img").change(function() {
                    readURLForCouncilor1(this);
                });

                $("#bc2_img").change(function() {
                    readURLForCouncilor2(this);
                });

                $("#bc3_img").change(function() {
                    readURLForCouncilor3(this);
                });

                $("#bc4_img").change(function() {
                    readURLForCouncilor4(this);
                });

                $("#bc5_img").change(function() {
                    readURLForCouncilor5(this);
                });

                $("#bc6_img").change(function() {
                    readURLForCouncilor6(this);
                });

                $("#bc7_img").change(function() {
                    readURLForCouncilor7(this);
                });

                $("#bsk_img").change(function() {
                    readURLForbsk(this);
                });

                $("#bsec_img").change(function() {
                    readURLForbsec(this);
                });

                $("#btres_img").change(function() {
                    readURLForbtres(this);
                });

                $("#bclerk_img").change(function() {
                    readURLForbclerk(this);
                });

                $("#bclerk1_img").change(function() {
                    readURLForbclerk1(this);
                });

            });


            function readURLForBrgyCaptain(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bcap_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForCouncilor1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bc1_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForCouncilor2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bc2_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForCouncilor3(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bc3_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForCouncilor4(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bc4_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForCouncilor5(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bc5_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForCouncilor6(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bc6_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForCouncilor7(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bc7_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForbsk(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bsk_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForbsec(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bsec_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForbtres(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#btres_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForbclerk(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bclerk_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readURLForbclerk1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        //alert(e.target.result);
                        $('#bclerk1_img-tag').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

    </section>


@endsection
