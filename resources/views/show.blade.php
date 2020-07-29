@extends('template')

@section('main')
<div id="keluarga">
	<h2>Detail Keluarga</h2>
	<table class="table table-striped">
		<tr>
			<th>NOKK</th>
			<td>{{ $keluarga->nokk }}</td>
		</tr>
		<tr>
			<th>Foto Kepala Keluarga</th>
			<td>
				@if (isset($keluarga->foto))
					<img src="{{ asset('fotoupload/'.$keluarga->foto) }}" width="75" height="100">
				@else
					<img src="{{ asset('fotoupload/none.png') }}" width="75" height="100">
				@endif
			</td>
		</tr>
		<tr>
			<th>Nama Kepala Keluarga</th>
			<td>{{ $keluarga->namakpk }}</td>
		</tr>
		<tr>
			<th>Tanggal Lahir</th>
			<td>{{ $keluarga->tl->format('d-m-Y') }}</td>
		</tr>
		<tr>
			<th>Nomor Telefon</th>
			<td>{{ !empty($keluarga->telefon->notelefon) ? $keluarga->telefon->notelefon: '-' }}</td>
		</tr>
		<tr>
			<th>Alamat Jalan</th>
			<td>{{ $keluarga->alamat->alamatjalan }}</td>
		</tr>
		<tr>
			<th>Nomor Rumah</th>
			<td>{{ $keluarga->norumah }}</td>
		</tr>
		<tr>
			<th>Status Tinggal</th>
			<td>{{ $keluarga->stating->statustinggal }}</td>
		</tr>
		
		<tr>
			<th>Bantuan Sosial</th>
			<td>
				@foreach ($keluarga->bansos as $bansos)
					{{ $bansos->namabansos }},
				@endforeach
			</td>
		</tr>

	</table>

	<div align="right" id="form-group row">
		<a href="{{ '/keluarga' }}" class="btn btn-primary">
			Kembali
		</a>
	</div>
</div>
@stop

@section('footer')
	@include('footer')
@stop