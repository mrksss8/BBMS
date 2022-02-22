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
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card" id = "border-blue">
                        <div class="card-header">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <h4>Blotters Case</h4>

                                    @if ($blotter->status == 'Unsettled')

                                        @if ($blotter->bcp1 == null)
                                            <button type="button" class="btn btn-outline-primary my-2" data-toggle="modal"
                                                data-target="#action"> <i class="far fa-edit"></i>
                                                Add Action
                                            </button>
                                        @else
                                            <a class="btn btn-warning my-2">
                                                Case is On-going
                                            </a>

                                        @endif

                                    @else

                                        <span type="button" class="btn btn-success my-2 text-dark">
                                            <strong>This Case is {{ $blotter->status }} </strong>
                                        </span>

                                    @endif

                                </div>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <strong>Case Number: </strong>{{ $blotter->case_number }}
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
                                {{ $resident->middle_name }} {{ $resident->suffix_name }},<span class = mx-2></span>
                            @endforeach
                            {{$blotter->complained_resident}}

                        </div>
                        <div class="card-body">
                            <strong>Blotters Description: </strong> {{ $blotter->Blotters_info }}
                        </div>
                        <div class="card-body">
                            <strong>Complainant: </strong>{{ $blotter->complainant_name }}<br>
                        </div>
                        
                        @if ($blotter->status == 'Settled')
                        <hr>
                        <div class="card m-5" id = "border-blue">
                            <div class="card-header">
                                <h4 class = "text-success">Settlement Information:</h4>
                            </div>
                            <div class="card-body">
                              <p>{{ $blotter->agreement}}</p>
                            </div>
                        </div>
                        @endif

                    </div>

                   
                    
                    
                </div>

            </div>
            <div class="row ">
                <div class="col-12">
                    @if ($blotter->lbp3 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card" id = "border-blue">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Lupon Patawag 3 </h4>
                                                <div>
                                                    @if ($blotter->status == 'Unsettled')
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#luponpatawag3_manage"> <i
                                                                class="far fa-edit"></i>
                                                            Manage
                                                        </button>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#luponpatawag3"> <i
                                                                class="far fa-edit"></i>
                                                            Action
                                                        </button>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="col-12">

                                            <p><strong>Date of Patawag:</strong>
                                                {{ $blotter->lbp3_date ? \Carbon\Carbon::parse($blotter->lbp3_date)->format('F d, Y h:i A') : null }}
                                            </p>
                                            <p><strong>Note:</strong> {{ $blotter->lbp3_note }}</p>

                                        </div>

                                        <div class="col-12 d-flex justify-content-center">
                                            @if ($blotter->status == 'Unsettled')
                                                <a href="{{ route('blotters.patawag', [\Carbon\Carbon::parse($blotter->lbp3_date)->format('F d, Y h:i A'), $blotter->id]) }}"
                                                    class="btn btn-outline-success btn-sm px-3">Generate
                                                    Letter</a>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->lbp2 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card" id = "border-blue">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Lupon Patawag 2 </h4>
                                                <div>
                                                    @if ($blotter->status == 'Unsettled')
                                                        @if ($blotter->lbp3 == null)
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#luponpatawag2_manage"> <i
                                                                    class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#luponpatawag2"> <i
                                                                    class="far fa-edit"></i>
                                                                Action
                                                            </button>

                                                        @else
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#" disabled> <i
                                                                    class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#luponpatawag2" disabled>
                                                                <i class="far fa-edit"></i>
                                                                Action
                                                            </button>

                                                        @endif
                                                    @endif

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">

                                            <p><strong>Date of Patawag:</strong>
                                                {{ $blotter->lbp2_date ? \Carbon\Carbon::parse($blotter->lbp2_date)->format('F d, Y h:i A') : null }}
                                            </p>
                                            <p><strong>Note:</strong> {{ $blotter->lbp2_note }}</p>

                                        </div>
                                        @if ($blotter->status == 'Unsettled')
                                            @if ($blotter->lbp3 == null)
                                                <div class="col-12 d-flex justify-content-center">
                                                    <a href="{{ route('blotters.patawag', [\Carbon\Carbon::parse($blotter->lbp2_date)->format('F d, Y h:i A'), $blotter->id]) }}"
                                                        class="btn btn-outline-success btn-sm px-3">Generate
                                                        Letter</a>
                                                </div>
                                            @endif
                                        @endif

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->lbp1 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card" id = "border-blue">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Lupon Patawag 1 </h4>
                                                <div>
                                                    @if ($blotter->status == 'Unsettled')
                                                        @if ($blotter->lbp2 == null)
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#luponpatawag1_manage"> <i
                                                                    class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#luponpatawag1"> <i
                                                                    class="far fa-edit"></i>
                                                                Action
                                                            </button>

                                                        @else
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#" disabled> <i
                                                                    class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#luponpatawag1" disabled>
                                                                <i class="far fa-edit"></i>
                                                                Action
                                                            </button>

                                                        @endif
                                                    @endif

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">

                                            <p><strong>Date of Patawag:</strong>
                                                {{ $blotter->lbp1_date ? \Carbon\Carbon::parse($blotter->lbp1_date)->format('F d, Y h:i A') : null }}
                                            </p>
                                            <p><strong>Note:</strong> {{ $blotter->lbp1_note }}</p>

                                        </div>
                                        @if ($blotter->status == 'Unsettled')
                                            @if ($blotter->lbp2 == null)
                                                <div class="col-12 d-flex justify-content-center">
                                                    <a href="{{ route('blotters.patawag', [\Carbon\Carbon::parse($blotter->lbp1_date)->format('F d, Y h:i A'), $blotter->id]) }}"
                                                        class="btn btn-outline-success btn-sm px-3">Generate
                                                        Letter</a>
                                                </div>
                                            @endif
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->bcp3 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card" id = "border-blue">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Captain Patawag 3 </h4>
                                                <div>
                                                    @if ($blotter->status == 'Unsettled')
                                                        @if ($blotter->lbp1 == null)
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#patawag3_manage"> <i
                                                                    class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#patawag3"> <i
                                                                    class="far fa-edit"></i>
                                                                Action
                                                            </button>

                                                        @else
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#" disabled> <i
                                                                    class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#patawag3" disabled> <i
                                                                    class="far fa-edit"></i>
                                                                Action
                                                            </button>


                                                        @endif
                                                    @endif

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">

                                            <p><strong>Date of Patawag:</strong>
                                                {{ $blotter->bcp3_date ? \Carbon\Carbon::parse($blotter->bcp3_date)->format('F d, Y h:i A') : null }}
                                            </p>
                                            <p><strong>Note:</strong> {{ $blotter->bcp3_note }}</p>

                                        </div>

                                        @if ($blotter->status == 'Unsettled')
                                            @if ($blotter->lbp1 == null)
                                                <div class="col-12 d-flex justify-content-center">
                                                    <a href="{{ route('blotters.patawag', [\Carbon\Carbon::parse($blotter->bcp3_date)->format('F d, Y h:i A'), $blotter->id]) }}"
                                                        class="btn btn-outline-success btn-sm px-3">Generate
                                                        Letter</a>
                                                </div>
                                            @endif
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->bcp2 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card" id = "border-blue">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Captain Patawag 2 </h4>

                                                @if ($blotter->status == 'Unsettled')

                                                    @if ($blotter->bcp3 == null)
                                                        <div>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#patawag2_manage"> <i
                                                                    class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#patawag2"> <i
                                                                    class="far fa-edit"></i>
                                                                Action
                                                            </button>

                                                        </div>
                                                    @else
                                                        <div>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#" disabled> <i
                                                                    class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#patawag2" disabled> <i
                                                                    class="far fa-edit"></i>
                                                                Action
                                                            </button>

                                                        </div>

                                                    @endif
                                                @endif


                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">

                                            <p><strong>Date of Patawag:</strong>
                                                {{ $blotter->bcp2_date ? \Carbon\Carbon::parse($blotter->bcp2_date)->format('F d, Y h:i A') : null }}
                                            </p>
                                            <p><strong>Note:</strong> {{ $blotter->bcp2_note }}</p>

                                        </div>
                                        @if ($blotter->status == 'Unsettled')
                                            @if ($blotter->bcp3 == null)
                                                <div class="col-12 d-flex justify-content-center">
                                                    <a href="{{ route('blotters.patawag', [\Carbon\Carbon::parse($blotter->bcp2_date)->format('F d, Y h:i A'), $blotter->id]) }}"
                                                        class="btn btn-outline-success btn-sm px-3">Generate
                                                        Letter</a>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->bcp1 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card" id = "border-blue">
                                    <div class="card-header">

                                        <div class="col-12">

                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Captain Patawag 1 </h4>

                                                @if ($blotter->status == 'Unsettled')
                                                    @if ($blotter->bcp2 == null)
                                                        <div>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#patawag1_manage"> <i
                                                                    class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#patawag1"> <i
                                                                    class="far fa-edit"></i>
                                                                Action
                                                            </button>

                                                        </div>
                                                    @else
                                                        <div>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                disabled> <i class="far fa-edit"></i>
                                                                Manage
                                                            </button>
                                                            <button type="button" class="btn btn-outline-primary my-2"
                                                                data-toggle="modal" data-target="#patawag1" disabled> <i
                                                                    class="far fa-edit"></i>
                                                                Action
                                                            </button>

                                                        </div>
                                                    @endif

                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">

                                            <p><strong> Date of Patawag:</strong>
                                                {{ $blotter->bcp1_date ? \Carbon\Carbon::parse($blotter->bcp1_date)->format('F d, Y h:i A') : null }}
                                            </p>
                                            <p><strong>Note:</strong> {{ $blotter->bcp1_note }}</p>

                                        </div>
                                        @if ($blotter->status == 'Unsettled')
                                            @if ($blotter->bcp2 == null)
                                                <div class="col-12 d-flex justify-content-center">
                                                    <a href="{{ route('blotters.patawag', [\Carbon\Carbon::parse($blotter->bcp1_date)->format('F d, Y h:i A'), $blotter->id]) }}"
                                                        class="btn btn-outline-success btn-sm px-3">Generate
                                                        Letter</a>
                                                </div>
                                            @endif
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif


                </div>
            </div>

    </section>



    <!-- Lupon Patawag 3 MODAL-->
    <div class="modal fade" id="luponpatawag3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Make action for this Blotter Record!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Please Select an Action</label>
                        <form method="POST" action="{{ route('blotters.update', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select class="form-control" name="patawag">
                                    <option disabled selected></option>

                                    {{-- <option value="File to Action"> File to Action</option> --}}
                                    <option value="Settled"> Settle Case (File to Action)</option>
                                    <option value="Cancelled"> Cancel Case</option>

                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Lupon Patawag 2 Manage MODAL-->
    <div class="modal fade" id="luponpatawag3_manage" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Title </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label></label>
                        <form method="POST" action="{{ route('blotters.manage', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Date of patawag</label>
                                <input type="datetime-local" class="form-control" name="lbp3_date"
                                    placeholder="araw ng patawag">
                            </div>

                            <div class="form-group">
                                <label>Note</label>
                                <input type="text" class="form-control" name="lbp3_note" placeholder="Note">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Lupon Patawag 2 MODAL-->
    <div class="modal fade" id="luponpatawag2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Make action for this Blotter Record!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Please Select an Action</label>
                        <form method="POST" action="{{ route('blotters.update', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select class="form-control" name="patawag">
                                    <option disabled selected></option>

                                    <option value="lbp3"> Brgy Lupon Patawag 3</option>
                                    <option value="Settled"> Settle Case</option>
                                    <option value="Cancelled"> Cancel Case</option>

                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Lupon Patawag 2 Manage MODAL-->
    <div class="modal fade" id="luponpatawag2_manage" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Title </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label></label>
                        <form method="POST" action="{{ route('blotters.manage', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Date of patawag</label>
                                <input type="datetime-local" class="form-control" name="lbp2_date"
                                    placeholder="araw ng patawag">
                            </div>

                            <div class="form-group">
                                <label>Note</label>
                                <input type="text" class="form-control" name="lbp2_note" placeholder="Note">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Lupon Patawag 1 MODAL-->
    <div class="modal fade" id="luponpatawag1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Make action for this Blotter Record!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Please Select an Action</label>
                        <form method="POST" action="{{ route('blotters.update', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select class="form-control" name="patawag">
                                    <option disabled selected></option>

                                    <option value="lbp2"> Brgy Lupon Patawag 2</option>
                                    <option value="Settled"> Settle Case</option>
                                    <option value="Cancelled"> Cancel Case</option>

                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Lupon Patawag 1 Manage MODAL-->
    <div class="modal fade" id="luponpatawag1_manage" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Title </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label></label>
                        <form method="POST" action="{{ route('blotters.manage', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Date of patawag</label>
                                <input type="datetime-local" class="form-control" name="lbp1_date"
                                    placeholder="araw ng patawag">
                            </div>

                            <div class="form-group">
                                <label>Note</label>
                                <input type="text" class="form-control" name="lbp1_note" placeholder="Note">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>







    <!-- Patawag 3 MODAL-->
    <div class="modal fade" id="patawag3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Make action for this Blotter Record!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Please Select an Action</label>
                        <form method="POST" action="{{ route('blotters.update', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select class="form-control" name="patawag">
                                    <option disabled selected></option>

                                    <option value="lbp1"> Brgy Lupon Patawag 1</option>
                                    <option value="Settled"> Settle Case</option>
                                    <option value="Cancelled"> Cancel Case</option>

                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Patawag 3 Manage MODAL-->
    <div class="modal fade" id="patawag3_manage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Title </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label></label>
                        <form method="POST" action="{{ route('blotters.manage', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Date of patawag</label>
                                <input type="datetime-local" class="form-control" name="bcp3_date"
                                    placeholder="araw ng patawag">
                            </div>

                            <div class="form-group">
                                <label>Note</label>
                                <input type="text" class="form-control" name="bcp3_note" placeholder="Note">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>





    <!-- Patawag 2 MODAL-->
    <div class="modal fade" id="patawag2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Make action for this Blotter Record!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Please Select an Action</label>
                        <form method="POST" action="{{ route('blotters.update', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select class="form-control" name="patawag">
                                    <option disabled selected></option>

                                    <option value="bcp3"> Add Brgy Captain Patawag 3</option>
                                    <option value="Settled"> Settle Case</option>
                                    <option value="Cancelled"> Cancel Case</option>

                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Patawag 2 Manage MODAL-->
    <div class="modal fade" id="patawag2_manage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Title </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label></label>
                        <form method="POST" action="{{ route('blotters.manage', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Date of patawag</label>
                                <input type="datetime-local" class="form-control" name="bcp2_date"
                                    placeholder="araw ng patawag">
                            </div>

                            <div class="form-group">
                                <label>Note</label>
                                <input type="text" class="form-control" name="bcp2_note" placeholder="Note">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>





    <!-- Patawag 1 MODAL-->
    <div class="modal fade" id="patawag1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Make action for this Blotter Record!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Please Select an Action</label>
                        <form method="POST" action="{{ route('blotters.update', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select class="form-control" name="patawag">
                                    <option disabled selected></option>

                                    <option value="bcp2"> Add Brgy Captain Patawag 2</option>
                                    <option value="Settled"> Settle Case</option>
                                    <option value="Cancelled"> Cancel Case</option>

                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Patawag 1 Manage MODAL-->
    <div class="modal fade" id="patawag1_manage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Title </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label></label>
                        <form method="POST" action="{{ route('blotters.manage', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Date of patawag</label>
                                <input type="datetime-local" class="form-control" name="bcp1_date"
                                    placeholder="araw ng patawag">
                            </div>

                            <div class="form-group">
                                <label>Note</label>
                                <input type="text" class="form-control" name="bcp1_note" placeholder="Note">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>






    <!-- Action MODAL-->
    <div class="modal fade" id="action" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Make action for this Blotter Record!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Please Select an Action</label>
                        <form method="POST" action="{{ route('blotters.update', $blotter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select class="form-control" name="patawag">
                                    <option disabled selected></option>

                                    <option value="bcp1"> Add Brgy Captain Patawag 1</option>
                                    <option value="Settled"> Settle Case</option>
                                    <option value="Cancelled"> Cancel Case</option>

                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
