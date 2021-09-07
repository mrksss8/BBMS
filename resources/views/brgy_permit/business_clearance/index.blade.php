@extends('layouts.app')
@section('title')
    Certificates / Brgy Business Clearance
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Certificates / Brgy Business Clearance</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header d-flex justify-content-between mb-4">
                        <div>
                        <h4>List of Business</h4>
                        </div>
                        <div class="mr-5" >
                            <a type="button" class="btn btn-outline-primary mr-3" href  = "{{route('create_business')}}"> Add Business</a>
                        </div>
                      </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                Business Owner
                                            </th>
                                            <th>
                                                Business Name
                                            </th>
                                            <th>
                                                Business Address
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($businesses as $business)
                                        <tr>
                                            <td>

                                                <a href="{{route('business_clearance.show', $business->id)}}"
                                                    class="btn btn-primary btn-sm"><i class="fas fa-file-alt"></i>
                                                    View</a>

                                            </td>
                                            <td>
                                                {{$business->residence->last_name}}, {{$business->residence->first_name}}   {{$business->residence->middle_name}}    
                                            </td>
                                            <td>
                                                {{$business->business_name}}
                                            </td>
                                            <td>
                                                {{$business->business_address}}
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
