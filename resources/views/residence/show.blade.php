@extends('layouts.app')
@section('title')
    Residence Profile
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Residence Profile</h3>
        </div>
        <div class="section-body">

            <h2 class="section-title">Mr/Ms {{ $resident->first_name }} {{ $resident->middle_name }}
                {{ $resident->last_name }} </h2>
            {{-- <p class="section-lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, nulla.
            </p> --}}
            
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center p-5">
                            <img alt="image" src="{{ $resident->path }}" class="rounded-circle" height="300px"
                                width="300px">
                        </div>
                        <div class="card-body ml-5">
                            <div class="profile-widget-name">{{ $resident->last_name }} {{ $resident->first_name }}
                                {{ $resident->middle_name }} <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div>{{ $resident->occupation }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <p class="ml-5">
                                        <strong>Age:
                                        </strong>{{ \Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') }}<br>
                                        <strong>Birthday:
                                        </strong>{{ date('M d, Y', strtotime($resident->birthday)) }}<br>
                                        <strong>Sex: </strong>{{ $resident->gender }}<br>
                                        <strong>Status: </strong>{{ $resident->civil_status }}
                                    <p>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <p>
                                        <strong>Address: </strong>{{ $resident->house_number }} {{ $resident->purok }}
                                        {{ $resident->street }} Bayog, Los Baños <br>
                                        <strong>Type of house: </strong>{{ $resident->type_of_house }}<br>
                                    <p>

                                </div>
                            </div>

                        </div>

                        @forelse($resident->business as $b)
                            <div class="row">
                                <div class="col-sm-12 col-lg-12 mt-5">
                                    <h5 class="text-center text-danger">Business Information</h5>
                                    <p class="ml-5">


                                    <div class="card-body ml-5">
                                        <strong> Business Name: </strong>
                                        {{ $b->business_name }} <br>
                                        <strong> Business Address: </strong>
                                        {{ $b->business_address }}
                                    </div>


                                    <p>
                                        
                                </div>

                            </div>
                        @empty
                        @endforelse



                            <div class="card-footer text-center">
                                {{-- <div class="font-weight-bold mb-2">Follow Ujang On</div> --}}

                                <div class=" d-flex justify-content-end pt-5 pb-2">
                                    {{-- <a href="#" class="btn btn-icon icon-left btn-primary mr-3"><i
                                            class="fas fa-pencil-alt"></i> Edit</a> --}}

                                    <button type="button" class="btn btn-icon icon-left btn-danger mr-3" data-toggle="modal"
                                        data-target="#deleteModal"><i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="deleteModal">Are you sure want to
                                                    delete?</h5>



                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
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
                                                <a href="{{ route('dashboard.index') }}" data-dismiss="modal"
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
                </div>
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            <h5>Issue Certification</h5>

                        </div>
                        <div class="card-body d-flex flex-column align-items-center">
                            <a href="{{ route('brgy_clearance.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Brgy Clearance
                                Certification </a>
                            <a href="{{ route('brgy_indigency.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Indigency Certification
                            </a>
                            <a href="{{ route('brgy_residency.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Residency Certification
                            </a>
                            <a href="{{ route('brgy_goodmoral.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Good Moral Certification
                            </a>
                            <a href="{{ route('brgy_puipum.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> PUI - PUM Certification
                            </a>
                            <a href="{{ route('brgy_live-in.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Live In
                                Certification</a>
                            <a href="{{ route('brgy_income.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Income Certification</a>
                        </div>
                    </div>


                </div>


            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    </section>
    </section>
@endsection