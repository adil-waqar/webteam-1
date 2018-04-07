@php
$heading = 'Add Page';
@endphp
@extends('layouts.epanel.master')

@section('content')
<p class="big_button"><a href="{{ url('epanel/pages/add') }}"><input value="Add New Page" type="button"></a></p>

<p> 
			<label for="tagname">Page Name</label>
			<form action="{{ url('epanel/pages/add') }}" method="post">
				{{csrf_field()}}
			<input id="tagname" name="name" required="required" placeholder="new page name" value="" type="text">
			<br>
			Important Note:<br>
			Please do not remove '-' for consistency of tag names.<br>
			Do not include spaces and special characters and keep the first letter of each word in capital.<br>
			e.g. ORIC-WordsAreCapitalized
		</p>

		<p class="login button"> 
			<input value="Add" type="submit"> 
		</p>
			</form>
@endsection