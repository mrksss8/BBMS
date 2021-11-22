@extends('layouts.app')
@section('title')
    Residence
@endsection

@section('data_tables_css')
    <link href="{{ asset('vendor/css/datatables/datatable.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Residence</h3>
        </div>
        <div class="section-body">

            @if (Session::has('swal'))
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
            @endif

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
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>List of Residence</h4>
                            </div>
                            <div class="mr-5">
                                <a href="{{ route('residence.import') }}" class="btn btn-outline-primary mr-3"><i
                                        class="far fa-edit"></i> Import Residence </a>
                                <a href="{{ route('residence.create') }}" class="btn btn-outline-primary mr-3"><i
                                        class="far fa-edit"></i> Register Residence </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>View</th>
                                            <th>Image</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Gender</th>
                                            <th>Birthday</th>
                                            <th>Age</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($residence_list as $residence)
                                            <tr>
                                                <td>
                                                    <div class="row d-flex justify-content-center">
                                                        <a href="{{ route('residence.show', $residence->id) }}"
                                                            class="btn btn-primary btn-sm" data-toggle="tooltip"
                                                            title="View"><i class="fas fa-eye"></i></a>

                                                    </div>
                                                </td>
                                                <td>
                                                    <figure class="avatar avatar-md">
                                                        <img src="{{ $residence->path }}">
                                                    </figure>
                                                </td>
                                                <td>{{ $residence->last_name }}</td>
                                                <td>{{ $residence->first_name }}</td>
                                                <td>{{ $residence->middle_name }}</td>
                                                <td>{{ $residence->gender }}</td>
                                                <td>{{ \Carbon\Carbon::parse($residence->birthday)->format('F d, Y') }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($residence->birthday)->diff(\Carbon\Carbon::now())->format('%y') }}
                                                </td>
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
