@php
	$heading = 'Panel';
@endphp
@extends('layouts.epanel.master')

@section('content')
	<p class="big_button"><a href="{{ url('epanel/pages') }}"><input type="button" value="Pages"></a></p>
@endsection