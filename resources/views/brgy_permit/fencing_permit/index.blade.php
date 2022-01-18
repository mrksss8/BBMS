@extends('layouts.app')
@section('title')
    Brgy Fencing
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Brgy Fencing Permits Records</h3>
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
                                <h4>List of Fencing</h4>
                            </div>
                            <div class="mr-5">
                                <a type="button" class="btn btn-outline-primary mr-3" href="{{route('fencing_permit.create')}}"> Add Fencing</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>View</th>
                                            <th>Fencing No.</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Fencing Location</th>
                                            <th>Purpose</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($fencings as $fencing)
                                            <tr>
                                                <td> <a href="{{route('fencing_permit.show',$fencing->id)}}"
                                                    class="btn btn-primary btn-sm"><i class="fas fa-file-alt"></i>
                                                    View</a></td>
                                                <td>{{ $fencing->fencing_number }}</td>
                                                <td>{{ $fencing->name }}</td>
                                                <td>{{ $fencing->address}}</td>
                                                <td>{{ $fencing->fencing_location}}</td>
                                                <td>{{ $fencing->purpose}}</td>
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
