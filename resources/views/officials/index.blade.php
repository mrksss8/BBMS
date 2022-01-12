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
                <a href="{{ route('officials.create') }}" class="btn btn-md btn-primary">Add New Officials</a>
            </div>

        </div>
        <div class="section-body">


            @foreach ($b_officials_batch_ids as $b_officials_batch_id)
                <div class="card pt-4" style="border: 1px solid #6474ec;">
                    <div class="container">
                        <h2 class="text-center mb-5 bgcolor-primary">Barangay Officials of
                            {{ $b_officials_batch_id->batch_id }}</h2>

                        @foreach ($b_officials as $b_official)

                            @if ($b_official->batch_id == $b_officials_batch_id->batch_id)
                                @if ($b_official->brgy_official_position == 'Barangay Chairman')
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-4">
                                            <div class="card radius-15" style="border: 1px solid #6474ec;">
                                                <div class="card-body text-center p-3">
                                                    <div class="p-3">
                                                        <img src="{{ $b_official->path }}" width="110" height="110"
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
                            @endif
                        @endforeach

                        <div class="row d-flex justify-content-center">
                            @foreach ($b_officials as $b_official)
                                @if ($b_official->batch_id == $b_officials_batch_id->batch_id)
                                    @if ($b_official->brgy_official_position != 'Barangay Chairman')
                                        <div class="col-4">
                                            <div class="card radius-15" style="border: 1px solid #6474ec;">
                                                <div class="card-body text-center p-3">
                                                    <div class="p-3">
                                                        <img src="{{ $b_official->path }}" width="110" height="110"
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
                                @endif
                            @endforeach
                        </div>

                        @if ($b_officials_batch_id->batch_id == $latest_id)
                            <div class=" d-flex justify-content-center p-5 pb-2">
                                <a href="{{ route('officials.edit') }}"
                                    class="btn btn-icon icon-left btn-primary btn-lg mr-3"><i
                                        class="fas fa-pencil-alt"></i>Update</a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach






    </section>
@endsection
