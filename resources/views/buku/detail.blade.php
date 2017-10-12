@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
					<div class="panel">
						<a href="{{ route('index.buku') }}" class="btn btn-primary btn-sm">
					 	<span class="glyphicon glyphicon-chevron-left"></span> Kembali
						</a>
						<div class="panel-heading">Detail Buku <b>{{ $showdetail->judul }}</b></div>
							<table class="table table-hover table-bordered table-striped">
								<tr>
									<td>JUDUL</td>
									<td>NOISBN</td>
									<td>PENULIS</td>
									<td>PENERBIT</td>
									<td>TAHUN</td>
									<td>STOK</td>
									<td>HARGA POKOK</td>
									<td>HARGA JUAL</td>
									<td>PPN</td>
									<td>DISKON</td>
									<td>Aksi</td>
								</tr>
								<tr>
									<td>{{ $showdetail->judul }}</td>
									<td>{{ $showdetail->noisbn }}</td>
									<td>{{ $showdetail->penulis }}</td>
									<td>{{ $showdetail->penerbit }}</td>
									<td>{{ $showdetail->tahun }}</td>
									<td>{{ $showdetail->stok }}</td>
									<td>{{ $showdetail->harga_pokok }}</td>
									<td>{{ $showdetail->harga_jual }}</td>
									<td>{{ $showdetail->ppn }}</td>
									<td>{{ $showdetail->diskon }}%</td>
									<td>
										<a href="{{ route('edit.buku', $showdetail->id) }}" class="btn btn-warning btn-sm">
					                         	<span class="glyphicon glyphicon-pencil"></span>
					                         	Edit
					                    </a>
					                    <a href="{{ route('delete.buku', $showdetail->id) }}" class="btn btn-danger btn-sm">
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