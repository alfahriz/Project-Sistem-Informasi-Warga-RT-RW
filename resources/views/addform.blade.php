@extends('template')

@section('main')
<div id="siswa">
	<div align="center">
		<h1>FORMULIR PENDAFTARAN</h1>
	</div>

	<form action="{{ url('siswa') }}" method="POST">
		@csrf
		<h2>DATA PERUSAHAAN</h2><br>
		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="namaperusahaan">NAMA PERUSAHAAN:</label>
			<div class="col-sm-10">
			<input name="namaperusahaan" id="namaperusahaan" type="text" class="form-control">
			</div>
		</div><br><br>

		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="Alamat">ALAMAT:</label>
			<div class="col-sm-10">
				<textarea name="alamat" id="alamat" type="text" class="form-control"></textarea>
			</div>
		</div><br><br><br>

		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="kota">KOTA:</label>
			<div class="col-sm-10">
			<input name="kota" id="kota" type="text" class="form-control">
			</div>
		</div><br><br>

		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="kodepos">KODE POS:</label>
			<div class="col-sm-10">
			<input name="kodepos" id="kodepos" type="number" class="form-control"></label>
			</div>
		</div><br><br>

		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="provinsi">PROVINSI:</label>
			<div class="col-sm-10">
			<input name="provinsi" id="provinsi" type="text" class="form-control"></label>
			</div>
		</div><br><br>

		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="telefon">TELEFON:</label>
			<div class="col-sm-10">
			<input name="telefon" id="telefon" type="number" class="form-control"></label>
			</div>
		</div><br><br>

		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="fax">FAX:</label>
			<div class="col-sm-10">
			<input name="fax" id="fax" type="number" class="form-control"></label>
			</div>
		</div><br><br><br>

		<h2>PEMIMPIN PERUSAHAAN</h2><br>

		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="nama">NAMA:</label>
			<div class="col-sm-10">
			<input name="nama" id="nama" type="text" class="form-control"></label>
			</div>
		</div><br><br>
		
		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="jabatan">JABATAN:</label>
			<div class="col-sm-10">
			<input name="jabatan" id="jabatan" type="text" class="form-control"></label>
			</div>
		</div><br><br>

		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="nohp">MOBILE PHONE:</label>
			<div class="col-sm-10">
			<input name="nohp" id="nohp" type="number" class="form-control"></label>
			</div>
		</div><br><br>

		<div id="form-group row">
			<label class="col-sm-2 col-form-label" for="email">EMAIL:</label>
			<div class="col-sm-10">
			<input name="email" id="email" type="email" class="form-control"></label>
			</div>
		</div><br><br>

		<div class="form-group">
			<input class="btn btn-primary form-control" type="submit" value="simpan">
		</div>

		<div align="right">
			<font color="red">
				<label><strong>*Hanya tampilan form, belum ada fungsi tombol simpan.</strong></label>
			</font>
		</div>

	</form>
</div>
@stop