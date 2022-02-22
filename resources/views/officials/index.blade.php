@extends('layouts.app')
@section('title')
    Officials
@endsection

@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <div class="">
                <h3 class="page__heading">Barangay Officials</h3>
            </div>
            <div class="mr-5">
                <div class="d-flex">

                    <a href="{{ route('officials.create') }}" class="btn btn-md btn-primary mr-3">Add New Officials</a>
                    <form action="{{ route('officials.history') }}" method="post">
                        @csrf
                        
                        <button type = "submit" class = "btn btn-md btn-primary">View Officials History</button>
                    </form>
                </div>
            </div>
            

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


            <div class="card pt-4" id = "border-blue">
                <div class="container">
                    
                  
                    <h2 class="text-center mb-5 bgcolor-primary">Barangay Officials of
                        {{ $latest_id}}</h2>

                        @foreach ($b_officials as $b_official)
                          
                                @if ($b_official->brgy_official_position == 'Barangay Chairman')
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <div class="card radius-15" id = "border-blue">
                                                <div class="card-body text-center p-3">
                                                    <div class="p-3">
                                                        <img src="{{ $b_official->path != null ? $b_official->path : asset('../img/brgy-bayog-logo.png') }}" width="110" height="110"
                                                            class="rounded-circle shadow" alt="">
                                                        <h5 class="mb-0 mt-3">Hon.
                                                            {{ $b_official->brgy_official_name }}
                                                        </h5>
                                                        <p class="mb-3">{{ $b_official->brgy_official_role }}
                                                        </p>
                                                        <p class="mb-1">
                                                            {{ $b_official->brgy_official_position }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                       
                        @endforeach

                        <div class="row d-flex justify-content-center">
                            @foreach ($b_officials as $b_official)
                               
                                    @if ($b_official->brgy_official_position != 'Barangay Chairman')
                                        <div class="col-md-4">
                                            <div class="card radius-15" id = "border-blue">
                                                <div class="card-body text-center p-3">
                                                    <div class="p-3">
                                                        <img src="{{ $b_official->path != null ? $b_official->path : asset('../img/brgy-bayog-logo.png') }}" width="110" height="110"
                                                            class="rounded-circle shadow" alt="">
                                                        <h5 class="mb-0 mt-3">Hon.
                                                            {{ $b_official->brgy_official_name }}
                                                        </h5>
                                                        <p class="mb-3">{{ $b_official->brgy_official_role }}
                                                        </p>
                                                        <p class="mb-1">
                                                            {{ $b_official->brgy_official_position }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                              
                            @endforeach
                        </div>
             
                            <div class=" d-flex justify-content-center p-5 pb-2">
                                <a href="{{ route('officials.edit') }}"
                                    class="btn btn-icon icon-left btn-primary btn-lg mr-3"><i
                                        class="fas fa-pencil-alt"></i>Update</a>
                            </div>
                </div>
            </div>
                

    </section>
@endsection
