@extends('layouts.app')
@section('bread-title', 'Datos del Empleado')
@section('content')
<div class="col-6">
    @include('common.errors')
    @include('common.success')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Datos de {{ $employee->first_name. ' ' .$employee->last_name }} </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre del Empleado</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" readonly
                        value="{{ $employee->first_name }}">
                </div>
                <div class="form-group">
                    <label for="name">Apellido del Empleado</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" readonly
                        value="{{ $employee->last_name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" readonly
                        value="{{ $employee->email }}">
                </div>
                <div class="form-group">
                    <label for="website">Teléfono</label>
                    <input class="form-control" type="text" name="phone" id="phone" readonly value="{{ $employee->phone }}">
                </div>
                <div class="form-group">
                    <label for="company">Companñía la que pertenece:</label>
                    <select class="form-control" name="company_id" id="company_id" disabled required>
                        <option value="{{ $employee->company->id }}">{{ $employee->company->name }}</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-info">Editar</a>
            </div>
        </form>
    </div>
</div>
@endsection