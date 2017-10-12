@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
					<div class="panel">
						<a href="{{ route('index.pasok') }}" class="btn btn-primary btn-sm">
                             	<span class="glyphicon glyphicon-chevron-left"></span>
                             	Kembali
	                    </a>
						<div class="panel-heading">Detail Pasok</div>
							<table class="table table-hover table-bordered table-striped text-center">
								<tr>
									<td><b>DISTRIBUTOR</b></td>
									<td><b>BUKU</b></td>
									<td><b>JUMLAH</b></td>
									<td><b>TANGGAL</b></td>
									<td><b>Aksi</b></td>
								</tr>
								<tr>
									<td>{{ $showdetail->distributor->nama_distributor }}</td>
									<td>{{ $showdetail->buku->judul }}</td>
									<td>{{ $showdetail->jumlah }}</td>
									<td>{{ $showdetail->tanggal }}</td>
									<td>
									<a href="{{ route('editPasok.pasok', $showdetail->id) }}" class="btn btn-warning btn-sm">
				                         	<span class="glyphicon glyphicon-pencil"></span>
				                         	Edit
				                    </a>
				                    <a href="{{ route('deletePasok.pasok', $showdetail->id) }}" class="btn btn-danger btn-sm">
				                         	<span class="glyphicon glyphicon-remove"></span>
				                         	Hapus
				                    </a>
	                    			</td>
								</tr>
							</table>
					</div>	                	
					<div class="panel">
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection