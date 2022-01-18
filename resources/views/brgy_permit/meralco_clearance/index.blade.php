@extends('layouts.app')
@section('title')
    Brgy Meralco Clearance Records
@endsection

@section('data_tables_css')
    <link href="{{ asset('assets/datatable_css/datatable.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"> Brgy Meralco Clearance Records</h3>
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
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>List of Meralco Clearance</h4>
                            </div>
                            <div class="mr-5">
                                <a type="button" class="btn btn-outline-primary mr-3"
                                    href="{{route('meralco_clearance.create')}}"> Add  Meralco Clearance</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>View</th>
                                            <th>Meralco Control No.</th>

                                            <th>
                                                Meralco Clearance Requestor
                                            </th>
                                            <th>
                                                Building Type
                                            </th>
                                            <th>
                                                Building Address
                                            </th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($meralcos as $meralco)
                                            <tr>
                                                <td>

                                                    <a href="{{route('meralco_clearance.show', $meralco->id)}}"
                                                        class="btn btn-primary btn-sm"><i class="fas fa-file-alt"></i>
                                                        View</a>

                                                </td>
                                                <td>
                                                    {{ $meralco->meralaco_clearance_number }}
                                                </td>
                                                <td>
                                                    {{ $meralco->meralaco_clearance_applicant }}
                                                </td>
                                                <td>
                                                    {{ $meralco->meralaco_clearance_building_type }}
                                                </td>
                                                <td>
                                                    {{ $meralco->meralaco_clearance_address }}
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

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection

@section('data_tables_script')
    <script type="text/javascript" charset="utf8" src="{{ asset('assets/datatable_js/datatable.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection
