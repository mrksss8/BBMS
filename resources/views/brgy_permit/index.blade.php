@extends('layouts.app')
@section('title')
Brgy Permits
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Brgy Permits</h3>
        </div>
        <div class="section-body ">
            <div class="row">
                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 30rem; heigth: 50rem;">
                        <div class="card-body" id = "border-blue" style="border-radius: 4px;">
                          <h5 class="card-title">Brgy Business Permit Records</h5>
                          <img src="{{ '../img/Data report-amico.png' }}" alt="" style = "width: 200px;" class = "p-3">
                          <a href="{{route('business_clearance.index')}}" class="btn btn-primary">Open Business Clearance Records</a>
                        </div>
                      </div>
                </div>

                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 30rem; heigth: 50rem;">
                        <div class="card-body" id = "border-blue" style="border-radius: 4px;">
                          <h5 class="card-title">Brgy Building Permit Records</h5>
                          <img src="{{ '../img/Building permit.jpg' }}" alt="" style = "width:200px; margin-bottom: 10px;" class = "p-3">
                          <a href="{{route('building_permit.index')}}" class="btn btn-primary">Open Building Clearance Records</a>
                        </div>
                      </div>
                </div>
        
                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 30rem; heigth: 50rem;">
                        <div class="card-body" id = "border-blue" style="border-radius: 4px;">
                          <h5 class="card-title">Brgy Meralco Clearance Records</h5>
                          <img src="{{ '../img/Completed-rafiki.png' }}" alt="" style = "width: 200px;" class = "p-3">
                          <a href="{{route('meralco_clearance.index')}}" class="btn btn-primary">Open Meralco Clearance Records</a>
                        </div>
                      </div>
                </div>

                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 30rem; heigth: 50rem;">
                        <div class="card-body" id = "border-blue" style="border-radius: 4px;">
                          <h5 class="card-title">Brgy Franchise Clearance Records</h5>
                          <img src="{{ '../img/Documents-cuate.png' }}" alt="" style = "width: 200px;">
                          <a href="{{route('franchise_clearance.index')}}" class="btn btn-primary">Open Franchise Records</a>
                        </div>
                      </div>
                </div>


                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 30rem; heigth: 50rem;">
                        <div class="card-body" id = "border-blue" style="border-radius: 4px;">
                          <h5 class="card-title">Brgy Fencing Permit Records</h5>
                          <img src="{{ '../img/Documents-rafiki.png' }}" alt="" style = "width: 200px;">
                          <a href="{{route('fencing_permit.index')}}" class="btn btn-primary">Open Fencing Permit Records</a>
                        </div>
                      </div>
                </div>
                
                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 30rem;">
                        <div class="card-body" id = "border-blue" style="border-radius: 4px;">
                          <h5 class="card-title">Brgy Digging Permit Records</h5>
                          <img src="{{ '../img/Documents-bro.png' }}" alt="" style = "width: 200px;">
                          <a href="{{route('digging_permit.index')}}" class="btn btn-primary">Open Digging Permits Records</a>
                        </div>
                      </div>
                </div>
                
            </div>
    </section>
@endsection
