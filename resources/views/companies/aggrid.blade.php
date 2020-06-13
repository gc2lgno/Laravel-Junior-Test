@extends('layouts.app')
@section('bread-title', 'Lista de Compañías (ag-Grid - AJAX)')
@section('content')
@include('common.success')
@section('custom-css')
    
@endsection
<div class="col-12 col-sm-2">
    <div id="companies" style="height: 400px; width:1024px;" class="ag-theme-alpine">
</div>
@endsection
@section('custom-js')
<script src="https://unpkg.com/ag-grid-community/dist/ag-grid-community.min.js"></script>

<script>
        
    var columnDefs = [
      {headerName: "Nombre", field: "name", sortable: true},
      {headerName: "EMAIL", field: "email", sortable: true},
      {headerName: "Dirección", field: "direction", sortable: true}
    ];

    // let the grid know which columns to use
    var gridOptions = {
      columnDefs: columnDefs,
      pagination: true,
      paginationPageSize: 10
    };

    // lookup the container we want the Grid to use
    var eGridDiv = document.querySelector('#companies');

    // create the grid passing in the div to use together with the columns & data we want to use
    new agGrid.Grid(eGridDiv, gridOptions);

    agGrid.simpleHttpRequest({
        url: 'api/companies'})
        .then(function(data) {
        gridOptions.api.setRowData(data);
    });
</script>
@endsection