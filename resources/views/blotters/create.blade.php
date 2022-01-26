@extends('layouts.app')
@section('title')
    Residence Registration
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Add Blotters</h3>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <div class="card" id = "border-blue">
                        <div class="card-header">
                            <h4>Blotters Information</h4>
                        </div>
                        <form action="{{route('blotters.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-8">
                                    <div class="col-sm-12">
                                        
                                        <div class="form-group">
                                            <label>Respondent/s</label>
                                            <select name = "resident_id[]"class="form-control select2 select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" style="width: 100%">
                                                @foreach ($residence as $resident)
                                                <option value = {{$resident->id}}> {{$resident->last_name}} {{$resident->first_name}} {{$resident->middle_name}}</option>     
                                                @endforeach
                                            </select>
                                          
                                          </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Respondent/s not resident</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="complained_resident" class="form-control phone-number">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Blotters Information</label>
                                            <div class="input-group">
                                                <textarea style = " min-height: 200px;" type="text" name="blotter_info" class="form-control phone-number"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Complainant</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="complainant_name" class="form-control phone-number"
                                                required>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Date of Incident</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                                <input type="date" name="date_of_incident" class="form-control phone-number"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                         <div class="form-group">
                                            <label>Case Type</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                                <select class="form-control" name = "case_type" >
                                                    <option disabled selected></option>       
                                                    <option value = "Civil"> Civil </option>      
                                                    <option value = "Crime"> Crime </option>                                  
                                                  </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- unsettled --}}
                                    <input type="text" name="status" value = "Unsettled" hidden>

                                    <div class="card-footer text-right">
                                        <div class="container d-flex justify-content-center">
                                            <button type="submit" class="btn btn-icon icon-left btn-primary mr-3"><i
                                                    class="far fa-save"></i> Save</button>
                                            <a href="{{ route('blotters.index') }}"
                                                class="btn btn-icon icon-left btn-danger mr-3"><i class="fas fa-ban"></i>
                                                Cancel</a>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
