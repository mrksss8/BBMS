@extends('layouts.app')
@section('title')
    Officials
@endsection

@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <div class="">
                <h3 class="page__heading">Barangay Officials History</h3>
            </div>



        </div>
        <div class="section-body">

            <div class="mb-4">


                <form action="{{ route('officials.history') }}" method="post">
                    @csrf
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="mr-3">
                            <select class="form-control" name="year" style="width: 300px;">
                                <option selected="true" disabled="disabled">
                                    Select Year
                                </option>
                                @foreach ( $b_officials_batch_ids as  $b_officials_batch_id)
                                <option value="{{$b_officials_batch_id->batch_id}}">{{$b_officials_batch_id->batch_id}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-md btn-primary">Submit</button>

                        </div>


                    </div>
                </form>
            </div>

            <div class="card pt-4" id="border-blue">
                <div class="container">

                    @foreach ($b_officials as $b_official)
                        @if ($loop->first)
                        <h2 class="text-center mb-5 bgcolor-primary">Barangay Officials of Year {{ $b_official->batch_id }}
                        </h2>
                        @endif
                    @endforeach

                    @foreach ($b_officials as $b_official)
                        @if ($b_official->brgy_official_position == 'Barangay Chairman')
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-4">
                                    <div class="card radius-15" id="border-blue">
                                        <div class="card-body text-center p-3">
                                            <div class="p-3">
                                                <img src="{{ $b_official->path != null ? $b_official->path : asset('../img/brgy-bayog-logo.png') }}"
                                                    width="110" height="110" class="rounded-circle shadow" alt="">
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
                                    <div class="card radius-15" id="border-blue">
                                        <div class="card-body text-center p-3">
                                            <div class="p-3">
                                                <img src="{{ $b_official->path != null ? $b_official->path : asset('../img/brgy-bayog-logo.png') }}"
                                                    width="110" height="110" class="rounded-circle shadow" alt="">
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
                </div>
            </div>

    </section>
@endsection
