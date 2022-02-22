@extends('layouts.app')
@section('title')
    Reports
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Student Reports</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="border-blue">
                        <div class="card-header">
                            <h4>Student List</h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Birthday</th>
                                            <th>Purok</th>
                                            <th>Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($residence_list as $residence)
                                            @if ($residence->pwd == "Yes")
                                                <tr>
                                                    <td>{{ $residence->last_name }}, {{ $residence->first_name }}
                                                        {{ $residence->middle_name }} {{ $residence->suffix_name }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($residence->birthday)->diff(\Carbon\Carbon::now())->format('%y') }}
                                                    </td>
                                                    <td>{{ $residence->gender }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($residence->birthday)->format('F d, Y') }}
                                                    </td>
                                                    <td> Purok {{ $residence->purok}}</td>
                                                    <td>{{ $residence->student}}</td>
                                                </tr>
                                            @endif
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
