@extends('layouts.app')
@section('content')
    @include('common.errors')
    @include('common.success')
    <div class="container">
        <table class="table">
            <thead>
            Empleados Registrados
            </thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Compañía</th>
                <th>Acciones</th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>
                        {{ $employee->first_name }}
                    </td>
                    <td>
                        {{ $employee->last_name }}
                    </td>
                    <td>
                        {{ $employee->email }}
                    </td>
                    <td>
                        {{ $employee->phone }}
                    </td>
                    <td>
                        {{ $employee->company_id }}
                    </td>
                </tr>
            @endforeach
            <tfoot>
            <a href="{{ route('employee.create') }}" class="btn btn-success">Crear</a>
            </tfoot>
            {{ $employees->links() }}
        </table>
    </div>
@endsection
