@extends('layouts.app')
@section('bread-title', 'Datos del Empleado')
@section('content')
<div class="col-6">
    @include('common.errors')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Editar los datos de {{ $employee->first_name. ' ' .$employee->last_name }} </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <img src="{{ Storage::url($employee->avatar) }}" alt="Avatar del empleado">
                </div>
                <div class="form-group">
                    <label for="name">Nombre del Empleado</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" required
                        value="{{ $employee->first_name }}">
                </div>
                <div class="form-group">
                    <label for="name">Apellido del Empleado</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" required
                        value="{{ $employee->last_name }}">
                </div>
                <div class="form-group">
                    <label for="logo">Avatar:</label>
                    <input type="file" class="form-control-file" name="avatar" id="avatar">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required
                        value="{{ $employee->email }}">
                </div>
                <div class="form-group">
                    <label for="website">Teléfono</label>
                    <input class="form-control" type="text" name="phone" id="phone" required
                        value="{{ $employee->phone }}">
                </div>
                <div class="form-group">
                    <label for="company">Companñía la que pertenece:</label>
                    <select class="form-control" name="company_id" id="company_id" required>
                        <option selected value="{{ $employee->company->id }}">{{ $employee->company->name }}</option>
                        @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection