@extends('layouts.app')
@section('title')
    Blotter Report
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blotters Reports</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id = "border-blue">
                        <div class="card-header">
                            <h4>Blotters</h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example">
                                    <thead>
                                        <tr>
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
                                            <td>{{$blotter->id}}</td>
                                            <td>
                                            @foreach ($blotter->residents as $resident)
                                            {{$resident->last_name}} {{$resident->first_name}} {{$resident->middle_name}} {{ $resident->suffix_name }}, 
                                            @endforeach
                                            <p>{{$blotter->complained_resident}}</p>
                                            </td>
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
                        <div class="card-footer text-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    
@endsection

@section('report_CSS_&_JS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ],
            });

        });
    </script>

@endsection