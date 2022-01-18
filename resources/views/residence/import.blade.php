@extends('layouts.app')
@section('title')
    Import Residence
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Import Residence</h3>
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

            @if (session()->has('failures'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>Excel file imported successfully</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card" id = "border-blue">
                <div class="card-body d-flex justify-content-center">
                    <form action="{{ route('importResidence') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input type="file" name="excelFile">
                            <button type="submit" class="btn btn-icon icon-left btn-primary"><i class="far fa-save"></i>
                                Import</button>
                        </div>
                    </form>
                </div>
            </div>


            @if (session()->has('failures'))

            <div class="card" id = "border-blue">
                <div class="card-header">
                    <h4>Failed Residents to Import</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="col-9">
                               
                                <table class="table table-danger">
                                    <tr>
                                        <th>Row</th>
                                        <th>Residence</th>
                                        <th>Errors</th>
                                    </tr>
    
                                    @foreach (session()->get('failures') as $validation)
                                        <tr>
                                            <td>{{ $validation->row() }}</td>
                                            <td>Residence with RN {{ $validation->values()[$validation->attribute()] }}</td>
                                            <td>
                                                Resident is already register
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                


            @endif



        </div>
    </section>
@endsection
