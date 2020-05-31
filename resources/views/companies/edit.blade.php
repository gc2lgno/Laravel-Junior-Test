@extends('layouts.app')
@section('bread-title', 'Editar Compañía')
@section('content')
<div class="col-12">
    @include('common.errors')
    @include('common.success')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Editar datos de {{ $company->name }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre de la Compañía</label>
                    <input class="form-control" type="text" name="name" id="name" required value="{{ $company->name }}">
                </div>
                <div class="form-group">
                    <label for="name">Dirección:</label>
                    <input class="form-control" type="text" name="direction" id="direction" required value="{{ $company->direction }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required value="{{ $company->email }}">
                </div>
                <div class="form-group">
                    <label for="website">Página Web</label>
                    <input class="form-control" type="text" name="website" id="website" required value="{{ $company->website }}">
                </div>
                <div class="form-group">
                    <h4>Logo:</h4>
                    <img class="company-logo" src="{{ Storage::url($company->logo) }}"
                                alt="Logo de {{ $company->name }}">
                </div>
                <div class="form-group">
                    <label for="logo">Logo:</label>
                    <input type="file" class="form-control-file" name="logo" id="logo">
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
