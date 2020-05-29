@extends('layouts.app')
@section('bread-title', 'Lista de Empleados')
@section('content')
@include('common.success')
<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
            @foreach ($employees as $employee)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card bg-light">
                    <div class="card-header text-muted border-bottom-0">
                        Digital Strategist
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b>{{ $employee->first_name . ' ' .$employee->last_name}}</b></h2>
                                <p class="text-muted text-sm"><b>Trabaja en: </b> {{ $employee->company->name }}</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                        Address: Demo Street 123, Demo City 04312, NJ</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                        Teléfono #: {{ $employee->phone }}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt=""
                                    class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                                <a href="mailto:{{ $employee->email }}" class="btn btn-sm bg-teal">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> Ver Perfil
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
                {{ $employees->links() }}
            </ul>
        </nav>
    </div>
    <!-- /.card-footer -->
</div>
@endsection