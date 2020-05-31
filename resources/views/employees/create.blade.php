@extends('layouts.app')
@section('bread-title', 'Registrar Empleado')
@section('content')
<div class="col-6">
    @include('common.errors')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Registrar Empleado</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre del Empleado</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" required
                        value="{{ old('first_name') }}">
                </div>
                <div class="form-group">
                    <label for="name">Apellido del Empleado</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" required
                        value="{{ old('last_name') }}">
                </div>
                <div class="form-group">
                    <label for="logo">Avatar:</label>
                    <input type="file" class="form-control-file" name="avatar" id="avatar" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required
                        value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="website">Teléfono</label>
                    <input class="form-control" type="text" name="phone" id="phone" required value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                    <label for="company">Compañía la que pertenece:</label>
                    <select class="form-control" name="company_id" id="company_id" required>
                        <option value="">Selecciona una Opción</option>
                        @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Reiniciar</button>
            </div>
        </form>
    </div>
</div>
@endsection