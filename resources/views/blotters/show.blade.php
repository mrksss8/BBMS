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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <h4>Blotters Case</h4>

                                    @if ($blotter->bcp1 == null)
                                        <button type="button" class="btn btn-outline-primary my-2" data-toggle="modal"
                                            data-target="#action"> <i class="far fa-edit"></i>
                                            Add Action
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-outline-primary my-2" data-toggle="modal"
                                            data-target="#action" disabled> <i class="far fa-edit"></i>
                                            Add Action
                                        </button>

                                    @endif

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
                            <strong>Complained Person:
                            </strong>{{ $blotter->residence->first_name }}
                            {{ $blotter->residence->middle_name }} {{ $blotter->residence->last_name }}<br>
                        </div>
                        <div class="card-body">
                            <strong>Blotters Description: </strong> {{ $blotter->Blotters_info }}
                        </div>
                        <div class="card-body">
                            <strong>Complainant: </strong>{{ $blotter->complainant_name }}<br>
                        </div>

                    </div>
                </div>
                {{-- <div class="col-6">
                    <div class="card">
                        @if ($blotter->status == 'Settled')
                            <div class="card-header">
                                <h4>This Case is Settled</h4>
                            </div>
                            <div class="card-body">
                                <p class = "text-center"> <strong>Case Information</strong> </p>
                                <p>{{ $blotter->agreement }}</p>
                            </div>
                            <div class="card-bod d-flex justify-content-center pt-3">
                                <a href="{{ route('settlement_agreement.show', $blotter->id) }}"
                                    class="btn btn-outline-primary my-4"><i class="far fa-edit"></i> View Agreement </a>
                            </div>
                        @else
                            <div class="card-header">
                                <h4> Action </h4>
                            </div>
                            <div class="card-bod d-flex justify-content-center pt-3">
                                <a href="{{ route('blotters.settelement', $blotter->id) }}"
                                    class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Settle Blotter </a>
                            </div>
                           
                        @endif
                        <div class="card-header">
                            <h4>Action</h4>

                        </div>
                        <div class="card-body">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary my-2" data-toggle="modal"
                                data-target="#exampleModalCenter"> <i class="far fa-edit"></i>
                                Add Action
                            </button>
                            {{-- <a href="" class="btn btn-outline-primary my-2"><i class="far fa-edit"></i> Add Action</a> --}}
                {{-- </div>
                    </div>
                </div> --}}

            </div>
            <div class="row ">
                <div class="col-12">

                    @if ($blotter->lbp3 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card border border-primary">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Lupon Patawag 3 </h4>
                                                <div>

                                                    <button type="button" class="btn btn-outline-primary my-2"
                                                        data-toggle="modal" data-target="#"> <i class="far fa-edit"></i>
                                                        Manage
                                                    </button>
                                                    <button type="button" class="btn btn-outline-primary my-2"
                                                        data-toggle="modal" data-target="#luponpatawag3"> <i
                                                            class="far fa-edit"></i>
                                                        Action
                                                    </button>
                                                    <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                        Letter</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">
                                            <p><strong>Date:</strong> October 12, 2020</p>
                                            <strong>Note: <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Dignissimos quidem aliquam veniam.</p></strong>
                                        </div>
                                    </div>

                                    <div class="card-footer">

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->lbp2 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card border border-primary">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Lupon Patawag 2 </h4>
                                                <div>
                                                    @if ($blotter->lbp3 == null)
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#"> <i
                                                                class="far fa-edit"></i>
                                                            Manage
                                                        </button>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#luponpatawag2"> <i
                                                                class="far fa-edit"></i>
                                                            Action
                                                        </button>
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>
                                                    @else
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#" disabled> <i
                                                                class="far fa-edit"></i>
                                                            Manage
                                                        </button>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#luponpatawag2" disabled> <i
                                                                class="far fa-edit"></i>
                                                            Action
                                                        </button>
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>
                                                    @endif

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">
                                            <p><strong>Date:</strong> October 12, 2020</p>
                                            <strong>Note: <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Dignissimos quidem aliquam veniam.</p></strong>
                                        </div>
                                    </div>

                                    <div class="card-footer">

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->lbp1 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card border border-primary">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Lupon Patawag 1 </h4>
                                                <div>
                                                    @if ($blotter->lbp2 == null)
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#"> <i
                                                                class="far fa-edit"></i>
                                                            Manage
                                                        </button>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#luponpatawag1"> <i
                                                                class="far fa-edit"></i>
                                                            Action
                                                        </button>
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>
                                                    @else
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#" disabled> <i
                                                                class="far fa-edit"></i>
                                                            Manage
                                                        </button>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#luponpatawag1" disabled> <i
                                                                class="far fa-edit"></i>
                                                            Action
                                                        </button>
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>
                                                    @endif

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">
                                            <p><strong>Date:</strong> October 12, 2020</p>
                                            <strong>Note: <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Dignissimos quidem aliquam veniam.</p></strong>
                                        </div>
                                    </div>

                                    <div class="card-footer">

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->bcp3 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card border border-primary">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Captain Patawag 3 </h4>
                                                <div>
                                                    @if ($blotter->lbp1 == null)
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#"> <i
                                                                class="far fa-edit"></i>
                                                            Manage
                                                        </button>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#patawag3"> <i
                                                                class="far fa-edit"></i>
                                                            Action
                                                        </button>
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>
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
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>

                                                    @endif

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">
                                            <p><strong>Date:</strong> October 12, 2020</p>
                                            <strong>Note: <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Dignissimos quidem aliquam veniam.</p></strong>
                                        </div>
                                    </div>

                                    <div class="card-footer">

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->bcp2 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card border border-primary">
                                    <div class="card-header">

                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Captain Patawag 2 </h4>

                                                @if ($blotter->bcp3 == null)
                                                    <div>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#"> <i
                                                                class="far fa-edit"></i>
                                                            Manage
                                                        </button>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#patawag2"> <i
                                                                class="far fa-edit"></i>
                                                            Action
                                                        </button>
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>
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
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>
                                                    </div>

                                                @endif


                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">
                                            <p><strong>Date:</strong> October 12, 2020</p>
                                            <strong>Note: <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Dignissimos quidem aliquam veniam.</p></strong>
                                        </div>
                                    </div>

                                    <div class="card-footer">

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($blotter->bcp1 !== null)
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <div class="card border border-primary">
                                    <div class="card-header">

                                        <div class="col-12">

                                            <div class="d-flex justify-content-between">
                                                <h4 class="d-flex align-items-center"> Barangay Captain Patawag 1 </h4>

                                                @if ($blotter->bcp2 == null)
                                                    <div>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#"> <i
                                                                class="far fa-edit"></i>
                                                            Manage
                                                        </button>
                                                        <button type="button" class="btn btn-outline-primary my-2"
                                                            data-toggle="modal" data-target="#patawag1"> <i
                                                                class="far fa-edit"></i>
                                                            Action
                                                        </button>
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>
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
                                                        <a href="" class="btn btn-outline-success btn-sm px-3">Generate
                                                            Letter</a>
                                                    </div>
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">

                                            <p><strong>Date:</strong> October 12, 2020</p>
                                            <strong>Note: <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Dignissimos quidem aliquam veniam.</p></strong>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif


                </div>
            </div>

    </section>


    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Make Action for this Blotters Record!</h5>
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
                                    <option value="bcp1"> Brgy Captain Patawag 1</option>
                                    <option value="bcp2"> Brgy Captain Patawag 2</option>
                                    <option value="bcp3"> Brgy Captain Patawag 3</option>
                                    <option value="lbp1"> Lupon ng Barangay Patawag 1</option>
                                    <option value="lbp2"> Lupon ng Barangay Patawag 2</option>
                                    <option value="lbp3"> Lupon ng Barangay Patawag 3</option>
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
    </div> --}}
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

                                    <option value=""> File to Action</option>
                                    <option value=""> Settle Case</option>
                                    <option value=""> Cancel Case</option>

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
                                    <option value=""> Settle Case</option>
                                    <option value=""> Cancel Case</option>

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
                                    <option value=""> Settle Case</option>
                                    <option value=""> Cancel Case</option>

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
                                    <option value=""> Settle Case</option>
                                    <option value=""> Cancel Case</option>

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
                                    <option value=""> Settle Case</option>
                                    <option value=""> Cancel Case</option>

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
                                    <option value=""> Settle Case</option>
                                    <option value=""> Cancel Case</option>

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
                                    <option value=""> Settle Case</option>
                                    <option value=""> Cancel Case</option>

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
