@extends('template')

@section('content')
	<div class="col-md-10">

		@if (\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div>
		@endif

		<table class="table table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Umur</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; @endphp

				@foreach ($dataPribadi as $result)
					<tr>
						<td>{{ $no }}</td>
						<td>{{ $result->nama_lengkap }}</td>
						<td>{{ $result->email }}</td>
						<td>{{ $result->alamat }}</td>
						<td>{{ $result->umur }}</td>
						<td>
							<a href="{{ action('DataPribadiController@edit', $result->id) }}" class="btn btn-success">Edit</a>
						</td>
						<td>
							<form action="{{ action('DataPribadiController@destroy', $result->id) }}" method="post">
								<input name="_method" value="DELETE" type="hidden">
								@csrf
								<button type="submit" class="btn btn-danger">Hapus</button>
							</form>
						</td>
					</tr>
				@php $no++ @endphp
				@endforeach
			</tbody>
		</table>
	</div>
@stop