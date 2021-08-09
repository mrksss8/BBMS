@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Brgy Clearance Issuance</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Mr/Ms {{ $resident->first_name }} {{ $resident->middle_name }}
                        {{ $resident->last_name }} </h2>
                    <p class="section-lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, nulla.
                    </p>

                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card profile-widget">
                                <div class="profile-widget-header d-flex justify-content-center p-5">
                                    <img alt="image" src="{{ asset('img/avatar-mark.jpg') }}" class="rounded-circle"
                                        height="300px" width="300px">

                                </div>
                                <div class="profile-widget-description">
                                    <div class="profile-widget-name">{{ $resident->last_name }}
                                        {{ $resident->first_name }}
                                        {{ $resident->middle_name }} <div class="text-muted d-inline font-weight-normal">
                                            <div class="slash"></div>{{ $resident->occupation }}
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, iste? Blanditiis quis
                                        quas in
                                        quisquam facere corrupti impedit quae repudiandae pariatur quaerat voluptatum
                                        officia
                                        tempora recusandae quam reiciendis excepturi, fugit rerum aut, eos reprehenderit
                                        repellat
                                        perferendis. Cupiditate sint perferendis esse obcaecati, vel provident veritatis
                                        voluptates,
                                        maiores ut enim labore saepe?</p>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="font-weight-bold mb-2">Follow Ujang On</div>


                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="deleteModal">Are you sure want to
                                                    delete?</h5>



                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p> <strong> Resident: </strong> {{ $resident->first_name }}
                                                    {{ $resident->middle_name }} {{ $resident->last_name }}</p>
                                                <p> <strong> Age: </strong>
                                                    <td>{{ \Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') }}
                                                    </td>
                                                </p>
                                                <p> <strong> Adddress: </strong> {{ $resident->house_number }} purok
                                                    {{ $resident->purok }} {{ $resident->street }}</p>
                                            </div>
                                            <div class="modal-footer">

                                                <form action="{{ route('residence.delete', $resident->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-icon icon-left btn-danger mr-3"><i
                                                            class="fas fa-trash"></i> Confirm </button>
                                                </form>
                                                <a href="{{ route('home') }}" data-dismiss="modal"
                                                    class="btn btn-icon icon-left btn-primary mr-3"><i
                                                        class="fas fa-ban"></i>
                                                    Cancel</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                {{-- <form action="{{route('residence.delete', $resident->id)}}" method="POST">
                                         @csrf
                                        @method('delete')
                                        <button type = "submit" class="btn btn-icon icon-left btn-danger mr-3"><i class="fas fa-trash"></i> Delete</button>
                                        </form> --}}


                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h4>Personal Information</h4>
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Last name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="last_name"
                                                            class="form-control phone-number">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Last name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="last_name"
                                                            class="form-control phone-number">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Last name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="last_name"
                                                            class="form-control phone-number">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Last name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="last_name"
                                                            class="form-control phone-number">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Last name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="last_name"
                                                            class="form-control phone-number">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Last name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="last_name"
                                                            class="form-control phone-number">
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{route('residence.create')}}" class="btn btn-lg btn-icon icon-left btn-success mr-5"><i class="far fa-edit"></i> Generate Brgy Clearance </a>
                        </div>

                    </div>



                </div>
            </div>
            <div class="col-6">

            </div>
        </div>
        </div>
    </section>
@endsection
