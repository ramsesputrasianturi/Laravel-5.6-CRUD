@extends('template')

@section('content')

<div class="col-md-5 col-md-offset-4">
	<form method="post" action="{{ action('DataPribadiController@update', $dataPribadi->id) }}">
		@csrf
		<input name="_method" type="hidden" value="PATCH">
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" class="form-control" name="nama_lengkap" value="{{ $dataPribadi->nama_lengkap }}">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" value="{{ $dataPribadi->email }}">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" name="alamat">{{ $dataPribadi->alamat }}</textarea>
		</div>
		<div class="form-group">
			<label>Umur</label>
			<input type="text" class="form-control" name="umur" value="{{ $dataPribadi->umur }}">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Edit</button>
		</div>
	</form>
</div>

@stop