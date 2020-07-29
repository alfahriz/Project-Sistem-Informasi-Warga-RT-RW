@extends('template')

@section('main')
<div id="keluarga">
	<h2>Edit Informasi Keluarga di RT.01/RW.003 - {{$keluarga->namakpk}}</h2>
	<form action="{{ url('keluarga/'.$keluarga->id.'/update') }}" method="post" enctype="multipart/form-data">
		@csrf
		@method('patch')
		<input type="hidden" name="id" value="{{$keluarga->id}}">
		<input type="hidden" name="idtelefon" value="{{$keluarga->id}}">
		@include('formed')
	</form>
</div>
@endsection

@section('footer')
	@include('footer')
@endsection