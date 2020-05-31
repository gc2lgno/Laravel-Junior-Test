@extends('layouts.app')
@section('bread-title', 'Crear Compañía')
@section('content')
<div class="col-12">
    @include('common.errors')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Crear Compañía</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre de la Compañía</label>
                    <input class="form-control" type="text" name="name" id="name" required value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="name">Dirección:</label>
                    <input class="form-control" type="text" name="direction" id="direction" required value="{{ old('direction') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="website">Página Web</label>
                    <input class="form-control" type="text" name="website" id="website" required value="{{ old('website') }}">
                </div>
                <div class="form-group">
                    <label for="logo">Logo:</label>
                    <input type="file" class="form-control-file" name="logo" id="logo" required>
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