@extends('layouts.app')
@section('content')
    @include('common.errors')
    @include('common.success')
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <table class="table">
            <div class="form-group">
                <label for="first_name">Nombre del empleado</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Apellido del empleado</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="text" name="phone" id="phone" required>
            </div>
            <div class="form-group">
                <label for="company_id">Compañía:</label>
                <select name="company_id" id="company_id" required>
                    <option value="">Selecciona una opción</option>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
        </table>
        <div class="">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-danger">Reiniciar</button>
        </div>
    </form>
@endsection
