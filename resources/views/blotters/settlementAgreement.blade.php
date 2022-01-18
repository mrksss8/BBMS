@extends('layouts.app')
@section('title')
    Blotters Settlement Agreement
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blotters Settlement</h3>
        </div>
        <div class="section-body">

            <div class="row">
                
                <div class="col-12">
                    <div class="card" id = "border-blue">
                        <div class="card-header">
                            <h4> Action </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('blotters.settelement_save', $blotter->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Settelement Agreement</label>
                                        <div class="input-group">
                                            <textarea style=" min-height: 300px;" type="text" name="agreement"
                                                class="form-control phone-number" required></textarea>
                                        </div>
                                    </div>

                                    {{-- status --}}
                                    <input type="text" name = "status" value = "Settled" hidden>

                                </div>


                                <div class="card-footer text-right">
                                    <div class="container d-flex justify-content-center">
                                        <button type="submit" class="btn btn-icon icon-left btn-primary mr-3"><i
                                                class="far fa-save"></i> Save</button>
                                        <a href="#"
                                            class="btn btn-icon icon-left btn-danger mr-3"><i class="fas fa-ban"></i>
                                            Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card" id = "border-blue">
                        <div class="card-header">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <h4>Blotters Case</h4>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <strong>Case Number: </strong>{{ $blotter->id }}
                                </div>
                                <div>
                                    <strong class="ml-5">Case Type: </strong>{{ $blotter->case_type }}
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <strong>Complained Person:</strong>
                            
                            @foreach ($blotter->residents as $resident)
                                {{ $resident->last_name }} {{ $resident->first_name }}
                                {{ $resident->middle_name }},<span class = mx-2></span>
                            @endforeach
                            {{$blotter->complained_resident}}

                        </div>
                        <div class="card-body">
                            <strong>Blotters Description: </strong> {{ $blotter->Blotters_info }}
                        </div>
                        <div class="card-body">
                            <strong>Complainant: </strong>{{ $blotter->complainant_name }}<br>
                        </div>

                    </div>
                </div>

            </div>
            
        </div>
    </section>
@endsection
