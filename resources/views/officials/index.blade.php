@extends('layouts.app')
@section('title')
    Residence Profile
@endsection

@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <div class="">
                <h3 class="page__heading">Barangay Officials</h3>
            </div>
            <div class="mr-5">
                <a href="{{ route('officials.create') }}" class="btn btn-md btn-primary">Create New Officials</a>
            </div>

        </div>
        <div class="section-body">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">

            <div class="container">
                @foreach ($b_officials as $b_official)
                    @if ($b_official->brgy_official_position == 'Barangay Chairman')
                        <div class="row d-flex justify-content-center">
                            <div class="col-4">
                                <div class="card radius-15">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 border radius-15">
                                            <img src="{{ $b_official->path }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="">
                                            <h5 class="mb-0 mt-3">{{ $b_official->brgy_official_name }}</h5>
                                            <p class="mb-3">{{ $b_official->brgy_official_role }}</p>
                                            <p class="mb-1">{{ $b_official->brgy_official_position }}</p>
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
                            <div class="col-4">
                                <div class="card radius-15">
                                    <div class="card-body text-center p-3">
                                        <div class="p-3 border radius-15">
                                            <img src="{{ $b_official->path }}" width="110"
                                                height="110" class="rounded-circle shadow" alt="">
                                            <h5 class="mb-0 mt-3">{{ $b_official->brgy_official_name }}</h5>
                                            <p class="mb-3">{{ $b_official->brgy_official_role }}</p>
                                            <p class="mb-1">{{ $b_official->brgy_official_position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>



                {{-- <div class="row d-flex justify-content-center">
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_councelor1->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_councelor1->brgy_official_role }}</p>
                                    <p class="mb-1">{{ $b_councelor1->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_councelor2->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_councelor2->brgy_official_role }}</p>
                                    <p class="mb-3">{{ $b_councelor2->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_councelor3->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_councelor3->brgy_official_role }}</p>
                                    <p class="mb-3">{{ $b_councelor3->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_councelor4->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_councelor4->brgy_official_role }}</p>
                                    <p class="mb-3">{{ $b_councelor4->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_councelor5->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_councelor5->brgy_official_role }}</p>
                                    <p class="mb-3">{{ $b_councelor5->brgy_official_position }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_councelor6->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_councelor6->brgy_official_role }}</p>
                                    <p class="mb-3">{{ $b_councelor6->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_councelor7->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_councelor7->brgy_official_role }}</p>
                                    <p class="mb-3">{{ $b_councelor7->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_sk->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_sk->brgy_official_role }}</p>
                                    <p class="mb-3">{{ $b_sk->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-2">
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_sec->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_sec->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_tres->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_tres->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card radius-15">
                            <div class="card-body text-center p-3">
                                <div class="p-3 border radius-15">
                                    <img src="{{ $b_official->path }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-3">{{ $b_clerk->brgy_official_name }}</h5>
                                    <p class="mb-3">{{ $b_clerk->brgy_official_position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" d-flex justify-content-center pt-5 pb-2">
                    <a href="{{route('officials.edit')}}" class="btn btn-icon icon-left btn-primary mr-3"><i
                            class="fas fa-pencil-alt"></i> Edit</a>

                    <a href="#" class="btn btn-icon icon-left btn-danger mr-3"><i
                        class="fas fa-trash"></i> Cancel </a>
                </div> --}}
            </div>
    </section>
@endsection
