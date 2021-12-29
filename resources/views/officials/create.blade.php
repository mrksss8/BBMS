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

            <div class="container">
                <form action="{{ route('officials.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row d-flex justify-content-end">
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Elected Year" name="batch_id" required >
                            <br>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">

                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                            height="110" class="rounded-circle shadow" alt="avatar" id="bcap_img-tag">
                                        <input id="bcap_img" type="file" class="form-control" name="bcap_img">

                                        <h5 class="mb-0 mt-3">
                                            <input type="text" class="form-control" placeholder="Brgy Captain Name"
                                                name="bcap_name" >
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">


                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                            height="110" class="rounded-circle shadow" alt="avatar" id="bc1_img-tag">
                                        <input id="bc1_img" type="file" class="form-control" name="bc1_img">


                                        <h5 class="mb-0 mt-3">
                                            <input type="text" class="form-control" placeholder="Councelor 1 Name"
                                                name="bc1_name">
                                        </h5>
                                        <p class="mb-3 mt-1">
                                            <input type="text" class="form-control" placeholder="Role" name="bc1_role">
                                        </p>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">

                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                            height="110" class="rounded-circle shadow" alt="avatar" id="bc2_img-tag">
                                        <input id="bc2_img" type="file" class="form-control" name="bc2_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="Councelor 2 Name" name="bc2_name"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                placeholder="Role" name="bc2_role"></p>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">

                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                        height="110" class="rounded-circle shadow" alt="avatar" id="bc3_img-tag">
                                        <input id="bc3_img" type="file" class="form-control" name="bc3_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="Councelor 3 Name" name="bc3_name"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                placeholder="Role" name="bc3_role"></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">
                                       
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                        height="110" class="rounded-circle shadow" alt="avatar" id="bc4_img-tag">
                                        <input id="bc4_img" type="file" class="form-control" name="bc4_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="Councelor 4 Name" name="bc4_name"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                placeholder="Role" name="bc4_role"></p>
                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">

                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                        height="110" class="rounded-circle shadow" alt="avatar" id="bc5_img-tag">
                                        <input id="bc5_img" type="file" class="form-control" name="bc5_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="Councelor 5 Name" name="bc5_name"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                placeholder="Role" name="bc5_role"></p>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">
                                        
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                        height="110" class="rounded-circle shadow" alt="avatar" id="bc6_img-tag">
                                        <input id="bc6_img" type="file" class="form-control" name="bc6_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="Councelor 6 Name" name="bc6_name"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                placeholder="Role" name="bc6_role"></p>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">
                                        
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                        height="110" class="rounded-circle shadow" alt="avatar" id="bc7_img-tag">
                                        <input id="bc7_img" type="file" class="form-control" name="bc7_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="Councelor 7 Name" name="bc7_name"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                placeholder="Role" name="bc7_role"></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">
                                        
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                        height="110" class="rounded-circle shadow" alt="avatar" id="bsk_img-tag">
                                        <input id="bsk_img" type="file" class="form-control" name="bsk_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="SK Chairperson Name" name="bsk_name"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                placeholder="Role" name="bsk_role"></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-2">
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">
                                       
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                        height="110" class="rounded-circle shadow" alt="avatar" id="bsec_img-tag">
                                        <input id="bsec_img" type="file" class="form-control" name="bsec_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="Brgy Secretary Name" name="bsec_name"></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">
                                       
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                        height="110" class="rounded-circle shadow" alt="avatar" id="btres_img-tag">
                                        <input id="btres_img" type="file" class="form-control" name="btres_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="Brgy Treasurer Name" name="btres_name"></h5>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card radius-15">
                                <div class="card-body text-center p-3">
                                    <div class="p-3 border radius-15">
                                       
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                        height="110" class="rounded-circle shadow" alt="avatar" id="bclerk_img-tag">
                                        <input id="bclerk_img" type="file" class="form-control" name="bclerk_img">

                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                placeholder="Brgy Clerk Name" name="bclerk_name"></h5>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class=" d-flex justify-content-center pt-5 pb-2">
                        <button type="submit" class="btn btn-icon icon-left btn-success mr-3"><i
                                class="fas fa-save"></i> Save
                        </button>
                </form>

            </div>
        </div>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

        <script>
            
        $(function () {

        $("#bcap_img").change(function () {
            readURLForBrgyCaptain(this);
        });

        $("#bc1_img").change(function () {
            readURLForCouncilor1(this);
        });

        $("#bc2_img").change(function () {
            readURLForCouncilor2(this);
        });

        $("#bc3_img").change(function () {
            readURLForCouncilor3(this);
        });

        $("#bc4_img").change(function () {
            readURLForCouncilor4(this);
        });

        $("#bc5_img").change(function () {
            readURLForCouncilor5(this);
        });

        $("#bc6_img").change(function () {
            readURLForCouncilor6(this);
        });

        $("#bc7_img").change(function () {
            readURLForCouncilor7(this);
        });

        $("#bsk_img").change(function () {
            readURLForbsk(this);
        });

        $("#bsec_img").change(function () {
            readURLForbsec(this);
        });

        $("#btres_img").change(function () {
            readURLForbtres(this);
        });

        $("#bclerk_img").change(function () {
            readURLForbclerk(this);
        });
  
    });


    function readURLForBrgyCaptain(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bcap_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForCouncilor1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bc1_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForCouncilor2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bc2_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForCouncilor3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bc3_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForCouncilor4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bc4_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForCouncilor5(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bc5_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForCouncilor6(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bc6_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForCouncilor7(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bc7_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForbsk(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bsk_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForbsec(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bsec_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForbtres(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#btres_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLForbclerk(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#bclerk_img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    
    </script>

    </section>


@endsection
