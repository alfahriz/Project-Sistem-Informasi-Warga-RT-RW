@extends('template')

@section('main')
<div id="keluarga">
	<h2>Tambah Asisten Rumah Tangga</h2>
	<form action="{{ url('keluarga') }}" method="POST" enctype="multipart/form-data">
		@csrf
		@include('form')
	</form>
</div>
@stop

@section('footer')
	@include('footer')
@stop