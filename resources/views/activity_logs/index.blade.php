@extends('layouts.app')
@section('title')
    Activity Logs
@endsection
@section('data_tables_css')
<link href="{{ asset('vendor/css/datatables/datatable.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <div class="">
                <h3 class="page__heading">Activity Logs</h3>
            </div>

        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id = "border-blue">
                        <div class="card-header d-flex justify-content-between mb-4">
                            <div>
                            <h4>Transaction Logs</h4>
                            </div>
                           
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Log Description</th>
                                            <th>Date</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($act_logs as $act_log)
                                        <tr>

                                            <td>{{$act_log->user}}</td>
                                            <td>{{$act_log->description}}</td>
                                            <td>{{ \Carbon\Carbon::parse($act_log->created_at)->format('F d, Y') }}</td>
 
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
