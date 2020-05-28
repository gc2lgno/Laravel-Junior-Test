@extends('layouts.app')
@section('content')
@section('bread-title', 'Panel de Control')
<!-- Default box -->
<div class="fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $nCompanies }}</h3>

                    <p>Compañías Registradas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('company.index') }}" class="small-box-footer">Más Información <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $nEmployees }}</h3>

                    <p>Empleados Registrados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('employee.index') }}" class="small-box-footer">Más Información <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
</div>
<!-- /.card -->
@endsection