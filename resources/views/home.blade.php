@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>
                        Bienvenido,
                    </h1>
                    <br>
                    <div class="">
                        <a class="btn btn-primary" href="{{ route('company.index') }}">Companies</a>
                        <a class="btn btn-primary" href="{{ route('employee.index') }}">Employees</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection