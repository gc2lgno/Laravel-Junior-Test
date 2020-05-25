@extends('layouts.app')
@section('content')
@include('common.errors')
    <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table">
            <div class="form-group">
                <label for="name">Nombre de la Compañía</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="website">Página Web</label>
                <input type="text" name="website" id="website" required>
            </div>
            <div class="form-group">
                <label for="logo">Logo de la Compañía:</label>
                <input type="file" name="logo" id="logo" required>
            </div>
        </table>
        <div class="">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-danger">Reiniciar</button>
        </div>
    </form>
@endsection