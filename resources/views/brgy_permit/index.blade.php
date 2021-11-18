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
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Brgy Business Permit Records</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="{{route('business_clearance.index')}}" class="btn btn-primary">Open Business Records</a>
                        </div>
                      </div>
                </div>

                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Brgy Building Permit Records</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="{{route('building_permit.index')}}" class="btn btn-primary">Go to Building Records</a>
                        </div>
                      </div>
                </div>
        
                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Brgy Meralco Clearance Records</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>

                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Brgy Franchise Clearance Records</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>


                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Fencing Permit Records</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                
                <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-around"> 
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Digging Permit Records</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                
            </div>
    </section>
@endsection
