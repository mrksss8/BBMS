@extends('layouts.app')
@section('title')
    Blotters Information
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blotters Information</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Blotters Case</h4>
                        </div>
                        <div class="card-body"><strong>Complained Person: </strong>{{ $blotter->residence->first_name }}
                            {{ $blotter->residence->middle_name }} {{ $blotter->residence->last_name }}<br></div>
                        <div class="card-body"><strong>Blotters Description: </strong> <br>
                            <p class="ml-5 pt-2">{{ $blotter->Blotters_info }}</p> <br>
                        </div>
                        <div class="card-body"><strong>Complainant: </strong>{{ $blotter->complainant_name }}<br></div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        @if ($blotter->status == 'Settled')
                            <div class="card-header">
                                <h4>This Case is Settled</h4>
                            </div>
                            <div class="card-body">
                                <p class = "text-center"> <strong>Case Information</strong> </p>
                                <p>{{ $blotter->agreement }}</p>
                            </div>
                        @else
                            <div class="card-header">
                                <h4> Action </h4>
                            </div>
                            <div class="card-bod d-flex justify-content-center pt-3">
                                <a href="{{ route('blotters.settelement', $blotter->id) }}"
                                    class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Settle Blotter </a>
                            </div>
                            <div class="card-footer"></div>
                        
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
