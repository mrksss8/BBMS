@extends('layouts.app')
@section('title')
    Residents Profile
@endsection

@section('content')
    <section class="section">

        <div class="section-header">
            <h3 class="page__heading">Residents Profile</h3>
        </div>
        <div class="section-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <h2 class="section-title">Mr/Ms. {{ $resident->first_name }} {{ $resident->middle_name }}
                {{ $resident->last_name }}
            </h2>

            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card" id="border-blue">
                        <div class="card-header d-flex justify-content-center px-5 pt-5">

                            <img alt="image" src="{{ url('storage/residence/' . $resident->image) }}" class="rounded-circle"
                                height="400px" width="400px">

                        </div>

                        <div class="profile-widget-name text-center">
                            <h5>
                                <strong>{{ $resident->last_name }} {{ $resident->first_name }}
                                    {{ $resident->middle_name }} {{ $resident->suffix_name }} <div class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div>{{ $resident->occupation }}
                                    </div>
                                </strong>
                            </h5>
                        </div>
                        <div class="card-body m-5">

                            <div class="row">
                                <div class="col-md-6">
                                
                                    <p>
                                        <strong>Fullname: </strong> {{ $resident->last_name }}, {{ $resident->first_name }}
                                        {{ $resident->middle_name }} {{ $resident->suffix_name }}
                                    </p>

                                    <p>
                                        <strong>Birthday: </strong>{{ date('M d, Y', strtotime($resident->birthday)) }}
                                    </p>
                                    <p>
                                        <strong>Sex: </strong>{{ $resident->gender }}
                                    </p>
                                    <p>
                                        <strong>Occupation: </strong>{{ $resident->occupation }}

                                    </p>


                                    <p>
                                        <strong>Address: </strong>{{ $resident->house_number }}
                                        {{ $resident->street }}, Purok{{ $resident->purok }}, Bayog
                                    </p>

                                    <p>

                                        <strong>PWD: </strong>{{ $resident->pwd }}
                                    </p>




                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <strong>Age: </strong>
                                        {{ \Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') }}
                                    </p>
                                    <p>
                                        <strong>Birthplace: </strong>{{ $resident->birthplace }}
                                    </p>

                                    <p>
                                        <strong>Status: </strong>{{ $resident->civil_status }}

                                    </p>


                                    <p>
                                        <strong>Student: </strong>{{ $resident->student }}

                                    </p>
                                    <p>

                                        <strong>Type of house: </strong>{{ $resident->type_of_house }}
                                    </p>

                                    <p>

                                        <strong>Membership Program: </strong>{{ $resident->membership_prog }}
                                    </p>

                                    <p>

                                        <strong>Resident Number: </strong> {{$resident->res_num}}
                                    </p>


                                </div>
                            </div>

                        </div>

                        @forelse($resident->business as $b)
                            <div class="row">
                                <div class="col-sm-12 col-lg-12 mt-5">
                                    <h5 class="text-center text-primary">Business Information</h5>
                                    <p class="ml-5">


                                    <div class="card-body ml-5">
                                        <p>
                                            <strong> Business Name: </strong>
                                            {{ $b->business_name }} <br>
                                            <strong> Business Address: </strong>
                                            {{ $b->business_address }}
                                        </p>
                                    </div>

                                </div>

                            </div>
                        @empty
                        @endforelse

                        <div class="card-footer text-center">

                            <div class=" d-flex justify-content-center pt-5 pb-2">
                                <a class="btn btn-icon icon-left btn-primary mr-3"
                                    href="{{ route('residence.edit', $resident->id) }}"><i class="far fa-edit"></i>
                                    Edit
                                </a>



                                <a class="btn btn-icon icon-left btn-danger mr-3" data-toggle="modal"
                                    data-target="#deleteModal"><i class="fas fa-trash"></i>
                                    Delete
                                </a>


                            </div>

                            <!-- Delete Modal -->


                            {{-- <form action="{{route('residence.delete', $resident->id)}}" method="POST">
                                 @csrf
                                @method('delete')
                                <button type = "submit" class="btn btn-icon icon-left btn-danger mr-3"><i class="fas fa-trash"></i> Delete</button>
                                </form> --}}


                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="card" id="border-blue">
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
                            <a href="{{ route('brgy_live-in.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Live In Certification
                            </a>
                            <a href="{{ route('brgy_income.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Income Certification
                            </a>
                            <a href="{{ route('brgy_puipum.create', $resident->id) }}"
                                class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> PUI - PUM Certification
                            </a>
                        </div>
                    </div>


                </div>


            </div>
        </div>



    </section>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-backdrop="false">

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
                    <div class="p-5">
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

                        <form action="{{ route('residence.delete', $resident->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-icon icon-left btn-danger mr-3"><i
                                    class="fas fa-trash"></i> Confirm </button>
                        </form>
                        <a href="{{ route('dashboard.index') }}" data-dismiss="modal"
                            class="btn btn-icon icon-left btn-primary mr-3"><i class="fas fa-ban"></i>
                            Cancel</a>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!--hindi ko alam bat nilagay ko ito pero nag cause ng error hayp na yan kaya tinanggal ko -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script> --}}

@endsection
