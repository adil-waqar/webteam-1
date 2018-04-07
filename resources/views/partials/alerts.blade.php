@if (session('success'))
<div class="alert alert-success" role="alert">
	<strong>Done!</strong> {{session('success')}}
</div>
@endif

@if (session('info'))
<div class="alert alert-info" role="alert">
	<strong>Done!</strong> {{session('info')}}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger" role="alert">
	<strong>Done!</strong> {{session('error')}}
</div>
@endif