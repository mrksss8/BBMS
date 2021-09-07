@extends('layouts.app')
@section('title')
    Blotters Settlement Agreement
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blotters Settlement Agreement</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Blotters Case</h4>
                        </div>
                        <div class="card-body"><strong>Complained Person:
                            </strong>{{ $blotter->residence->first_name }}
                            {{ $blotter->residence->middle_name }} {{ $blotter->residence->last_name }}<br></div>
                        <div class="card-body"><strong>Blotters Description: </strong> <br>
                            <p class="ml-5 pt-2">{{ $blotter->Blotters_info }}</p> <br>
                        </div>
                        <div class="card-body"><strong>Complainant: </strong>{{ $blotter->complainant_name }}<br>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
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
        </div>
    </section>
@endsection
