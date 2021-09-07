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
                <form action="{{route('officials.update', [$b_cap->id, $b_councelor1->id, $b_councelor2->id, $b_councelor3->id, $b_councelor4->id, $b_councelor5->id, $b_councelor6->id, $b_councelor7->id, $b_sk->id, $b_sec->id, $b_tres->id, $b_clerk->id] )}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row d-flex justify-content-center">
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                      
                                    <h5 class="mb-0 mt-3">  <input type="text" class="form-control" placeholder="Brgy Captain Name" name = "bcap" value="{{ $b_cap->brgy_official_name }}"></h5>
                                    <p class="mb-3">{{ $b_cap->brgy_official_position }}</p>
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
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Councelor 1 Name" name = "bc1_name" value = "{{ $b_councelor1->brgy_official_name }}"></h5>
                                    <p class="mb-3 mt-1"><input type="text" class="form-control" placeholder="Role" name = "bc1_role" value = "{{ $b_councelor1->brgy_official_role }}"></p>
                                    <p class="mb-1">{{ $b_councelor1->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Councelor 2 Name" name = "bc2_name" value = "{{ $b_councelor2->brgy_official_name }}"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control" placeholder="Role" name = "bc2_role" value = "{{ $b_councelor2->brgy_official_role }}"></p>
                                    <p class="mb-3">{{ $b_councelor2->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Councelor 3 Name" name = "bc3_name" value = "{{ $b_councelor3->brgy_official_name }}"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control" placeholder="Role" name = "bc3_role" value = "{{ $b_councelor3->brgy_official_role }}"></p>
                                    <p class="mb-3">{{ $b_councelor3->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Councelor 4 Name" name = "bc4_name" value = "{{ $b_councelor4->brgy_official_name }}"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control" placeholder="Role" name = "bc4_role" value = "{{ $b_councelor4->brgy_official_role }}"></p>
                                    <p class="mb-3">{{ $b_councelor4->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Councelor 5 Name" name = "bc5_name" value = "{{ $b_councelor5->brgy_official_name }}"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control" placeholder="Role" name = "bc5_role" value = "{{ $b_councelor5->brgy_official_role }}"></p>
                                    <p class="mb-3">{{ $b_councelor5->brgy_official_position }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Councelor 6 Name" name = "bc6_name" value = "{{ $b_councelor6->brgy_official_name }}"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control" placeholder="Role" name = "bc6_role" value = "{{ $b_councelor6->brgy_official_role }}"></p>
                                    <p class="mb-3">{{ $b_councelor6->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Councelor 7 Name" name = "bc7_name" value = "{{ $b_councelor7->brgy_official_name }}"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control" placeholder="Role" name = "bc7_role" value = "{{ $b_councelor7->brgy_official_role }}"></p>
                                    <p class="mb-3">{{ $b_councelor7->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="SK Chairperson Name" name = "bsk_name" value = "{{ $b_sk->brgy_official_name }}"></h5>
                                        <p class="mb-3 mt-1"><input type="text" class="form-control" placeholder="Role" name = "bsk_role" value = "{{ $b_sk->brgy_official_role }}"></p>
                                    <p class="mb-3">{{ $b_sk->brgy_official_position }}</p>
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
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Brgy Secretary Name" name = "bsec_name" value = "{{ $b_sec->brgy_official_name }}"></h5>
                                    <p class="mb-3">{{ $b_sec->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Brgy Treasurer Name" name = "btres_name" value = "{{ $b_tres->brgy_official_name }}"></h5>
                                    <p class="mb-3">{{ $b_tres->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-3"><input type="text" class="form-control" placeholder="Brgy Clerk Name" name = "bclerk_name" value = "{{ $b_clerk->brgy_official_name }}"></h5>
                                    <p class="mb-3">{{ $b_clerk->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" d-flex justify-content-center pt-5 pb-2">
                    <button type ="submit" class="btn btn-icon icon-left btn-success mr-3"><i
                            class="fas fa-save"></i> Save </button>
                    </form>
                            {{-- <a href="{{route('officials.update', $b_cap->id, $b_councelor1->id, $b_councelor2->id)}}" class="btn btn-icon icon-left btn-success mr-3"><i
                                class="fas fa-save"></i> Save </a> --}}

                    <a href="#" class="btn btn-icon icon-left btn-danger mr-3"><i
                        class="fas fa-trash"></i> Cancel </a>
                </div>
            </div>
    </section>
@endsection
