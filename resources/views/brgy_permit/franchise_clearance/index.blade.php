@extends('layouts.app')
@section('title')
    Brgy Franchise Clearance
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Brgy Franchise Clearance Records</h3>
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
                                <h4>List of Franchise</h4>
                            </div>
                            <div class="mr-5">
                                <a type="button" class="btn btn-outline-primary mr-3"
                                    href="{{ route('franchise_clearance.create') }}"> Add Franchise</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>View</th>
                                            <th>Franchise No. </th>
                                            <th>Name </th>
                                            <th>Address</th>
                                            <th>Date Issued</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($franchises as $franchise)
                                            <tr>
                                                <td> <a href="{{ route('franchise_clearance.show', $franchise->id) }}"
                                                        class="btn btn-primary btn-sm" data-toggle="tooltip" title="View"><i
                                                            class="fas fa-eye"></i></a></td>
                                                <td>{{ $franchise->franchise_number }}</td>
                                                <td>{{ $franchise->resident->first_name }}
                                                    {{ $franchise->resident->middle_name }}
                                                    {{ $franchise->resident->last_name }}</td>
                                                <td>{{ $franchise->resident->house_number }} purok
                                                    {{ $franchise->resident->purok }} {{ $franchise->resident->street }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($franchise->created_at)->format('F d, Y') }}
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
