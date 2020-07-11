@extends('layouts.app')
@section('bread-title', 'Lista de Compañías (DATATABLES)')
@section('content')
@include('common.success')
@section('custom-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection
<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-striped" id="companies">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Logo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
@section('custom-js')
<script>
$(document).ready(function() {
    $('#companies').DataTable( {
    serverSide: true,
    ajax: {
        url: '/api/companies'
        }
    });
});
</script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
@endsection
