@if ($errors)
@foreach ($errors->all() as $error)
<div class="alert alert-warning" role="alert">
    <strong>Whoops!</strong> {{$error}}.
</div>
@endforeach
@endif