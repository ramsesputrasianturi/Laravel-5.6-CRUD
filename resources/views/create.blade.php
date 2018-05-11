@extends('template')

@section('content')

<div class="col-md-5 col-md-offset-4">
	<form method="post" action="{{ url('datapribadi') }}">
		@csrf
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" class="form-control" name="nama_lengkap">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" name="alamat"></textarea>
		</div>
		<div class="form-group">
			<label>Umur</label>
			<input type="text" class="form-control" name="umur">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add</button>
		</div>
	</form>
</div>

@stop