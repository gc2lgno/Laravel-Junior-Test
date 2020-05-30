@extends('layouts.app')
@section('bread-title', 'Datos de Compañía')
@section('content')
<div class="col-12">
    @include('common.errors')
    @include('common.success')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Datos de {{ $company->name }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre de la Compañía</label>
                    <input class="form-control" type="text" name="name" id="name" required value="{{ $company->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required value="{{ $company->email }}" readonly>
                </div>
                <div class="form-group">
                    <label for="website">Página Web</label>
                    <input class="form-control" type="text" name="website" id="website" required value="{{ $company->website }}" readonly>
                </div>
                <div class="form-group">
                    <h4>Logo:</h4>
                    <img class="company-logo" src="{{ Storage::url($company->logo) }}"
                                alt="Logo de {{ $company->name }}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="{{ route('company.edit', $company->id) }}" class="btn btn-info">Editar</a>
            </div>
        </form>
    </div>
</div>
@endsection
