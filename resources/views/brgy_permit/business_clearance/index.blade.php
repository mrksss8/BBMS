@extends('layouts.app')
@section('title')
    Certificates / Brgy Business Clearance
@endsection

@section('data_tables_css')
    <link href="{{ asset('assets/datatable_css/datatable.css') }}" rel="stylesheet" type="text/css" />
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
                        <div class="card-header d-flex justify-content-between">
                          <div>
                          <h4>Notice</h4>
                          </div>
                        </div>

                          <div class="card-body d-flex">
                            <div class="card border border-danger mb-3 mr-3" style="max-width: 18rem;">
                                <div class="card-header">No. of Expired Business Clearance</div>
                                <div class="card-body border-top border-danger text-danger">
                                  <h2 class = "text-danger text-center">{{$expired_business}}</h2>
                                </div>
                              </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>

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
                                            <th>
                                                Business Type
                                            </th>
                                            <th>
                                                Business Date of Registration
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
                                            <td>
                                                {{$business->business_type}}
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($business->regs_date)->format('F d, Y') }}
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
    <script type="text/javascript" charset="utf8" src="{{ asset('assets/datatable_js/datatable.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection



