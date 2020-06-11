@extends('layouts.app')
@section('bread-title', 'Datos del Empleado')
@section('content')
@include('common.errors')
@include('common.success')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ Storage::url($employee->avatar) }}"
                            alt="Avatar de empleado">
                    </div>

                    <h3 class="profile-username text-center">
                        {{ $employee->first_name. ' ' .$employee->last_name }}
                    </h3>

                    <p class="text-muted text-center">Software Engineer</p>

                    <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary btn-block"><b>Editar
                            Datos</b></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Acerca de</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-building mr-1"></i> Compañía</strong>

                    <p class="text-muted">
                        {{ $employee->company->name }}
                    </p>

                    <hr>

                    <strong><i class="fas fa-phone mr-1"></i> Teléfono</strong>

                    <p class="text-muted">{{ $employee->phone }}</p>

                    <hr>
                    <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                    <p class="text-muted">{{ $employee->email }}</p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><h4 cl>Empleados de la misma Compañía</h4>
                        </li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            @foreach ($companeros as $companero)                            
                            <div class="post clearfix">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="{{ Storage::url($companero->avatar) }}"
                                        alt="user image">
                                    <span class="username">
                                        <a href="{{ route('employee.show', $companero->id) }}">{{  $companero->first_name . ' ' . $companero->last_name }}</a>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                            </div>
                            @endforeach
                            <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection