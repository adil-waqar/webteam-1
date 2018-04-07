@php
$heading = 'Pages';
@endphp
@extends('layouts.epanel.master')

@section('content')
<p class="big_button"><a href="{{ url('epanel/pages/add') }}"><input value="Add New Page" type="button"></a></p>

<p>
	@foreach ($pages as $page)

	<a href="{{ url('epanel/page/'.$page->id.'/home') }}"><input style="width: 180px !important;" value="{{$page->name}}" type="button"></a>
	<a href="#"><input style="" value="{{$page->slug}}" type="button"></a>
	@endforeach
</p>
@endsection