@extends('layouts.app')
@section('bread-title', 'Lista de Compañías')
@section('content')
@include('common.success')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-bold">Compañías Registradas</h3>
            <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                    {{ $companies->links() }}
                </ul>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Logo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
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
