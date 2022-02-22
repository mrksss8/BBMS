@extends('layouts.app')
@section('title')
    Residents
@endsection

@section('data_tables_css')
    <link href="{{ asset('vendor/css/datatables/datatable.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- @if (Session::has('swal'))
        <script>
            window.addEventListener("load", ok, false);

            function ok() {
                Swal.fire({
                    icon: 'success',
                    title: 'Residence added',
                    showConfirmButton: true,
                })
            }
        </script>
    @endif --}}

    @if (Session::has('swal_delete'))
        <script>
            window.addEventListener("load", ok, false);

            function ok() {
                Swal.fire({
                    icon: 'error',
                    title: 'Residence has been deleted',
                    showConfirmButton: true,
                })
            }
        </script>
    @endif

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Residents Record</h3>
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

          


            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>List of Residents</h4>
                            </div>
                            <div class="mr-5">
                                <a href="{{ route('residence.import') }}" class="btn btn-outline-primary mr-3"><i
                                        class="far fa-edit"></i> Import Residents </a>
                                <a href="{{ route('residence.create') }}" class="btn btn-outline-primary mr-3"><i
                                        class="far fa-edit"></i> Register Resident </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>View</th>
                                            <th>Image</th>
                                            <th>Resident ID</th>
                                            <th>Full Name</th>
                                            <th>Gender</th>
                                            <th>Birthday</th>
                                            <th>Age</th>
                                            <th>Address</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($residence_list as $residence)
                                            <tr>
                                                <td>
                                                    <div class="row d-flex justify-content-center">
                                                        <a href="{{ route('residence.show', $residence->id) }}"
                                                            class="btn btn-primary btn-sm"><i
                                                                class="fas fa-eye"></i></a>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            
                                                            <figure class="avatar avatar-md">
                                                                <img alt="image"
                                                                src="{{ url('storage/residence/' . $residence->image) }}"
                                                                class="rounded-circle" height="300px" width="300px">
                                                            </figure>
                                                            
                                                            {{-- @if ($residence->path != null)
                                                                <figure class="avatar avatar-md">
                                                        <img src="{{ $residence->path }}">
                                                    </figure>
                                                    @else
                                                    <figure class="avatar avatar-md">
                                                        <img id="logo-img" src="{{ asset('../img/avatar.jpg') }}"
                                                        alt="brgy-bayog-logo">
                                                    </figure>
                                                    @endif --}}
                                                    
                                                </td>
                                                <td>
                                                    {{$residence->res_num}}
                                                </td>
                                                <td>{{ $residence->last_name }} {{ $residence->first_name }}
                                                    {{ $residence->middle_name }} {{ $residence->suffix_name }}</td>
                                                <td>{{ $residence->gender }}</td>
                                                <td>{{ \Carbon\Carbon::parse($residence->birthday)->format('F d, Y') }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($residence->birthday)->diff(\Carbon\Carbon::now())->format('%y') }}
                                                </td>
                                                <td>{{ $residence->house_number }} {{ $residence->street }},
                                                    Purok{{ $residence->purok }}, Bayog<br></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection

@section('data_tables_script')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>

    <script type="text/javascript" charset="utf8" src="{{ asset('vendor/js/datatables/datatable.js') }}"></script>
@endsection
