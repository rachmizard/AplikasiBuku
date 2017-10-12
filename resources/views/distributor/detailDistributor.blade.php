@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
					<div class="panel">
						<div class="panel-heading">Detail Pasok</div>
							<table class="table table-hover table-bordered table-striped">
								<tr>
									<td>NAMA DISTRIBUTOR</td>
									<td>ALAMAT</td>
									<td>TELEPON</td>
								</tr>
								<tr>
									<td>{{ $distributor->nama_distributor }}</td>
									<td>{{ $distributor->alamat }}</td>
									<td>{{ $distributor->telepon }}</td>				
								</tr>
							</table>
					</div>	                	
					<div class="panel">
						<a href="{{ route('index.distributor') }}" class="btn btn-primary btn-sm">
                             	<span class="glyphicon glyphicon-chevron-left"></span>
	                    </a>
						<a href="{{ route('editDistributor.distributor', $distributor->id) }}" class="btn btn-warning btn-sm">
	                         	<span class="glyphicon glyphicon-pencil"></span>
	                    </a>
	                    <a href="{{ route('deleteDistributor.distributor', $distributor->id) }}" class="btn btn-danger btn-sm">
	                         	<span class="glyphicon glyphicon-remove"></span>
	                    </a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection