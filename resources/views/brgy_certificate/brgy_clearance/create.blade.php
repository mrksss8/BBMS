@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Brgy Clearance Issuance</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Mr/Ms {{ $resident->first_name}} {{ $resident->middle_name }}
                        {{ $resident->last_name }} </h2>
                    <p class="section-lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, nulla.
                    </p>

                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card profile-widget">
                                <div class="profile-widget-header d-flex justify-content-center p-5">
     
                                
                               
                                    <img alt="image" src="{{$resident->path}}" class="rounded-circle"
                                        height="300px" width="300px">

                                </div>
                                <div class="profile-widget-description">
                                    <div class="profile-widget-name">{{ $resident->last_name }}
                                        {{ $resident->first_name }}
                                        {{ $resident->middle_name }} <div class="text-muted d-inline font-weight-normal">
                                            <div class="slash"></div>{{ $resident->occupation }}
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, iste? Blanditiis quis
                                        quas in
                                        quisquam facere corrupti impedit quae repudiandae pariatur quaerat voluptatum
                                        officia
                                        tempora recusandae quam reiciendis excepturi, fugit rerum aut, eos reprehenderit
                                        repellat
                                        perferendis. Cupiditate sint perferendis esse obcaecati, vel provident veritatis
                                        voluptates,
                                        maiores ut enim labore saepe?</p>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="font-weight-bold mb-2">Follow Ujang On</div>


                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h4> Requesting for </h4>
                                </div>
                                <form action="{{route('brgy_clearance.show', $resident->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Purpose</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="purpose" 
                                                            class="form-control phone-number" required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-center">
                                        <button type = "submit"  class="btn btn-lg btn-icon icon-left btn-success"><i class="far fa-edit"></i> Generate Brgy Clearance </a>      
                                    </div>
                                    </form>

                                
                            </div>
                        </div>
{{-- <a href ="{{route('brgy_clearance.show', $resident->id)}}" class="btn btn-lg btn-icon icon-left btn-success mr-5"><i class="far fa-edit"></i> Generate Brgy Clearance </a> --}}
                        
                    </div>



                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
