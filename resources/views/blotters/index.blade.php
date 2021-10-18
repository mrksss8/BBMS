@extends('layouts.app')
@section('title')
    Blotters
@endsection

@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blotters Record</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                            <h4>Blotter Records List</h4>
                            </div>
                            <div class="mr-5">
                                <a href="{{ route('blotters.create') }}" class="btn btn-outline-primary mr-3"><i
                                    class="far fa-edit"></i> Write Blotter </a>
                                    <a href="" class="btn btn-outline-success btn-sm px-3">Generate Blotters Report</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>View</th>
                                            <th>Case Number</th>
                                            <th>Complained Person</th>
                                            <th>Blotter Information</th>
                                            <th>Complainant</th>
                                            <th>Incident Date</th>
                                            <th>Case Type</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($blotters as $blotter)
                                        <tr>
                                            
                                            <td>
                                                <div class="row d-flex justify-content-center">
                                                    <a href="{{route('blotters.show', $blotter->id)}}"
                                                        class="btn btn-primary btn-sm" data-toggle="tooltip"
                                                        title="View"><i class="fas fa-eye"></i></a>

                                                </div>
                                            </td>
                                            <td>{{$blotter->id}}</td>
                                            <td>{{$blotter->residence->last_name}} {{$blotter->residence->first_name}} {{$blotter->residence->middle_name}}</td>
                                            <td>{{$blotter->Blotters_info}}</td>
                                            <td>{{$blotter->complainant_name}}</td>
                                            <td>{{ \Carbon\Carbon::parse($blotter->date_of_incident)->format('F d, Y') }}</td>
                                            <td>{{$blotter->case_type}}</td>
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
