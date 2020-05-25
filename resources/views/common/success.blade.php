@if ($message = Session::get('success'))
<div class="notification is-link">
    <button class="delete" aria-label="delete"></button>
    <strong>{{ $message }}</strong>
</div>
@endif