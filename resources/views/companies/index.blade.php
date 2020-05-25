@extends('layouts.app')
@section('content')
@include('common.errors')
@include('common.success')
<div class="container">
    <table class="table">
        <thead>
            Compañías Registradas
        </thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Página Web</th>
            <th>Acciones</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>
                {{ $company->name }}
            </td>
            <td>
                {{ $company->email }}
            </td>
            <td>
                {{ $company->logo }}
            </td>
            <td>
                {{ $company->website }}
            </td>
        </tr>
        @endforeach
        <tfoot>
            <a href="{{ route('company.create') }}" class="btn btn-success">Crear</a>
        </tfoot>
        {{ $companies->links() }}
    </table>
</div>
@endsection