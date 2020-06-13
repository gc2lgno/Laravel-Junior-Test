@extends('layouts.app')
@section('bread-title', 'Lista de Compañías (DATATABLES)')
@section('content')
@include('common.success')
@section('custom-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection
<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-striped" id="companies">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Logo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->direction }}</td>
                        <td>
                            <img class="company-logo" src="{{ Storage::url($company->logo) }}"
                                alt="Logo de {{ $company->name }}">
                        </td>
                        <form action="{{ route('company.destroy', $company->id) }}" method="POST">
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('company.show', $company->id) }}" class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-success" href="http://{{ $company->website }}" target="_blank">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                    <a class="btn btn-primary" href="mailto:{{ $company->email }}">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('custom-js')
<script>
$(document).ready(function() {
    $('#companies').DataTable();
} );
</script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
@endsection
