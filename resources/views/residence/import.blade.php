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
           <div class="card">
               <div class="card-body d-flex justify-content-center">
                <form action="{{route('importResidence')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="file" name="excelFile">
                        <button type = "submit"  class="btn btn-icon icon-left btn-primary"><i class="far fa-save"></i> Import</button>
                    </div>
                </form>
                 </div>
           
            <div>
                @if (session()->has('failures'))

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

                @endif
               
                </div>
           </div>
        </div>  
    </section>
@endsection
