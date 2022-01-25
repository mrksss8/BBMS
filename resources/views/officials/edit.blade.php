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
            <div class="card pt-4" id="border-blue">
                <div class="card-header">
                    <h5 class="w-100 text-center  p-4">Update Barangay Officials</h5>
                </div>
                <div class="container">
                    <form
                        action="{{ route('officials.update', [$b_cap->id, $b_councelor1->id, $b_councelor2->id, $b_councelor3->id, $b_councelor4->id, $b_councelor5->id, $b_councelor6->id, $b_councelor7->id, $b_sk->id, $b_sec->id, $b_tres->id, $b_clerk->id, $b_clerk1->id]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_cap->path != null ? $b_cap->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bcap_img-tag">
                                            <input id="bcap_img" type="file" class="form-control" name="bcap_img">

                                            <h5 class="mb-0 mt-3"> <input type="text" class="form-control"
                                                    placeholder="Brgy Captain Name" name="bcap"
                                                    value="{{ $b_cap->brgy_official_name }}"></h5>
                                            <p class="mb-3">{{ $b_cap->brgy_official_position }}</p>
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
                                            <img src="{{ $b_councelor1->path != null ? $b_councelor1->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc1_img-tag">
                                            <input id="bc1_img" type="file" class="form-control" name="bc1_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 1 Name" name="bc1_name"
                                                    value="{{ $b_councelor1->brgy_official_name }}"></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc1_role"
                                                    value="{{ $b_councelor1->brgy_official_role }}"></p>
                                            <p class="mb-1">{{ $b_councelor1->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_councelor2->path != null ? $b_councelor2->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc2_img-tag">
                                            <input id="bc2_img" type="file" class="form-control" name="bc2_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 2 Name" name="bc2_name"
                                                    value="{{ $b_councelor2->brgy_official_name }}"></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc2_role"
                                                    value="{{ $b_councelor2->brgy_official_role }}"></p>
                                            <p class="mb-3">{{ $b_councelor2->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_councelor3->path != null ? $b_councelor3->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc3_img-tag">
                                            <input id="bc3_img" type="file" class="form-control" name="bc3_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 3 Name" name="bc3_name"
                                                    value="{{ $b_councelor3->brgy_official_name }}"></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc3_role"
                                                    value="{{ $b_councelor3->brgy_official_role }}"></p>
                                            <p class="mb-3">{{ $b_councelor3->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_councelor4->path != null ? $b_councelor4->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc4_img-tag">
                                            <input id="bc4_img" type="file" class="form-control" name="bc4_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 4 Name" name="bc4_name"
                                                    value="{{ $b_councelor4->brgy_official_name }}"></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc4_role"
                                                    value="{{ $b_councelor4->brgy_official_role }}"></p>
                                            <p class="mb-3">{{ $b_councelor4->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_councelor5->path != null ? $b_councelor5->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc5_img-tag">
                                            <input id="bc5_img" type="file" class="form-control" name="bc5_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 5 Name" name="bc5_name"
                                                    value="{{ $b_councelor5->brgy_official_name }}"></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc5_role"
                                                    value="{{ $b_councelor5->brgy_official_role }}"></p>
                                            <p class="mb-3">{{ $b_councelor5->brgy_official_position }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_councelor6->path != null ? $b_councelor6->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc6_img-tag">
                                            <input id="bc6_img" type="file" class="form-control" name="bc6_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 6 Name" name="bc6_name"
                                                    value="{{ $b_councelor6->brgy_official_name }}"></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc6_role"
                                                    value="{{ $b_councelor6->brgy_official_role }}"></p>
                                            <p class="mb-3">{{ $b_councelor6->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_councelor7->path != null ? $b_councelor7->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bc7_img-tag">
                                            <input id="bc7_img" type="file" class="form-control" name="bc7_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Councelor 7 Name" name="bc7_name"
                                                    value="{{ $b_councelor7->brgy_official_name }}"></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bc7_role"
                                                    value="{{ $b_councelor7->brgy_official_role }}"></p>
                                            <p class="mb-3">{{ $b_councelor7->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_sk->path != null ? $b_sk->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bsk_img-tag">
                                            <input id="bsk_img" type="file" class="form-control" name="bsk_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="SK Chairperson Name" name="bsk_name"
                                                    value="{{ $b_sk->brgy_official_name }}"></h5>
                                            <p class="mb-3 mt-1"><input type="text" class="form-control"
                                                    placeholder="Role" name="bsk_role"
                                                    value="{{ $b_sk->brgy_official_role }}"></p>
                                            <p class="mb-3">{{ $b_sk->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-2">
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_sec->path != null ? $b_sec->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="bsec_img-tag">
                                            <input id="bsec_img" type="file" class="form-control" name="bsec_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Brgy Secretary Name" name="bsec_name"
                                                    value="{{ $b_sec->brgy_official_name }}"></h5>
                                            <p class="mb-3">{{ $b_sec->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_tres->path != null ? $b_tres->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar" id="btres_img-tag">
                                            <input id="btres_img" type="file" class="form-control" name="btres_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Brgy Treasurer Name" name="btres_name"
                                                    value="{{ $b_tres->brgy_official_name }}"></h5>
                                            <p class="mb-3">{{ $b_tres->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_clerk->path != null ? $b_clerk->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar"
                                                id="bclerk_img-tag">
                                            <input id="bclerk_img" type="file" class="form-control" name="bclerk_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Brgy Clerk Name" name="bclerk_name"
                                                    value="{{ $b_clerk->brgy_official_name }}"></h5>
                                            <p class="mb-3">{{ $b_clerk->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card radius-15" id="border-blue">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 radius-15">
                                            <img src="{{ $b_clerk1->path != null ? $b_clerk1->path : asset('../img/brgy-bayog-logo.png') }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="avatar"
                                                id="bclerk1_img-tag">
                                            <input id="bclerk1_img" type="file" class="form-control" name="bclerk1_img">

                                            <h5 class="mb-0 mt-3"><input type="text" class="form-control"
                                                    placeholder="Brgy Clerk Name" name="bclerk1_name"
                                                    value="{{ $b_clerk1->brgy_official_name }}"></h5>
                                            <p class="mb-3">{{ $b_clerk1->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" d-flex justify-content-center pt-5 pb-2">
                            <button type="submit" class="btn btn-icon icon-left btn-success mr-3"><i
                                    class="fas fa-save"></i> Save </button>
                    </form>
                    {{-- <a href="{{route('officials.update', $b_cap->id, $b_councelor1->id, $b_councelor2->id)}}" class="btn btn-icon icon-left btn-success mr-3"><i
                                class="fas fa-save"></i> Save </a> --}}

                    <a href="{{ route('officials.index') }}" class="btn btn-icon icon-left btn-danger mr-3"><i
                            class="fas fa-ban"></i> Cancel </a>

                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
