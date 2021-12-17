@extends('layouts.app')
@section('title')
    Certificates / Brgy Digging
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Certificates / Digging</h3>
        </div>
        <div class="section-body">
            <div class="row">
                

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                                <h4>List of Digging</h4>
                            </div>
                            <div class="mr-5">
                                <a type="button" class="btn btn-outline-primary mr-3" href="{{route('digging_permit.create')}}"> Add Digging</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>View</th>
                                            <th>Digging No.</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Digging Location</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($diggings as $digging)
                                            <tr>
                                                <td> <a href="{{route('digging_permit.show',$digging->id)}}"
                                                    class="btn btn-primary btn-sm"><i class="fas fa-file-alt"></i>
                                                    View</a></td>
                                                <td>{{ $digging->digging_number }}</td>
                                                <td>{{ $digging->name }}</td>
                                                <td>{{ $digging->address}}</td>
                                                <td>{{ $digging->digging_location}}</td>
                                                <td>{{ $digging->purpose}}</td>
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
