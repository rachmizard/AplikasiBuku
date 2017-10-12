@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
				<a class="btn btn-default btn-sm" style="margin-bottom:15px;" href="{{ url('/home') }}"><span class="glyphicon glyphicon-home"></span> Home</a>
				</div>
				<div class="panel">
				<a class="btn btn-success btn-sm" href="{{ route('home')}}"><span class="glyphicon glyphicon-back"></span> Kembali</a>
				</div>
				<div class="panel">
						<table class="table table-hover table-bordered table-striped text-justify">
							<tr>
								<td>Nama Depan</td>
								<td>Nama Belakang</td>
								<td>Status</td>
								<td>No-Handphone</td>
								<td>Alamat</td>
								<td>Username</td>
								<td>Action</td>
							</tr>
							<tr>
								<td>{{ Auth::user()->firstname }}</td>
								<td>{{ Auth::user()->lastname }}</td>
								<td>{{ Auth::user()->status }}</td>
								<td>{{ Auth::user()->nohp }}</td>
								<td>{{ Auth::user()->alamat }}</td>
								<td>{{ Auth::user()->username}}</td>
								<td><a class="btn btn-warning btn-sm" href=""><span class="glyphicon glyphicon-folder-open"></span> Setting Profile</a></td>	
							</tr>
						</table>
					</div>
			</div>
		</div>
	</div>
</div>
	

@endsection