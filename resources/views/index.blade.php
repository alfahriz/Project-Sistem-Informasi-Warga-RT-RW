@extends('template')

@section('main')
<div id="keluarga">
	<h2>Daftar Keluarga RT.01/RW.03</h2>
	<hr>

	@if (!empty($keluargalist))
	<table class="table">
		<thead>
			<tr>
				<th>NOKK</th>
				<th>Nama Kepala Keluarga</th>
				<th>Telefon</th>
				<th>Alamat Tinggal</th>
				<th>Status Tinggal</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($keluargalist as $keluarga)
			<tr>
				<td>{{ $keluarga->nokk }}</td>
				<td>{{ $keluarga->namakpk }}</td>
				<td>{{ !empty($keluarga->telefon->notelefon) ? $keluarga->telefon->notelefon: '-' }}</td>
				<td>{{ $keluarga->alamat->alamatjalan }}</td>
				<td>{{ $keluarga->stating->statustinggal }}</td>
				<td>
					<a href="{{ url('keluarga/'.$keluarga->id) }}" class="btn btn-success btn-sm">Detail</a>
					<a href="{{ url('keluarga/edit/'.$keluarga->id) }}" class="btn btn-warning btn-sm">Edit</a>
					<a href="{{ url('keluarga/'.$keluarga->id.'/delete') }}" class="btn btn-danger btn-sm">Hapus</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
		<p>Tidak ada data Keluarga.</p>
	@endif

	<div class="table-nav">
		<div class="jumlahdata">
			<strong>Jumlah Keluarga: {{ $jumlahkeluarga }}</strong>
		</div>
		<div class="paginate">
			{{ $keluargalist->links() }}
		</div>
	</div>

	<div class="tombol-nav">
		<a href="{{ 'keluarga/create' }}" class="btn btn-primary">Tambah Data Keluarga</a>
	</div>
</div>
@stop

@section('footer')
	@include('footer')
@stop