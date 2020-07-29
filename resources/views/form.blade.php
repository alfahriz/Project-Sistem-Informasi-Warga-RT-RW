@if (isset($keluarga))
	{!! form::hidden('id', $keluarga->id) !!}
@endif

@if ($errors->any())
	<div class="form-group row {{ $errors->has('nokk')?
	'has-error' : 'has-success' }}">
@else
	<div id="form-group row">
@endif
	<label>NOKK: </label>
	<input name="nokk" type="text" class="form-control" value="{{ old('nokk') }}">
	@if($errors->has('nokk'))
		<span class="help-block">
			<strong>{{ $errors->first('nokk') }}</strong>
		</span>
	@endif
	</div>
<br>

@if ($errors->any())
	<div class="form-group row {{ $errors->has('foto')?
	'has-error' : 'has-success' }}">
@else
	<div id="form-group row">
@endif
	<label>FOTO: </label>
	<input name="foto" type="file" class="form-control">
	@if($errors->has('foto'))
	<span class="help-block">
		<strong>{{ $errors->first('foto') }}</strong>
	</span>
	@endif
	</div>
<br>

@if ($errors->any())
	<div class="form-group row {{ $errors->has('namakpk')?
	'has-error' : 'has-success' }}">
@else
	<div id="form-group row">
@endif
	<label>NAMA KEPALA KELUARGA: </label>
	<input name="namakpk" type="text" class="form-control" value="{{ old('namakpk') }}">
	@if($errors->has('namakpk'))
		<span class="help-block">
			<strong>{{ $errors->first('namakpk') }}</strong>
		</span>
	@endif
	</div>
<br>

@if ($errors->any())
	<div class="form-group row {{ $errors->has('tl')?
	'has-error' : 'has-success' }}">
@else
	<div id="form-group row">
@endif
	<label>TANGGAL LAHIR: </label>
	<input name="tl" type="date" class="form-control" value="{{ old('tl') }}">
	@if($errors->has('tl'))
		<span class="help-block">
			<strong>{{ $errors->first('tl') }}</strong>
		</span>
	@endif
	</div>
<br>

@if ($errors->any())
	<div class="form-group row {{ $errors->has('notelefon')?
	'has-error' : 'has-success' }}">
@else
	<div id="form-group row">
@endif
	<label>NOMOR TELEFON: </label>
	<input name="notelefon" type="text" class="form-control" value="{{ old('notelefon') }}">
	@if($errors->has('notelefon'))
		<span class="help-block">
			<strong>{{ $errors->first('notelefon') }}</strong>
		</span>
	@endif
	</div>
<br>

@if ($errors->any())
	<div class="form-group row {{ $errors->has('idstating')?
	'has-error' : 'has-success' }}">
@else
	<div id="form-group row">
@endif
	<label>STATUS TINGGAL: </label>
	<select name="idstating" id="idstating" class="form-control">
		<option value="">- Pilih Status Tinggal -</option>
		@foreach ($statinglist as $idstating => $name)
			<option value="{{ $idstating }}" @if ($idstating==old('idstating')) {{ 'selected' }} @endif>{{ $name }}</option>
		@endforeach
	</select>
		@if($errors->has('idstating'))
			<span class="help-block">
				<strong>{{ $errors->first('idstating') }}</strong>
			</span>
		@endif
	</div>
<br>

@if ($errors->any())
	<div class="form-group row {{ $errors->has('idalamat')?
	'has-error' : 'has-success' }}">
@else
	<div id="form-group row">
@endif
	<label>ALAMAT: </label>
	<select name="idalamat" id="idalamat" class="form-control">
		<option value="">- Pilih Alamat -</option>
		@foreach ($alamatlist as $idalamat => $name)
			<option value="{{ $idalamat }}" @if ($idalamat==old('idalamat')) {{ 'selected' }} @endif>{{ $name }}</option>
		@endforeach
	</select>
		@if($errors->has('idalamat'))
			<span class="help-block">
				<strong>{{ $errors->first('idalamat') }}</strong>
			</span>
		@endif
	</div>
<br>

@if ($errors->any())
	<div class="form-group row {{ $errors->has('norumah')?
	'has-error' : 'has-success' }}">
@else
	<div id="form-group row">
@endif
	<label>NOMOR RUMAH: </label>
	<input name="norumah" type="text" class="form-control" value="{{ old('norumah') }}">
	@if($errors->has('norumah'))
		<span class="help-block">
			<strong>{{ $errors->first('norumah') }}</strong>
		</span>
	@endif
	</div>
<br>

@if ($errors->any())
	<div class="form-group row {{ $errors->has('bansos')?
	'has-error' : 'has-success' }}">
@else
	<div id="form-group row">
@endif
	<label>BANTUAN SOSIAL: </label>
	@if(count($bansoslist)>0)
		<div class="checkbox">
		@foreach ($bansoslist as $idbansos => $name)
			<label><input type="checkbox" name="bansos[]" id="bansos" value="{{ $idbansos }}">{{ $name }}</label>
		@endforeach
		</div>
	@endif
	@if($errors->has('bansos'))
		<span class="help-block">
			<strong>{{ $errors->first('bansos') }}</strong>
		</span>
	@endif
	</div>
<br>

<br>
<div align="right" id="form-group row">
	<input type="submit" class="btn btn-primary" value="Simpan">
</div>