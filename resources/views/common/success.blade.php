@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
    <strong>{{ $message }}</strong>
</div>
@endif